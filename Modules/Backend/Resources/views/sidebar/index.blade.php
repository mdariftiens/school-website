@extends('backend::layouts/contentNavbarLayout')

@section('title', 'Widgets - list')

@section('content')
    <div class="row">
        <div class="">
            <form action="">
                <div class="form">
                    <label for="sidebarId">select sidebar</label>

                    <select name="sidebarId" id="sidebarId">
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
                        <h5 class="m-0 me-2">Widgets List</h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        @if(isset($widgetsList) && count($widgetsList))
                            @foreach($widgetsList as $widget)
                                <li class="d-flex mb-4 pb-1">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div>
                                            <h6>{{ $widget->name }} - {{ $widget->type }}</h6>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <h2 class="alert-danger">No widgets found!</h2>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">


                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Widgets List
                            @if(isset($sidebarWidgets) && count($sidebarWidgets))
                                 - {{ count($sidebarWidgets) }} widgets
                            @endif
                        </h5>
                    </div>
                </div>
                <div class="card-body">
                    @if( session()->has('message'))
                        <div class="alert">
                            <div class="alert-info">
                                {{ session()->get('message') }}
                            </div>
                        </div>
                    @endif
                    @if(isset($sidebarWidgets) && count($sidebarWidgets))

                    <form action="{{ route('sidebar.update',['sidebarName' => request()->sidebarId]) }}" method="POST">
                        @csrf
                        <ul class="p-0 m-0 sortable">
                            {{--                        widgets.id','widgets.type','widgets.name','display_serial_number--}}
                                @foreach($sidebarWidgets as $sidebarWidget)
                                    <li>
                                        <input type="hidden" name="widget_id[]" value="{{ $sidebarWidget->id }}">
                                        {{ $sidebarWidget->type }}
                                        {{ $sidebarWidget->name }}
                                        {{ $sidebarWidget->display_serial_number }}

                                    </li>
                                @endforeach
                        </ul>
                        <input type="submit" name="Save">
                    </form>
                    @endif

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


        });
        $(".sortable").sortable();

    </script>
@endsection
