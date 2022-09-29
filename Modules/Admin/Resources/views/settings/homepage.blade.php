


<div class="mb-3">
    <label class="form-label" for="basic-default-name">layout</label>
    @php
        $options = [
            'default' => 'Default',
            'full-width' => 'full-width',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_homepage_layout');

    @endphp
     <select class="form-control" name="_theme_setting_homepage_layout" id="_theme_setting_homepage_layout">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_homepage_slider_visibility">Show Slider</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_homepage_slider_visibility');
    @endphp
     <select class="form-control" name="_theme_setting_homepage_slider_visibility" id="_theme_setting_homepage_slider_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_homepage_right_sidebar_visibility">Show Right Sidebar</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_homepage_right_sidebar_visibility');

    @endphp
     <select class="form-control" name="_theme_setting_homepage_right_sidebar_visibility" id="_theme_setting_homepage_right_sidebar_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_homepage_left_sidebar_visibility">Show Left Sidebar</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_homepage_left_sidebar_visibility');

    @endphp
     <select class="form-control" name="_theme_setting_homepage_left_sidebar_visibility" id="_theme_setting_homepage_left_sidebar_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_homepage_about_school_visibility">Show About School</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_homepage_about_school_visibility');

    @endphp
     <select class="form-control" name="_theme_setting_homepage_about_school_visibility" id="_theme_setting_homepage_about_school_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_homepage_bangla_about_school_title">About School Title(Bangla)</label>
    <input  class="form-control" type="text" name="_theme_setting_homepage_bangla_about_school_title" id="_theme_setting_homepage_bangla_about_school_title" value="{{ getThemeSettingValue('_theme_setting_homepage_bangla_about_school_title') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_homepage_bangla_about_school_detail">About School Detail(Bangla)</label>
    <textarea class="form-control" name="_theme_setting_homepage_bangla_about_school_detail" id="_theme_setting_homepage_bangla_about_school_detail" cols="30" rows="10">{{ getThemeSettingValue('_theme_setting_homepage_bangla_about_school_detail') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_homepage_english_about_school_title">About School Title(English)</label>
    <input  class="form-control" type="text" name="_theme_setting_homepage_english_about_school_title" id="_theme_setting_homepage_english_about_school_title" value="{{ getThemeSettingValue('_theme_setting_homepage_english_about_school_title') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_homepage_english_about_school_detail">About School Detail(English)</label>
    <textarea class="form-control" name="_theme_setting_homepage_english_about_school_detail" id="_theme_setting_homepage_english_about_school_detail" cols="30" rows="10">{{ getThemeSettingValue('_theme_setting_homepage_english_about_school_detail') }}</textarea>
</div>
