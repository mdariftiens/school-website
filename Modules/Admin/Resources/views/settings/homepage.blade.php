


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
    <label class="form-label" for="_theme_setting_homepage_homepage_set_page_id">
        Set Page to Show in Homepage
        <b>Note:</b> Showing only Private Published Page.
    </label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_homepage_homepage_set_page_id');
    @endphp
    <select class="form-control" name="_theme_setting_homepage_homepage_set_page_id" id="_theme_setting_homepage_homepage_set_page_id">
        @foreach($pages as $page)
            <option @if($presentValue==$page->id) selected @endif value="{{$page->id}}">{{$page->english_title}} | {{$page->bangla_title}}</option>
        @endforeach
    </select>
</div>

