@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Menu')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <div class="container-fluid">
        <h2><span>Menus</span></h2>

        <div class="content info-box">
            <div class="content info-box">
                @if(count($menus) > 0)
                    Select a menu to edit:
                    <form action="{{route('manage-menus')}}" class="form-inline">
                        <select name="id">
                            @foreach($menus as $menu)
                                @if($desiredMenu != '')
                                    <option value="{{$menu->id}}" @if($menu->id == $desiredMenu->id) selected @endif>{{$menu->title}}</option>
                                @else
                                    <option value="{{$menu->id}}">{{$menu->title}}</option>
                                @endif
                            @endforeach
                        </select>
                        <button class="btn btn-sm btn-default btn-menu-select">Select</button>
                    </form>
                    or <a href="{{route('create-new-menu')}}">Create a new menu</a>.
                @endif
            </div>
        </div>

        <div class="row" id="main-row">
            <div class="col-sm-3 cat-form @if(count($menus) == 0) disabled @endif">
                <h3><span>Add Menu Items</span></h3>

                <div class="panel-group" id="menu-items">
{{--                    <div class="panel panel-default">--}}
{{--                        <div class="panel-heading">--}}
{{--                            <a href="#categories-list" data-toggle="collapse" data-parent="#menu-items">Categories <span class="caret pull-right"></span></a>--}}
{{--                        </div>--}}
{{--                        <div class="panel-collapse collapse in" id="categories-list">--}}
{{--                            <div class="panel-body">--}}
{{--                                <div class="item-list-body">--}}
{{--                                    @foreach($categories as $cat)--}}
{{--                                        <p><input type="checkbox" name="select-category[]" value="{{$cat->id}}"> {{$cat->title}}</p>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                                <div class="item-list-footer">--}}
{{--                                    <label class="btn btn-sm btn-default"><input type="checkbox" id="select-all-categories"> Select All</label>--}}
{{--                                    <button type="button" class="pull-right btn btn-default btn-sm" id="add-categories">Add to Menu</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="panel panel-default">--}}
{{--                        <div class="panel-heading">--}}
{{--                            <a href="#posts-list" data-toggle="collapse" data-parent="#menu-items">posts <span class="caret pull-right"></span></a>--}}
{{--                        </div>--}}
{{--                        <div class="panel-collapse collapse" id="posts-list">--}}
{{--                            <div class="panel-body">--}}
{{--                                <div class="item-list-body">--}}
{{--                                    @foreach($posts as $post)--}}
{{--                                        <p><input type="checkbox" name="select-post[]" value="{{$post->id}}"> {{$post->title}}</p>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                                <div class="item-list-footer">--}}
{{--                                    <label class="btn btn-sm btn-default"><input type="checkbox" id="select-all-posts"> Select All</label>--}}
{{--                                    <button type="button" id="add-posts" class="pull-right btn btn-default btn-sm">Add to Menu</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#custom-links" data-toggle="collapse" data-parent="#menu-items">Custom Links <span class="caret pull-right"></span></a>
                        </div>
                        <div class="panel-collapse collapse" id="custom-links">
                            <div class="panel-body">
                                <div class="item-list-body">
                                    <div class="form-group">
                                        <label>URL</label>
                                        <input type="url" id="url" class="form-control" placeholder="https://">
                                    </div>
                                    <div class="form-group">
                                        <label>Link Text</label>
                                        <input type="text" id="linktext" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="item-list-footer">
                                    <button type="button" class="pull-right btn btn-default btn-sm" id="add-custom-link">Add to Menu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 cat-view">
                <h3><span>Menu Structure</span></h3>
                @if($desiredMenu == '')
                    <h4>Create New Menu</h4>
                    <form method="post" action="{{route('create-menu')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Name</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-sm btn-primary">Create Menu</button>
                            </div>
                        </div>
                    </form>
                @else
                    <div id="menu-content">
                        <div id="serialize_output">@if($desiredMenu){{$desiredMenu->content}}@endif</div>
                        <div style="min-height: 240px;">
                            <p>Select categories, pages or add custom links to menus.</p>
                            @if($desiredMenu != '')
                                <ul class="menus ui-sortable" id="menuitems">
                                    @if(!empty($menuitems))
                                        @foreach($menuitems as $key=>$item)
                                            <li data-id="{{$item->id}}"><span class="menu-item-bar"><i class="fa fa-arrows"></i> @if(empty($item->name)) {{$item->title}} @else {{$item->name}} @endif <a href="#collapse{{$item->id}}" class="pull-right" data-toggle="collapse"><i class="caret"></i></a></span>
                                                <div class="collapse" id="collapse{{$item->id}}">
                                                    <div class="input-box">
                                                        <form method="post" action="{{route('update-menuitem',$item->id)}}">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label>Link Name</label>
                                                                <input type="text" name="name" value="@if(empty($item->name)) {{$item->title}} @else {{$item->name}} @endif" class="form-control">
                                                            </div>
                                                            @if($item->type == 'custom')
                                                                <div class="form-group">
                                                                    <label>URL</label>
                                                                    <input type="text" name="slug" value="{{$item->slug}}" class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="checkbox" name="target" value="_blank" @if($item->target == '_blank') checked @endif> Open in a new tab
                                                                </div>
                                                            @endif
                                                            <div class="form-group">
                                                                <button class="btn btn-sm btn-primary">Save</button>
                                                                <a href="{{route('delete-menuitem',[$item->id, $key])}}" class="btn btn-sm btn-danger">Delete</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <ul>
                                                    @if(isset($item->children))
                                                        @foreach($item->children as $m)
                                                            @foreach($m as $in=>$data)
                                                                <li data-id="{{$data->id}}" class="menu-item"> <span class="menu-item-bar"><i class="fa fa-arrows"></i> @if(empty($data->name)) {{$data->title}} @else {{$data->name}} @endif <a href="#collapse{{$data->id}}" class="pull-right" data-toggle="collapse"><i class="caret"></i></a></span>
                                                                    <div class="collapse" id="collapse{{$data->id}}">
                                                                        <div class="input-box">
                                                                            <form method="post" action="{{route('update-menuitem',$item->id)}}">
                                                                                {{csrf_field()}}
                                                                                <div class="form-group">
                                                                                    <label>Link Name</label>
                                                                                    <input type="text" name="name" value="@if(empty($data->name)) {{$data->title}} @else {{$data->name}} @endif" class="form-control">
                                                                                </div>
                                                                                @if($data->type == 'custom')
                                                                                    <div class="form-group">
                                                                                        <label>URL</label>
                                                                                        <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="checkbox" name="target" value="_blank" @if($data->target == '_blank') checked @endif> Open in a new tab
                                                                                    </div>
                                                                                @endif
                                                                                <div class="form-group">
                                                                                    <button class="btn btn-sm btn-primary">Save</button>
                                                                                    <a href="{{route('delete-menuitem',[$data->id, $key, $in])}}" class="btn btn-sm btn-danger">Delete</a>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <ul>
                                                                        @if(isset($m[0]->children))
                                                                            @foreach($m[0]->children as $n)
                                                                                @foreach($n as $inn=>$NData)
                                                                                    <li data-id="{{$NData->id}}" class="menu-item"> <span class="menu-item-bar"><i class="fa fa-arrows"></i> @if(empty($NData->name)) {{$NData->title}} @else {{$NData->name}} @endif <a href="#collapse{{$NData->id}}" class="pull-right" data-toggle="collapse"><i class="caret"></i></a></span>
                                                                                        <div class="collapse" id="collapse{{$NData->id}}">
                                                                                            <div class="input-box">
                                                                                                <form method="post" action="{{route('update-menuitem',$item->id)}}">
                                                                                                    {{csrf_field()}}
                                                                                                    <div class="form-group">
                                                                                                        <label>Link Name</label>
                                                                                                        <input type="text" name="name" value="@if(empty($NData->name)) {{$NData->title}} @else {{$NData->name}} @endif" class="form-control">
                                                                                                    </div>
                                                                                                    @if($NData->type == 'custom')
                                                                                                        <div class="form-group">
                                                                                                            <label>URL</label>
                                                                                                            <input type="text" name="slug" value="{{$NData->slug}}" class="form-control">
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <input type="checkbox" name="target" value="_blank" @if($NData->target == '_blank') checked @endif> Open in a new tab
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    <div class="form-group">
                                                                                                        <button class="btn btn-sm btn-primary">Save</button>
                                                                                                        <a href="{{route('delete-menuitem',[$NData->id, $key, $inn])}}" class="btn btn-sm btn-danger">Delete</a>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul>
                                                                                            @if(isset($n[0]->children))
                                                                                                @foreach($n[0]->children as $nchild)
                                                                                                    @foreach($nchild as $nChildKey=>$nChildData)
                                                                                                        <li data-id="{{$nChildData->id}}" class="menu-item"> <span class="menu-item-bar"><i class="fa fa-arrows"></i> @if(empty($nChildData->name)) {{$nChildData->title}} @else {{$nChildData->name}} @endif <a href="#collapse{{$nChildData->id}}" class="pull-right" data-toggle="collapse"><i class="caret"></i></a></span>
                                                                                                            <div class="collapse" id="collapse{{$nChildData->id}}">
                                                                                                                <div class="input-box">
                                                                                                                    <form method="post" action="{{route('update-menuitem',$item->id)}}">
                                                                                                                        {{csrf_field()}}
                                                                                                                        <div class="form-group">
                                                                                                                            <label>Link Name</label>
                                                                                                                            <input type="text" name="name" value="@if(empty($nChildData->name)) {{$nChildData->title}} @else {{$nChildData->name}} @endif" class="form-control">
                                                                                                                        </div>
                                                                                                                        @if($nChildData->type == 'custom')
                                                                                                                            <div class="form-group">
                                                                                                                                <label>URL</label>
                                                                                                                                <input type="text" name="slug" value="{{$nChildData->slug}}" class="form-control">
                                                                                                                            </div>
                                                                                                                            <div class="form-group">
                                                                                                                                <input type="checkbox" name="target" value="_blank" @if($nChildData->target == '_blank') checked @endif> Open in a new tab
                                                                                                                            </div>
                                                                                                                        @endif
                                                                                                                        <div class="form-group">
                                                                                                                            <button class="btn btn-sm btn-primary">Save</button>
                                                                                                                            <a href="{{route('delete-menuitem',[$nChildData->id, $key, $nChildKey])}}" class="btn btn-sm btn-danger">Delete</a>
                                                                                                                        </div>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <ul>
                                                                                                                @if(isset($nchild[0]->children))
                                                                                                                    @foreach($nchild[0]->children as $childFive)
                                                                                                                        @foreach($childFive as $ChildFiveKey=>$ChildFive)
                                                                                                                            <li data-id="{{$ChildFive->id}}" class="menu-item"> <span class="menu-item-bar"><i class="fa fa-arrows"></i> @if(empty($ChildFive->name)) {{$ChildFive->title}} @else {{$ChildFive->name}} @endif <a href="#collapse{{$ChildFive->id}}" class="pull-right" data-toggle="collapse"><i class="caret"></i></a></span>
                                                                                                                                <div class="collapse" id="collapse{{$ChildFive->id}}">
                                                                                                                                    <div class="input-box">
                                                                                                                                        <form method="post" action="{{route('update-menuitem',$ChildFive->id)}}">
                                                                                                                                            {{csrf_field()}}
                                                                                                                                            <div class="form-group">
                                                                                                                                                <label>Link Name</label>
                                                                                                                                                <input type="text" name="name" value="@if(empty($ChildFive->name)) {{$ChildFive->title}} @else {{$ChildFive->name}} @endif" class="form-control">
                                                                                                                                            </div>
                                                                                                                                            @if($ChildFive->type == 'custom')
                                                                                                                                                <div class="form-group">
                                                                                                                                                    <label>URL</label>
                                                                                                                                                    <input type="text" name="slug" value="{{$ChildFive->slug}}" class="form-control">
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group">
                                                                                                                                                    <input type="checkbox" name="target" value="_blank" @if($ChildFive->target == '_blank') checked @endif> Open in a new tab
                                                                                                                                                </div>
                                                                                                                                            @endif
                                                                                                                                            <div class="form-group">
                                                                                                                                                <button class="btn btn-sm btn-primary">Save</button>
                                                                                                                                                <a href="{{route('delete-menuitem',[$ChildFive->id, $key, $ChildFiveKey])}}" class="btn btn-sm btn-danger">Delete</a>
                                                                                                                                            </div>
                                                                                                                                        </form>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <ul></ul>
                                                                                                                            </li>
                                                                                                                        @endforeach
                                                                                                                    @endforeach
                                                                                                                @endif
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    @endforeach
                                                                                                @endforeach
                                                                                            @endif
                                                                                        </ul>
                                                                                    </li>
                                                                                @endforeach
                                                                            @endforeach
                                                                        @endif
                                                                    </ul>
                                                                </li>
                                                            @endforeach
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            @endif
                        </div>
                        <style>
                            .menu-item-bar{background: #eee;padding: 5px 10px;border:1px solid #d7d7d7;margin-bottom: 5px; width: 75%; cursor: move;display: block;}
                            #serialize_output{display: none;}
                            .menulocation label{font-weight: normal;display: block;}
                            body.dragging, body.dragging * {cursor: move !important;}
                            .dragged {position: absolute;z-index: 1;}
                            ol.example li.placeholder {position: relative;}
                            ol.example li.placeholder:before {position: absolute;}
                            #menuitem{list-style: none;}
                            #menuitem ul{list-style: none;}
                            .input-box{width:75%;background:#fff;padding: 10px;box-sizing: border-box;margin-bottom: 5px;}
                            .input-box .form-control{width: 50%}
                            .menulocation label{font-weight: normal;display: block;}
                        </style>
                        @if($desiredMenu != '')
                            <div class="form-group menulocation">
                                <label><b>Menu Location</b></label>
                                <label><input type="radio" name="location" value="1" @if($desiredMenu->location == 1) checked @endif> Header</label>
                                <label><input type="radio" name="location" value="2" @if($desiredMenu->location == 2) checked @endif> Main Navigation</label>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-sm btn-primary" id="saveMenu">Save Menu</button>
                            </div>
                            <p><a href="{{route('delete-menu',$desiredMenu->id)}}">Delete Menu</a></p>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
    <style>
        .item-list,.info-box{background: #fff;padding: 10px;}
        .item-list-body{max-height: 300px;overflow-y: scroll;}
        .panel-body p{margin-bottom: 5px;}
        .info-box{margin-bottom: 15px;}
        .item-list-footer{padding-top: 10px;}
        .panel-heading a{display: block;}
        .form-inline{display: inline;}
        .form-inline select{padding: 4px 10px;}
        .btn-menu-select{padding: 4px 10px}
        .disabled{pointer-events: none; opacity: 0.7;}
    </style>
@endsection

@push('menu-script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/admin/new-sortable.js') }}"></script>
    <script>
        $('#select-all-categories').click(function(event) {
            if(this.checked) {
                $('#categories-list :checkbox').each(function() {
                    this.checked = true;
                });
            }else{
                $('#categories-list :checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    </script>
    <script>
        $('#select-all-posts').click(function(event) {
            if(this.checked) {
                $('#posts-list :checkbox').each(function() {
                    this.checked = true;
                });
            }else{
                $('#posts-list :checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    </script>
    <script>

        $('#add-categories').click(function(){
            alert("ok");
            var menuid = <?=$desiredMenu->id?>;
            var n = $('input[name="select-category[]"]:checked').length;
            var array = $('input[name="select-category[]"]:checked');
            var ids = [];
            for(i=0;i<n;i++){
                ids[i] =  array.eq(i).val();
            }
            if(ids.length == 0){
                return false;
            }
            $.ajax({
                type:"get",
                data: {menuid:menuid,ids:ids},
                url: "{{route('add-categories-to-menu')}}",
                success:function(res){
                    location.reload();
                }
            })
        })
        $('#add-posts').click(function(){
            var menuid = <?=$desiredMenu->id?>;
            var n = $('input[name="select-post[]"]:checked').length;
            var array = $('input[name="select-post[]"]:checked');
            var ids = [];
            for(i=0;i<n;i++){
                ids[i] =  array.eq(i).val();
            }
            if(ids.length == 0){
                return false;
            }
            $.ajax({
                type:"get",
                data: {menuid:menuid,ids:ids},
                url: "{{route('add-post-to-menu')}}",
                success:function(res){
                    location.reload();
                }
            })
        })
        $("#add-custom-link").click(function(){
            var menuid = <?=$desiredMenu->id?>;
            var url = $('#url').val();
            var link = $('#linktext').val();
            if(url.length > 0 && link.length > 0){
                $.ajax({
                    type:"get",
                    data: {menuid:menuid,url:url,link:link},
                    url: "{{route('add-custom-link')}}",
                    success:function(res){
                        location.reload();
                    }
                })
            }
        })
    </script>

    <script>
        var group = $("#menuitems").sortable({
            group: 'serialization',
            onDrop: function ($item, container, _super) {
                var data = group.sortable("serialize").get();
                var jsonString = JSON.stringify(data, null, ' ');
                $('#serialize_output').text(jsonString);
                _super($item, container);
            }
        });
    </script>

    @if($desiredMenu)
        <script>
            $('#saveMenu').click(function(){
                var menuid = <?=$desiredMenu->id?>;
                var location = $('input[name="location"]:checked').val();
                var newText = $("#serialize_output").text();
                var data = JSON.parse($("#serialize_output").text());
                $.ajax({
                    type:"get",
                    data: {menuid:menuid,data:data,location:location},
                    url: "{{route('update-menu')}}",
                    success:function(res){
                        window.location.reload();
                    }
                })
            })
        </script>
    @endif
@endpush
