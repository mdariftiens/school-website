
<div class="mb-3">
    <label class="form-label" for="_theme_setting_footer_template">Footer Template</label>
    @php
        $options = [
            'default' => 'Default',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_footer_template');
    @endphp
    <select class="form-control" name="_theme_setting_footer_template" id="_theme_setting_footer_template">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_footer_copyright_text">Copyright Text</label>
    <input type="text" class="form-control" name="_theme_setting_footer_copyright_text" required value="{{ getThemeSettingValue('_theme_setting_footer_copyright_text') }}">
</div>
