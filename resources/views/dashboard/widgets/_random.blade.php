<?php
/**
 * @var \App\Models\Entity $entity
 * @var \App\Models\CampaignDashboardWidget $widget
 * @var \App\Models\Tag $tag
 */
if (!isset($offset)) {
    $offset = 0;
}

$entity = $widget->randomEntity();

if (empty($entity) || empty($entity->child)) {
    return;
}
\App\Facades\Dashboard::add($entity);
$model = $entity->child;

$specificPreview = 'dashboard.widgets.previews.' . $entity->type();
$customName = !empty($widget->conf('text')) ? str_replace('{name}', $model->name, $widget->conf('text')) : null;
$widget->setEntity($entity);
?>
@if(view()->exists($specificPreview))
    @include($specificPreview, ['entity' => $entity, 'customName' => $customName])
@else
<div class="panel panel-default widget-preview {{ $widget->customClass($campaign) }}" id="dashboard-widget-{{ $widget->id }}">
    <div
        @if ($widget->conf('entity-header') && $campaign->boosted() && $entity->header_image)
            class="panel-heading panel-heading-entity"
            style="background-image: url('{{ $entity->thumbnail(1200, 400, 'header_image') }}')"
        @elseif ($widget->conf('entity-header') && $campaign->superboosted() && $widget->entity->header)
            class="panel-heading panel-heading-entity"
            style="background-image: url('{{ Img::crop(1200, 400)->url($widget->entity->header->path) }}')"
        @elseif ($entity->child->image)
            class="panel-heading panel-heading-entity"
            style="background-image: url('{{ $entity->child->thumbnail(400) }}')"
        @elseif($campaign->superboosted() && !empty($entity->image))
            class="panel-heading panel-heading-entity"
            style="background-image: url('{{ Img::crop(1200, 400)->url($entity->image->path) }}')"
        @else
            class="panel-heading"
        @endif
    >
        <h3 class="panel-title">
            <a href="{{ $entity->url() }}">
                @if ($model->is_private)
                    <i class="fa-solid fa-lock pull-right" title="{{ trans('crud.is_private') }}"></i>
                @endif
                @if (!empty($widget->conf('text')))
                    {{ $customName }}
                @else
                    {{ $entity->name }}
                @endif
            </a>

        </h3>
    </div>
    <div class="panel-body">
        @if ($widget->conf('full') === '1')
            <div class="entity-content">
                {!! $model->entry() !!}
            </div>

            @include('dashboard.widgets.previews._members')
            @include('dashboard.widgets.previews._relations')
            @include('dashboard.widgets.previews._attributes')
        @else
        <div class="pinned-entity preview" data-toggle="preview" id="widget-preview-body-{{ $widget->id }}">
            <div class="entity-content">
                {!! $model->entry() !!}
            </div>

            @include('dashboard.widgets.previews._members')
            @include('dashboard.widgets.previews._relations')
            @include('dashboard.widgets.previews._attributes')
        </div>
        <a href="#" class="preview-switch w-full inline-block text-center hidden hidden"
           id="widget-preview-switch-{{ $widget->id }}" data-widget="{{ $widget->id }}">
            <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
            <span class="sr-only">{{ __('Show more') }}</span>
        </a>
        @endif
    </div>
</div>
@endif
