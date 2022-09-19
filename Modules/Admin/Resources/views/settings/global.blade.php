


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
