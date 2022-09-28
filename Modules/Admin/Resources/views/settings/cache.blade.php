



<div class="mb-3">
    <label class="form-label" for="_theme_setting_is_enable">is_enable</label>
    @php
        $options = [
            'yes' => 'Yes',
            'no' => 'No',
        ];
        $presentValue = getThemeSettingValue('_theme_setting_is_enable');
    @endphp
    <select class="form-control" name="_theme_setting_is_enable" id="_theme_setting_is_enable" required>
        @foreach($options as  $key=>$value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="_theme_setting_ttl">ttl</label>
    <input type="number" class="form-control" name="_theme_setting_ttl" required value="{{ getThemeSettingValue('_theme_setting_ttl') }}">
</div>


<div class="mb-3">
    <a class="btn btn-info" href="{{ route('clear-cache') }}">Clear Cache</a>
</div>


