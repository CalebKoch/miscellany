{!! Form::open([
    'url' => route('bulk.copy-to-campaign.apply', [$campaign, $entityType]),
    'method' => 'POST'
]) !!}
@include('partials.forms.form', [
    'title' => __('crud.copy_to_campaign.bulk_title'),
    'content' => 'cruds.datagrids.bulks.modals.forms._copy',
    'submit' => __('crud.actions.copy_to_campaign'),
    'dialog' => true,
])
<input type="hidden" name="models" />
{!! Form::close() !!}
