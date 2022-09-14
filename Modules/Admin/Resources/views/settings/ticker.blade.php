


<div class="mb-3">
    <label class="form-label" for="_theme_setting_ticker_visibility_only_homepage">ticker_visibility_only_homepage</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('ticker_visibility_only_homepage');
    @endphp
    <select class="form-control" name="ticker_visibility_only_homepage" id="ticker_visibility_only_homepage">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_ticker_template">Ticker Template</label>
    @php
        $options = [
            'default' => 'Default',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_ticker_template');
    @endphp
    <select class="form-control" name="_theme_setting_ticker_template" id="_theme_setting_ticker_template">
        @foreach($options as  $key => $value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

