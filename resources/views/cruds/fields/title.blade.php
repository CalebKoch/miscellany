<x-forms.field
    field="title"
    :label="__('characters.fields.title')">

    <input type="text" name="title" value="{!! old('title', $source->title ?? $model->title ?? null) !!}"
           placeholder="{{ __('characters.placeholders.title') }}" maxlength="191" spellcheck="true" />
</x-forms.field>
