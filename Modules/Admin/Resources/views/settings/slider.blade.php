<div class="mb-3">
    <label class="form-label" for="basic-default-name">Select Slider</label>
    @php
        $presentValue = getThemeSettingValue('_theme_setting_slider_id');
    @endphp
     <select class="form-control" name="_theme_setting_homepage_layout" id="_theme_setting_homepage_layout">
        @foreach($sliders as  $slider)
            <option @if($presentValue==$slider->id) selected @endif value="{{$slider->id}}">
                {{$slider->english_title}} | {{$slider->bangla_title}}
            </option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_item_to_show">Number of Image to Show</label>
    <input  class="form-control" type="number" name="_theme_setting_slider_item_to_show" id="_theme_setting_slider_item_to_show" value="{{ getThemeSettingValue('_theme_setting_slider_item_to_show') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_autoplay">Slider Autoplay</label>
    @php
        $options = [
            'true' => 'Yes',
            'false' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_slider_autoplay');
    @endphp
     <select class="form-control" name="_theme_setting_slider_autoplay" id="_theme_setting_slider_autoplay">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_autoplayTimeout">Slider Autoplaay Timeout</label>
    <input  class="form-control" type="number" name="_theme_setting_slider_autoplayTimeout" id="_theme_setting_slider_autoplayTimeout" value="{{ getThemeSettingValue('_theme_setting_slider_autoplayTimeout') }}">
</div>


<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_loop">Slider Loop?</label>
    @php
        $options = [
            'true' => 'Yes',
            'false' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_slider_loop');
    @endphp
    <select class="form-control" name="_theme_setting_slider_loop" id="_theme_setting_slider_loop">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_autoplayHoverPause">Slider autoplay Hover Pause </label>
    @php
        $options = [
            'true' => 'Yes',
            'false' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_slider_autoplayHoverPause');
    @endphp
    <select class="form-control" name="_theme_setting_slider_autoplayHoverPause" id="_theme_setting_slider_autoplayHoverPause">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_dots">Slider show Dots?</label>
    @php
        $options = [
            'true' => 'Yes',
            'false' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_slider_dots');
    @endphp
    <select class="form-control" name="_theme_setting_slider_dots" id="_theme_setting_slider_dots">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_lazyLoad">Slider Image Lazyload?</label>
    @php
        $options = [
            'true' => 'Yes',
            'false' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_slider_lazyLoad');
    @endphp
    <select class="form-control" name="_theme_setting_slider_lazyLoad" id="_theme_setting_slider_lazyLoad">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_nav_show">Slider Nav Button show?</label>
    @php
        $options = [
            'true' => 'Yes',
            'false' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_slider_nav_show');
    @endphp
    <select class="form-control" name="_theme_setting_slider_nav_show" id="_theme_setting_slider_nav_show">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>



<div class="mb-3">
    <label class="form-label" for="_theme_setting_slider_navText">Slider navText</label>
    <input  class="form-control" type="text" name="_theme_setting_slider_navText" id="_theme_setting_slider_navText" value="{{ getThemeSettingValue('_theme_setting_slider_navText') }}">
</div>
