@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Contact Us Detail')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 mb-4">
        <div class="card">
                        
            <div class="card-header flex-column flex-md-row">
                <div class="head-label text-center">
                    <h5 class="card-title mb-0">Contact Details</h5>
                </div>
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons">

                        <a class="dt-button create-new btn btn-info"
                           href="{{ route('contact.index') }}">
                            <span><i class="bx bx-list-ol me-sm-2"></i>
                                <span class="d-none d-sm-inline-block">List</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>        
           <div class=" table-responsive">               
                <table class="table table-bordered">          
                   
                        <tr>
                          <td>Name</td>
                          <td>{{$row->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$row->email}}</td>
                          </tr>
                          <tr>
                            <td>Phone</td>
                            <td>{{$row->phone}}</td>
                          </tr>
                          <tr>
                            <td >Subject</td>
                            <td>{{$row->subject}}</td>
                          </tr>
                          <tr>
                            <td >Message</td>
                            <td>{{$row->message}}</td>
                          </tr>                    
                </table>          
            </div>            
            </div>
        </div>
    </div>
</div>
@endsection