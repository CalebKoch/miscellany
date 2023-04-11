<?php
/** @var \App\Models\Entity $connection
 * @var \App\Services\Entity\ConnectionService $connectionService
 */
?>
<div class="box box-solid box-entity-connections" id="entity-related">
    <div class="box-header">
        <h3 class="box-title">
            {{ __('entities/relations.panels.related') }}
        </h3>
    </div>
    <div class="box-body">
        <table class="table table-hover">
            <thead>
            <tr>
                <th colspan="2">
                    @if(request()->get('order') == 'name' || !request()->has('order'))
                        {{ __('crud.fields.entity') }}
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    @else
                        <a href="{{ route('entities.relations.index', [$entity, 'mode' => 'table', '#entity-related', 'order' => 'name']) }}">
                            {{ __('crud.fields.name') }}
                        </a>
                    @endif
                </th>
                <th>
                    @if(request()->get('order') == 'type_id')
                        {{ __('crud.fields.entity_type') }}

                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    @else
                    <a href="{{ route('entities.relations.index', [$entity, 'mode' => 'table', '#entity-related', 'order' => 'type_id']) }}">
                        {{ __('crud.fields.entity_type') }}
                    </a>
                    @endif
                </th>
                <th>{{ __('entities/relations.fields.connection') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($connections as $connection)
                <tr data-entity-id="{{ $connection->id }}" data-entity-type="{{ $connection->type() }}">
                    <td class="w-14">
                        <x-entities.thumbnail :entity="$connection" :title="$connection->name"></x-entities.thumbnail>
                    </td>
                    <td>
                        {!! $connection->tooltipedLink() !!}

                        @if ($connection->type() == 'map')
                            <a href="{{ route('maps.explore', $connection->entity_id) }}" class="btn btn-xs btn-primary" target="_blank">
                                <i class="fa-solid fa-map" aria-hidden="true"></i> {{ __('maps.actions.explore') }}
                            </a>
                        @endif
                    </td>
                    <td>
                        {{ $connection->entityType() }}
                    </td>
                    <td>
                        {{ $connectionService->connectionsText($connection->id) }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if ($connections->hasPages())
    <div class="box-footer">
        {{ $connections->appends(['mode' => $mode, 'order' => request()->get('order')])->fragment('entity-connections')->links() }}
    </div>
    @endif
</div>
