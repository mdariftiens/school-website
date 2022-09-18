@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Menu Create')
@section('content')
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
            <div class="col-sm-12 cat-view">
                <h3><span>Menu Structure</span></h3>
                @if($desiredMenu != '')
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
