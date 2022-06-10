<div class="modal-body text-center">
    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>

    @if ($campaign->boosted())
        {{ __('maps/layers.pitch.error') }}
    @else
        @include('layouts.callouts.boost-modal', ['texts' => [__('maps/layers.pitch.until', ['max' => $max])]])
    @endif
</div>

