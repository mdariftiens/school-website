


<div class="mb-3">
    <label class="form-label" for="send_mail_enable">Mail Enable</label>
    @php
        $options = [
            'no' => 'No',
            'yes' => 'Yes',
        ];
        $presentValue = getThemeSettingValue('send_mail_enable');
    @endphp
    <select class="form-control" name="send_mail_enable" id="send_mail_enable">
        @foreach($options as  $key=>$value)
            <option @if($presentValue==$key) selected @endif value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label" for="mail_host">Mail Host</label>
    <input type="text" class="form-control" name="mail_host" value="{{ getThemeSettingValue('mail_host') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="mail_host">Mail Port</label>
    <input type="number" class="form-control" name="mail_port" value="{{ getThemeSettingValue('mail_port') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="mail_host">Mail Username</label>
    <input type="text" class="form-control" name="mail_username" value="{{ getThemeSettingValue('mail_username') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="mail_host">Mail Password</label>
    <input type="text" class="form-control" name="mail_password" value="{{ getThemeSettingValue('mail_password') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="mail_host">Mail From Address</label>
    <input type="email" class="form-control" name="mail_from_address" value="{{ getThemeSettingValue('mail_from_address') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="mail_host">Mail_From Name</label>
    <input type="text" class="form-control" name="mail_from_name" value="{{ getThemeSettingValue('mail_from_name') }}">
</div>
