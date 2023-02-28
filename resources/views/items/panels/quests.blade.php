<?php /** @var \App\Models\Item $model */?>
<div class="box box-solid">
    <div class="box-header">
        <h3 class="box-title">
            {{ trans('entities.quests') }}
        </h3>
    </div>
    <div class="box-body">

        <?php  $r = $model->relatedQuests()->paginate(); ?>
        <table id="item-quests" class="table table-hover ">
            <tbody><tr>
                <th class="w-14"><br /></th>
                <th>{{ trans('quests.fields.name') }}</th>
                <th class="hidden-sm">{{ trans('quests.fields.role') }}</th>
                <th class="hidden-sm">{{ trans('quests.fields.type') }}</th>
                <th class="hidden-sm">{{ trans('quests.fields.quest') }}</th>
                @if ($campaignService->enabled('locations'))
                    <th class="visible-sm">{{ trans('quests.fields.locations') }}</th>
                @endif
                @if ($campaignService->enabled('characters'))
                <th>{{ trans('quests.fields.characters') }}</th>
                @endif
                <th>{{ trans('quests.fields.is_completed') }}</th>
                <th>&nbsp;</th>
            </tr>
            @foreach ($r as $quest)
                <tr>
                    <td>
                        <a class="entity-image" style="background-image: url('{{ $quest->thumbnail() }}');" title="{{ $quest->name }}" href="{{ route('quests.show', $quest->id) }}"></a>
                    </td>
                    <td>
                        {!! $quest->tooltipedLink() !!}
                    </td>
                    <td>
                        {{ $quest->pivot->role }}
                    </td>
                    <td class="hidden-sm">{{ $quest->type }}</td>
                    <td class="hidden-sm">
                        @if ($quest->quest)
                            {!! $quest->quest->tooltipedLink() !!}
                        @endif
                    </td>
                    @if ($campaignService->enabled('locations'))
                        <td class="visible-sm">
                            {{ $quest->locations()->count() }}
                        </td>
                    @endif
                    @if ($campaignService->enabled('characters'))
                    <td>
                        {{ $quest->characters()->count() }}
                    </td>
                    @endif
                    <td>
                        @if ($quest->is_completed) <i class="fa-solid fa-check-circle"></i> @endif
                    </td>
                    <td class="text-right">
                        <a href="{{ route('quests.show', [$quest]) }}" class="btn btn-xs btn-primary">
                            <i class="fa-solid fa-eye" aria-hidden="true"></i> <span class="visible-sm">{{ trans('crud.view') }}</span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if ($r->hasPages())
        <div class="box-footer text-right">
            {{ $r->links() }}
        </div>
    @endif
</div>
