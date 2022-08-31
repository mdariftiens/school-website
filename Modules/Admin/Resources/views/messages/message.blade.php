@if(session()->has('message'))
<div class="alert alert-success alert-dismissible" style="background-color: #2b7e01 !important;">
    <div class="text-success" style="color: #fff!important">
        {{ session()->get('message') }}
    </div>
</div>
@elseif(session()->has('error'))
<div class="alert alert-success alert-dismissible">
    <div class="text-success">
        {{ session()->get('error') }}
    </div>
</div>
@endif
