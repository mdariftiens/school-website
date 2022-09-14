


<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_visibility">Show Top Bar</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_top_bar_visibility');
    @endphp
    <select class="form-control" name="_theme_setting_top_bar_visibility" id="_theme_setting_top_bar_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_template">Template</label>
    @php
        $options = [
            'default' => 'Default',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_top_bar_template');
    @endphp
    <select class="form-control" name="_theme_setting_top_bar_template" id="_theme_setting_top_bar_template">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_phone_number">Phone Number</label>
    <input type="text" class="form-control" name="_theme_setting_top_bar_phone_number" required value="{{ getThemeSettingValue('_theme_setting_top_bar_phone_number') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_email">Email</label>
    <input type="text" class="form-control" name="_theme_setting_top_bar_email" required value="{{ getThemeSettingValue('_theme_setting_top_bar_email') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_rightside_content">Right Side Content</label>
    <input type="text" class="form-control" name="_theme_setting_top_bar_rightside_content" required value="{{ getThemeSettingValue('_theme_setting_top_bar_rightside_content') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_fb_link">FB Link</label>
    <input type="text" class="form-control" name="_theme_setting_top_bar_fb_link" required value="{{ getThemeSettingValue('_theme_setting_top_bar_fb_link') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_ln_link">LinkedIn Link</label>
    <input type="text" class="form-control" name="_theme_setting_top_bar_ln_link" required value="{{ getThemeSettingValue('_theme_setting_top_bar_ln_link') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_tw_link">Twitter Link</label>
    <input type="text" class="form-control" name="_theme_setting_top_bar_tw_link" required value="{{ getThemeSettingValue('_theme_setting_top_bar_tw_link') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_bar_yt_link">YouTube Link</label>
    <input type="text" class="form-control" name="_theme_setting_top_bar_yt_link" required value="{{ getThemeSettingValue('_theme_setting_top_bar_yt_link') }}">
</div>

