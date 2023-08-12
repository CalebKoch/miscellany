<?php

namespace App\Http\Controllers\Entity;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use App\Models\Campaign;
use App\Models\MiscModel;
use App\Services\MultiEditingService;
use App\Models\Post;
use App\Traits\GuestAuthTrait;
use App\Models\Entity;

class PostController extends Controller
{
    use GuestAuthTrait;

    public function index(Campaign $campaign, Entity $entity)
    {
        $this->authorize('browse', [$entity->child]);
        return redirect()->to($entity->url());
    }

    public function create(Campaign $campaign, Entity $entity, Post $post)
    {
        $this->authorize('post', [$entity->child, 'add']);
        $parentRoute = $entity->pluralType();

        return view('entities.pages.posts.create', compact(
            'campaign',
            'post',
            'entity',
            'parentRoute',
        ));
    }

    public function show(Campaign $campaign, Entity $entity, Post $post)
    {
        $this->authEntityView($entity);
        return redirect()->to($entity->url());
    }

    public function store(StorePost $request, Campaign $campaign, Entity $entity)
    {
        $this->authorize('post', [$entity->child, 'add']);

        // For ajax requests, send back that the validation succeeded, so we can really send the form to be saved.
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        $note = new Post();
        $note->entity_id = $entity->id;
        if ($campaign->superboosted()) {
            $note = $note->create($request->all());
        } else {
            $note = $note->create($request->except(['layout_id']));
        }

        if ($request->has('submit-new')) {
            $route = route('entities.posts.create', [$campaign, $entity]);
            return response()->redirectTo($route);
        } elseif ($request->has('submit-update')) {
            $route = route('entities.posts.edit', [$campaign, $entity, $note]);
            return response()->redirectTo($route);
        }

        return redirect()
            ->route($entity->pluralType() . '.show', [$campaign, $entity->child->id])
            ->with('success', __('entities/notes.create.success', [
                'name' => $note->name, 'entity' => $entity->child->name
            ]));
    }

    public function edit(Campaign $campaign, Entity $entity, Post $post)
    {
        $this->authorize('post', [$entity->child, 'edit', $post]);
        $editingUsers = null;

        /** @var MiscModel $model */
        $model = $post;

        if ($campaign->hasEditingWarning()) {
            /** @var MultiEditingService $editingService */
            $editingService = app()->make(MultiEditingService::class);
            $editingUsers = $editingService->model($model)->user(auth()->user())->users();
            // If no one is editing the model, we are now editing it
            if (empty($editingUsers)) {
                $editingService->edit();
            }
        }

        $parentRoute = $entity->pluralType();
        $from = request()->get('from');

        return view('entities.pages.posts.edit', compact(
            'campaign',
            'entity',
            'model',
            'parentRoute',
            'from',
            'editingUsers'
        ));
    }

    public function update(StorePost $request, Campaign $campaign, Entity $entity, Post $post)
    {
        $this->authorize('post', [$entity->child, 'edit', $post]);

        // For ajax requests, send back that the validation succeeded, so we can really send the form to be saved.
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        if ($request->isNotFilled('position')) {
            $post->update($request->except('position'));
        } else {
            $post->update($request->all());
        }

        /** @var MultiEditingService $editingService */
        $editingService = app()->make(MultiEditingService::class);
        $editingService->model($post)
            ->user($request->user())
            ->finish();


        if ($request->has('submit-new')) {
            $route = route('entities.posts.create', [$campaign, $entity]);
            return response()->redirectTo($route);
        } elseif ($request->has('submit-update')) {
            $route = route('entities.posts.edit', [$campaign, $entity, $post]);
            return response()->redirectTo($route);
        }

        return redirect()->route($entity->pluralType() . '.show', [$campaign, $entity->child->id, '#post-' . $post->id])
            ->with('success', __('entities/notes.edit.success', [
                'name' => $post->name, 'entity' => $entity->name
            ]));
    }

    public function destroy(Campaign $campaign, Entity $entity, Post $post)
    {
        $this->authorize('post', [$entity->child, 'delete']);

        $post->delete();

        return redirect()
            ->route($entity->pluralType() . '.show', [$campaign, $entity->child->id])
            ->with('success', __('entities/notes.destroy.success', [
                'name' => $post->name, 'entity' => $entity->name
            ]));
    }
}
