<div class="mb-3">
    <label class="form-label" for="_theme_setting_color">color</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_color');
    @endphp
    <input type="color" value="{{$presentValue}}" name="_theme_setting_color" id="_theme_setting_color">
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_color">bg Color</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_bgColor');
    @endphp
    <input type="color" value="{{$presentValue}}" name="_theme_setting_bgColor" id="_theme_setting_bgColor">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_titleColor">Title Color</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_titleColor');
    @endphp
    <input type="color" value="{{$presentValue}}" name="_theme_setting_titleColor" id="_theme_setting_titleColor">
</div>
