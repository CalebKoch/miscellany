@php
$pricingOptions = [

];
if (isset($campaign) && $campaign instanceof \App\Models\Campaign) {
    $pricingOptions['callback'] = $campaign->id;
} elseif (isset($campaign) && $campaign instanceof \App\Services\CampaignService) {
    $pricingOptions['callback'] = $campaignService->campaign()->id;
}
@endphp
@if(isset($callout) && $callout)
    <div class="alert alert-info">
        <h4><i class="fa-solid fa-rocket" aria-hidden="true"></i> {{ __('crud.errors.unavailable_feature') }}</h4>
        <p>
            {!! __('crud.errors.boosted_campaigns', ['boosted' => link_to_route('front.boosters', __('crud.boosted_campaigns'), $pricingOptions)]) !!}
        </p>
    </div>
@else
    <p class="help-block">
        {!! __('crud.errors.boosted_campaigns', ['boosted' => link_to_route('front.boosters', __('crud.boosted_campaigns'), $pricingOptions)]) !!}
    </p>
@endif
