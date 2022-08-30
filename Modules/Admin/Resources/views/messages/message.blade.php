@if(session()->has('message'))
<div class="alert alert-success alert-dismissible">
    <div class="alert-heading">
        Success
    </div>
    <div class="text-success">
        {{ session()->get('message') }}
    </div>
</div>
@elseif(session()->has('error'))
<div class="alert alert-success alert-dismissible">
    <div class="alert-heading">
        Fail
    </div>
    <div class="text-success">
        {{ session()->get('error') }}
    </div>
</div>
@endif
