<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Campaign;
use App\Models\Entity;
use App\Http\Requests\StorePost as Request;
use App\Http\Resources\PostResource as Resource;
use App\Models\EntityNote;

class EntityNoteApiController extends ApiController
{
    /**
     * @param Campaign $campaign
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Campaign $campaign, Entity $entity)
    {
        $this->authorize('access', $campaign);
        $this->authorize('view', $entity->child);
        return Resource::collection($entity->notes()->paginate());
    }

    /**
     * @param Campaign $campaign
     * @param Entity $entity
     * @param EntityNote $entityNote
     * @return Resource
     */
    public function show(Campaign $campaign, Entity $entity, EntityNote $entityNote)
    {
        $this->authorize('access', $campaign);
        $this->authorize('view', $entity->child);
        return new Resource($entityNote);
    }

    /**
     * @param Request $request
     * @param Campaign $campaign
     * @return Resource
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request, Campaign $campaign, Entity $entity)
    {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);
        $data = $request->all();
        $data['entity_id'] = $entity->id;
        $model = EntityNote::create($data);
        return new Resource($model);
    }

    /**
     * @param Request $request
     * @param Campaign $campaign
     * @param Entity $entity
     * @param EntityNote $entityNote
     * @return Resource
     */
    public function update(Request $request, Campaign $campaign, Entity $entity, EntityNote $entityNote)
    {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);
        $entityNote->update($request->all());

        return new Resource($entityNote);
    }

    /**
     * @param Request $request
     * @param Campaign $campaign
     * @param Entity $entity
     * @param EntityNote $entityNote
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(
        \Illuminate\Http\Request $request,
        Campaign $campaign,
        Entity $entity,
        EntityNote $entityNote
    ) {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);
        $entityNote->delete();

        return response()->json(null, 204);
    }
}
