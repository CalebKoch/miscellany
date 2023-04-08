<?php
/**
 * @var \App\Models\Entity $entity
 * @var \App\Models\Character $model
 * @var \App\Models\Quest $model
 */
$model = $entity->child;
?>
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
            <a href="{{ $model->getLink() }}">
                @if ($model->is_private)
                    <i class="fa-solid fa-lock pull-right" title="{{ trans('crud.is_private') }}" aria-hidden="true"></i>
                @endif
                @if ($model->is_completed)
                    <i class="fa-solid fa-check-circle pull-right mr-2" title="{{ trans('quests.fields.is_completed') }}" aria-hidden="true"></i>
                @endif

                @if(!empty($customName))
                    {{ $customName }}
                @elseif (!empty($widget->conf('text')))
                    {{ $widget->conf('text') }}
                @else
                    {{ $entity->name }}
                @endif
            </a>

        </h3>
    </div>
    <div class="panel-body">
        @if ($widget->conf('full') === '1')
            @if ($campaign->enabled('characters') && !empty($model->character))
            <dl class="dl-horizontal">
                <dt>{{ __('quests.fields.character') }}</dt>
                <dd>
                    {!! $model->character->tooltipedLink() !!}
                </dd>
            </dl>
            @endif

            <div class="entity-content">
            {!! $model->entry() !!}
            </div>

            @include('dashboard.widgets.previews._members')
            @include('dashboard.widgets.previews._relations')
            @include('dashboard.widgets.previews._attributes')
        @else
        <div class="pinned-entity preview" data-toggle="preview" id="widget-preview-body-{{ $widget->id }}">

            <dl class="dl-horizontal">
                @if ($campaign->enabled('characters') && !empty($model->character))
                    <dt>{{ __('quests.fields.character') }}</dt>
                    <dd>
                        {!! $model->character->tooltipedLink() !!}
                    </dd>
                @endif
            </dl>

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
