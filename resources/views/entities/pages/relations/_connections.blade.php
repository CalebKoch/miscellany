<?php
/** @var \App\Models\Entity $connection
 * @var \App\Services\Entity\ConnectionService $connectionService
 */
?>
<h3 class="">
    {{ __('entities/relations.panels.related') }}
</h3>
<x-box css="box-entity-connections" id="entity-related" :padding="false">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th colspan="2">
                    @if(request()->get('order') == 'name' || !request()->has('order'))
                        {{ __('crud.fields.entity') }}
                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    @else
                        <a href="{{ route('entities.relations.index', [$campaign, $entity, 'mode' => 'table', '#entity-related', 'order' => 'name']) }}">
                            {{ __('crud.fields.name') }}
                        </a>
                    @endif
                </th>
                <th>
                    @if(request()->get('order') == 'type_id')
                        {{ __('crud.fields.entity_type') }}

                        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
                    @else
                    <a href="{{ route('entities.relations.index', [$campaign, $entity, 'mode' => 'table', '#entity-related', 'order' => 'type_id']) }}">
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
                            <a href="{{ route('maps.explore', [$campaign, $connection->entity_id]) }}" class="btn2 btn-xs btn-primary" target="_blank">
                                <x-icon class="map"></x-icon> {{ __('maps.actions.explore') }}
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
    <div class="text-right">
        {{ $connections->appends(['mode' => $mode, 'order' => request()->get('order')])->fragment('entity-connections')->onEachSide(0)->links() }}
    </div>
    @endif
</x-box>
