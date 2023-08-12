<?php

namespace App\Http\Controllers\Families;

use App\Facades\Datagrid;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCharacterFamily;
use App\Models\Campaign;
use App\Models\CampaignPermission;
use App\Models\Family;
use App\Traits\CampaignAware;
use App\Traits\Controllers\HasDatagrid;
use App\Traits\Controllers\HasSubview;
use App\Traits\GuestAuthTrait;

class MemberController extends Controller
{
    use CampaignAware;
    use HasDatagrid;
    use HasSubview;
    use GuestAuthTrait;

    /**
     * @var string
     */
    protected string $view = 'families.members';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(Campaign $campaign, Family $family)
    {
        if (auth()->check()) {
            $this->authorize('view', $family);
        } else {
            $this->authorizeForGuest(CampaignPermission::ACTION_READ, $family, $family->entity->type_id);
        }

        $options = ['campaign' => $campaign, 'family' => $family];
        $filters = [];
        $relation = 'allMembers';
        if (request()->has('family_id')) {
            $options['family_id'] = $family->id;
            $filters['family_id'] = $options['family_id'];
            $relation = 'members';
        }
        Datagrid::layout(\App\Renderers\Layouts\Family\Character::class)
            ->route('families.members', $options)
        ;

        $this->rows = $family
            ->{$relation}()
            ->sort(request()->only(['o', 'k']), ['name' => 'asc'])
            ->filter($filters)
            ->with([
                'location', 'location.entity',
                'families', 'families.entity',
                'races', 'races.entity',
                'entity', 'entity.tags', 'entity.image'
            ])
            ->has('entity')
            ->paginate(15);

        // Ajax Datagrid
        if (request()->ajax()) {
            return $this->campaign($campaign)->datagridAjax();
        }
        return $this
            ->campaign($campaign)
            ->subview('families.members', $family);
    }

    public function create(Campaign $campaign, Family $family)
    {
        $this->authorize('update', $family);

        return view('families.members.create', [
            'campaign' => $campaign,
            'model' => $family,
        ]);
    }

    public function store(StoreCharacterFamily $request, Campaign $campaign, Family $family)
    {
        $this->authorize('update', $family);

        $newMembers = $family->members()->syncWithoutDetaching($request->members);

        return redirect()->route('families.show', [$campaign, $family->id])
            ->with('success', trans_choice('families.members.create.success', count($newMembers['attached']), ['count' => count($newMembers['attached'])]));
    }
}
