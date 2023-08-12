<?php
/**
 * @var \App\Models\Entity $entity
 * @var \App\Models\QuestElement $element
 */?>
@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('entities/quests.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index($entity->pluralType()), 'label' => \App\Facades\Module::plural($entity->typeId(), __('entities.' . $entity->pluralType()))],
        ['url' => $entity->url('show'), 'label' => $entity->name],
        __('entities.quests')
    ],
    'mainTitle' => false,
    'canonical' => true,
    'miscModel' => $entity->child,
    'bodyClass' => 'entity-quests'
])


@include('entities.components.header', ['model' => $entity->child, 'entity' => $entity])

@section('content')
    @include('partials.errors')


    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $entity->child,
            'entity' => $entity,
            'breadcrumb' => [
                ['url' => Breadcrumb::index($entity->pluralType()), 'label' => __('entities.' . $entity->pluralType())],
                __('entities.quests')
            ]
        ])

        @include('entities.components.menu_v2', [
            'active' => 'quests',
            'model' => $entity->child,
        ])

        <div class="entity-main-block">
            <h3 class="">
                {{ __('entities/quests.title', ['name' => $entity->name]) }}
            </h3>
            <x-box css="box-entity-quests">

                <p class="help-block">{{ __('entities/quests.helper') }}</p>

                <table id="entity-quests" class="table table-hover">
                    <tbody><tr>
                        <th class="w-14"></th>
                        <th>{{ __('quests.elements.fields.quest') }}</th>
                        <th>{{ __('quests.fields.role') }}</th>
                        <th>{{ __('quests.fields.type') }}</th>
                        <th>{{ __('quests.fields.is_completed') }}</th>
                    </tr>
                    @foreach ($quests as $element)
                        <tr>
                            <td>
                                <a class="entity-image cover-background" style="background-image: url('{{ $element->quest->thumbnail() }}');" title="{{ $element->quest->name }}" href="{{ route('quests.show', [$campaign, $element->quest]) }}"></a>
                            </td>
                            <td>
                                {!! $element->quest->tooltipedLink() !!}
                            </td>
                            <td>
                                {{ $element->role }}
                            </td>
                            <td>
                                {{ $element->quest->type }}
                            </td>
                            <td>
                                @if($element->quest->is_completed)
                                    <i class="fa-solid fa-check-circle" aria-hidden="true"></i>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @if($quests->hasPages())
                    <div class="text-right">
                        {{ $quests->links() }}
                    </div>
                @endif
            </x-box>
        </div>
    </div>
@endsection
