<div class="mb-3">
    <label class="form-label" for="_theme_setting_english_font">english_font</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_english_font');

    @endphp
    <select class="form-control" name="_theme_setting_english_font" id="_theme_setting_english_font">
        @foreach(config('fonts.english') as  $value)
            <option @if($presentValue==$value) selected @endif value="{{$value}}">{{str_replace("+",' ',$value)}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_bangla_font">Bangla Font</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_bangla_font');

    @endphp
    <select class="form-control" name="_theme_setting_bangla_font" id="_theme_setting_bangla_font">
        @foreach(config('fonts.bangla') as  $value)
            <option @if($presentValue==$value) selected @endif value="{{$value}}">{{str_replace("+",' ',$value)}}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_color">color</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_color');
    @endphp
    <input type="color" class="form-control" value="{{$presentValue}}" name="_theme_setting_color" id="_theme_setting_color">
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_color">bg Color</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_bgColor');
    @endphp
    <input type="color" class="form-control" value="{{$presentValue}}" name="_theme_setting_bgColor" id="_theme_setting_bgColor">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_titleColor">Title Color</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_titleColor');
    @endphp
    <input type="color" class="form-control" value="{{$presentValue}}" name="_theme_setting_titleColor" id="_theme_setting_titleColor">
</div>
