<div class="mb-3">
    <label class="form-label" for="_theme_setting_header_template">Show Top Bar</label>
    @php
        $options = [
            'default' => 'Default',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_header_template');
    @endphp
    <select class="form-control" name="_theme_setting_header_template" id="_theme_setting_header_template">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>
