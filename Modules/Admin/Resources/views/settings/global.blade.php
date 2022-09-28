


<div class="mb-3">
    <label class="form-label" for="basic-default-name">School Name</label>
    <input type="text" class="form-control" name="_theme_setting_school_name" required value="{{ getThemeSettingValue('_theme_setting_school_name') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="basic-default-name">School  code & eiin</label>
    <input type="text" class="form-control" name="_theme_setting_school_code_eiin" required value="{{ getThemeSettingValue('_theme_setting_school_code_eiin') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="basic-default-name">School  google map</label>
    <textarea class="form-control" name="_theme_setting_google_map" id="google_map" cols="30" rows="10">{{ getThemeSettingValue('_theme_setting_google_map') }}</textarea>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_menu_logo_url">Logo Url</label>
    <input type="url" class="form-control" name="_theme_setting_menu_logo_url" required value="{{ getThemeSettingValue('_theme_setting_menu_logo_url') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_display_menu_logo">Display Menu Logo</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_display_menu_logo');
    @endphp
    <select class="form-control" name="_theme_setting_display_menu_logo" id="_theme_setting_display_menu_logo" required>
        @foreach($options as  $key=>$value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_web_menu">select web menu</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_web_menu');
    @endphp
    <select class="form-control" name="_theme_setting_web_menu" id="_theme_setting_web_menu" required>
        @foreach($menus as  $menu)
            <option @if($presentValue==$menu->id) selected @endif value="{{$menu->id}}">{{$menu->name}}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_mobile_menu">select Mobile menu</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_mobile_menu');
    @endphp
    <select class="form-control" name="_theme_setting_mobile_menu" id="_theme_setting_mobile_menu" required>
        @foreach($menus as  $menu)
            <option @if($presentValue==$menu->id) selected @endif value="{{$menu->id}}">{{$menu->name}}</option>
        @endforeach
    </select>
</div>
