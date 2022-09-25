


<div class="mb-3">
    <label class="form-label" for="basic-default-name">layout</label>
    @php
        $options = [
            'default' => 'Default',
            'full-width' => 'Full Width',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_generalpage_layout');

    @endphp
     <select class="form-control" name="_theme_setting_generalpage_layout" id="_theme_setting_generalpage_layout">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_generalpage_right_sidebar_visibility">Show Right Sidebar</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_generalpage_right_sidebar_visibility');
    @endphp
     <select class="form-control" name="_theme_setting_generalpage_right_sidebar_visibility" id="_theme_setting_generalpage_right_sidebar_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_generalpage_left_sidebar_visibility">Show Left Sidebar</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_generalpage_left_sidebar_visibility');

    @endphp
     <select class="form-control" name="_theme_setting_generalpage_left_sidebar_visibility" id="_theme_setting_generalpage_left_sidebar_visibility">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

