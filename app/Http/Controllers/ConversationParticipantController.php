<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConversationParticipant;
use App\Models\Campaign;
use App\Models\Conversation;
use App\Models\ConversationParticipant;

class ConversationParticipantController extends Controller
{
    /**
     */
    public function index(Campaign $campaign, Conversation $conversation)
    {
        return view('conversations.participants', ['campaign' => $campaign, 'model' => $conversation]);
    }

    /**
     */
    public function store(StoreConversationParticipant $request, Campaign $campaign, Conversation $conversation)
    {
        $this->authorize('update', $conversation);

        $participant = new ConversationParticipant();
        $participant = $participant->create($request->all());

        return redirect()
            ->route('conversations.show', [$campaign, $conversation])
            ->with('success', trans('conversations.participants.create.success', [
                'name' => $conversation->name,
                'entity' => $participant->name()
            ]));
    }


    /**
     */
    public function edit(Campaign $campaign, Conversation $conversation, ConversationParticipant $conversationParticipant)
    {
        $this->authorize('update', $conversation);

        dd('CPC 055');
    }

    /**
     */
    public function update(
        StoreConversationParticipant $request,
        Campaign $campaign,
        Conversation $conversation,
        ConversationParticipant $conversationParticipant
    ) {
        $this->authorize('update', $conversation);

        $conversationParticipant->update($request->all());

        return redirect()->route('conversations.show', [$campaign, $conversation->id])
            ->with('success', trans('crud.notes.edit.success', [
                'name' => $conversationParticipant->name, 'entity' => $conversation->name
            ]));
    }

    /**
     */
    public function destroy(Campaign $campaign, Conversation $conversation, ConversationParticipant $conversationParticipant)
    {
        $this->authorize('update', $conversation);

        if (!$conversationParticipant->delete()) {
            abort(500);
        }

        return redirect()
            ->route('conversations.show', [$campaign, $conversation])
            ->with('success', trans('conversations.participants.destroy.success', [
                'name' => $conversation->name,
                'entity' => $conversationParticipant->entity()->name
            ]));
    }
}
