@extends('admin::layouts/contentNavbarLayout')

@section('title', 'Widgets - list')

@section('content')
    <div class="row">
        <div class="">
            <form action="">
                <div class="mb-3">
                    <label for="sidebarId" class="form-label">select sidebar</label>

                    <select name="sidebarId" id="sidebarId" class="form-select">
                        <option value="">select sidebar</option>
                        @foreach($sidebarIdArray as $sidebarId)
                            <option @if(request()->sidebarId==$sidebarId) selected @endif value="{{ $sidebarId }}">{{ $sidebarId }}</option>
                        @endforeach
                    </select>
                </div>

            </form>

        </div>
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-2 me-2">Widgets List</h5>
                    </div>

                </div>
                <div class="card-body">
                    <ul class="list-group p-0 m-0">
                        @if(isset($widgetsList) && count($widgetsList))
                            @foreach($widgetsList as $widget)
                                <li class="list-group-item mb-0">
                                    <div class="card">
                                        <div class="card-header">
                                            {{ $widget->type }} | {{ $widget->english_title }}
                                        </div>
                                        <div class="card-body">
                                            <button class="btn btn-primary btn-sm add_item" type="button" data-id="{{ $widget->id }}" data-type="{{ $widget->type }}" data-english_title="{{ $widget->english_title }}">
                                               Add To Sidebar
                                            </button>
                                        </div>
                                    </div>

                                </li>
                            @endforeach
                        @else
                            <span class="alert-warning">No widgets found!</span>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">


                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class=" m-2  me-2">Widgets List
                            @if(isset($sidebarWidgets) && count($sidebarWidgets))
                                 - {{ count($sidebarWidgets) }} widgets
                            @endif
                        </h5>
                    </div>
                </div>
                <div class="card-body">
                    @include("admin::messages.message")



                    <form action="{{ route('sidebar.update',['sidebarName' => request()->sidebarId??'.']) }}" method="POST">
                        @csrf
                        <ul class="list-group p-0 m-0 sortable">
                            @if(isset($sidebarWidgets) && count($sidebarWidgets))
                                @foreach($sidebarWidgets as $sidebarWidget)
                                    <li class="list-group-item">
                                        <input type="hidden" name="widget_id[]" value="{{ $sidebarWidget->id }}">
                                        <div class="card">
                                            <div class="card-header">
                                                {{ $sidebarWidget->type }} ||
                                                {{ $sidebarWidget->english_title }}

                                                <button class="btn btn-sm btn-outline-info remove_item"  type="button">x</button>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <br>
                        @if(request()->sidebarId)
                        <input class="btn btn-primary" type="submit" value="Save Changes">
                        @endif
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script type="text/javascript">
        $( document ).ready(function() {
            $('#sidebarId').on('change', function(){
                sidebarValue = $('#sidebarId :selected').val();
                if(sidebarValue!=''){
                    window.location =  window.location.pathname + '?sidebarId=' + $('#sidebarId :selected').val();
                }else{
                    window.location =  window.location.pathname;
                }
            });

            $('body').on('click','form .remove_item', function(){
                console.log('clicked on .remove_item')
                if(confirm("sure to delete?")){
                    $(this).parents('li').remove()
                }
            })

            $('body').on('click','.add_item', function(){
                console.log('clicked on .add_item')
                widgetId = $(this).data('id')
                widgetType = $(this).data('type')
                widgetEnglishTitle = $(this).data('english_title')
                item = `<li class="list-group-item">
                                <input type="hidden" name="widget_id[]" value="${widgetId}">
                                <div class="card">
                                <div class="card-header">
                                ${widgetEnglishTitle} ||
                                ${widgetEnglishTitle}

                                <button class="btn btn-sm btn-outline-info remove_item"  type="button">x</button>
                            </div>
                            </div>
                        </li>`
                $('form ul').append(item)
            })

        });
        $(".sortable").sortable();

    </script>
@endsection
