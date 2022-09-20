


<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_menu_visibility">Show Top Menu</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_top_menu_visibility');
    @endphp
    <select class="form-control" name="_theme_setting_top_menu_visibility" id="_theme_setting_top_menu_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_top_menu_template">Top Menu Template</label>
    @php
        $options = [
            'default' => 'Default',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_top_menu_template');
    @endphp
    <select class="form-control" name="_theme_setting_top_menu_template" id="_theme_setting_top_menu_template">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>



<div class="mb-3">
    <label class="form-label" for="_theme_setting_main_menu_visibility">Show Main Menu</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_main_menu_visibility');
    @endphp
    <select class="form-control" name="_theme_setting_main_menu_visibility" id="_theme_setting_main_menu_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_main_menu_template">Main Menu Template</label>
    @php
        $options = [
            'default' => 'Default',
            'style1' => 'Style 1',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_main_menu_template');
    @endphp
    <select class="form-control" name="_theme_setting_main_menu_template" id="_theme_setting_main_menu_template">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

