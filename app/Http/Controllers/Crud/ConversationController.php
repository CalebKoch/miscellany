<?php

namespace App\Http\Controllers\Crud;

use App\Datagrids\Actions\DeprecatedDatagridActions;
use App\Datagrids\Filters\ConversationFilter;
use App\Http\Controllers\CrudController;
use App\Http\Requests\StoreConversation;
use App\Models\Campaign;
use App\Models\Conversation;

class ConversationController extends CrudController
{
    /**
     */
    protected string $view = 'conversations';
    protected string $route = 'conversations';
    protected $module = 'conversations';

    /** @var string Model */
    protected $model = Conversation::class;

    /** @var string Filter */
    protected string $filter = ConversationFilter::class;

    /**  */
    protected string $datagridActions = DeprecatedDatagridActions::class;

    protected string $forceMode = 'table';

    protected function getNavActions(): CrudController
    {
        $this->addNavAction(
            '//docs.kanka.io/en/latest/entities/conversations.html',
            '<i class="fa-solid fa-question-circle" aria-hidden="true"></i> ' . __('crud.actions.help'),
            '',
            true
        );
        return parent::getNavActions(); // TODO: Change the autogenerated stub
    }

    /**
     */
    public function store(StoreConversation $request, Campaign $campaign)
    {
        return $this->campaign($campaign)->crudStore($request);
    }

    /**
     */
    public function show(Campaign $campaign, Conversation $conversation)
    {
        return $this->campaign($campaign)->crudShow($conversation);
    }

    /**
     */
    public function edit(Campaign $campaign, Conversation $conversation)
    {
        return $this->campaign($campaign)->crudEdit($conversation);
    }

    /**
     */
    public function update(StoreConversation $request, Campaign $campaign, Conversation $conversation)
    {
        return $this->campaign($campaign)->crudUpdate($request, $conversation);
    }

    /**
     */
    public function destroy(Campaign $campaign, Conversation $conversation)
    {
        return $this->campaign($campaign)->crudDestroy($conversation);
    }
}
