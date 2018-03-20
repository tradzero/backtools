<!-- Input -->
<div class="form-group">
    <label class="control-label">Input Label</label>
    <input type="text" class="form-control"
        name="" placeholder="Placeholder"
        value="{{ get_blade_input_value($model, 'attr') }}">
</div>

<!-- Select -->
<div class="form-group">
    <label calss="control-label">Select Label</label>
    <select class="form-control" name="attr">
        <option value="" disabled hidden selected>Placeholder</option>
        @foreach($models as $key => $model)
        <option value="{{ $key }}"
            {{ get_blade_option_selected($model, 'attr', $key) }}>{{ $model->name }}</option>
        @endforeach
    </select>
</div>
