@extends('admin::layouts.contentNavbarLayout')

@section('title', 'Employee - Update')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 mb-4">

            <div class="card">

                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Employee List Update</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">

                            <a class="dt-button create-new btn btn-info"
                               href="{{ route('employee-list.index') }}">
                                <span><i class="bx bx-list-ol me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">List</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">

                    @include("admin::messages.message")

                    <div class="card-body" style="box-shadow: none">
                        <form method="post" action="{{ route('employee-list.update', $row->id) }}">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label" for="employee_category_id">Employee Category</label>
                                <select class="form-select" name="employee_category_id" id="employee_category_id">
                                    <option value="">Select Employee Category</option>
                                    @foreach($employeeCategories as $value)
                                        <option <?= ($value->id == $row->employee_category_id)? 'selected' : '' ?> value="{{ $value->id }}">{{ $value->english_name }} | {{ $value->bangla_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('employee_category_id'))
                                    <span class="text-danger">{{ $errors->first('employee_category_id') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="department_id">Employee Department</label>
                                <select class="form-select" name="department_id" id="department_id">
                                    <option value="">Select Employee Department</option>
                                    @foreach($employeeDepartment as $value)
                                        <option <?= ($value->id == $row->department_id)? 'selected' : '' ?> value="{{ $value->id }}">{{ $value->english_name }} | {{ $value->bangla_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('department_id'))
                                    <span class="text-danger">{{ $errors->first('department_id') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="designation_id"> Employee Designation</label>
                                <select class="form-select" name="designation_id" id="designation_id">
                                    <option value="">Select Employee Department</option>
                                    @foreach($employeeDesignation as $value)
                                        <option <?= ($value->id == $row->designation_id)? 'selected' : '' ?> value="{{ $value->id }}">{{ $value->english_name }} | {{ $value->bangla_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('designation_id'))
                                    <span class="text-danger">{{ $errors->first('designation_id') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">English Name</label>
                                <input type="text" class="form-control" name="english_name" placeholder="English name" value="{{ $row->english_name }}">
                                @if ($errors->has('english_name'))
                                    <span class="text-danger">{{ $errors->first('english_name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Bangla Name</label>
                                <input type="text" class="form-control" name="bangla_name" placeholder="Bangla name" value="{{ $row->bangla_name }}">
                                @if ($errors->has('bangla_name'))
                                    <span class="text-danger">{{ $errors->first('bangla_name') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Employee Identification Number</label>
                                <input type="text" class="form-control" name="employee_identification_number" placeholder="Employee Identification Number" value="{{ $row->employee_identification_number }}">
                                @if ($errors->has('employee_identification_number'))
                                    <span class="text-danger">{{ $errors->first('employee_identification_number') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-bio">English Description</label>
                                <textarea class="form-control" placeholder="English description" name="english_description" rows="3">{{ $row->english_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-bio">Bangla Description</label>
                                <textarea class="form-control" placeholder="Bangla description" name="bangla_description" rows="3">{{ $row->bangla_description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="contact_number">Contact Number</label>
                                <input type="text" class="form-control" name="contact_number" placeholder="Contact Number" id="contact_number" value="{{ $row->contact_number }}">
                                @if ($errors->has('contact_number'))
                                    <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" id="email" value="{{ $row->email }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{ $row->date_of_birth }}">
                                @if ($errors->has('date_of_birth'))
                                    <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Date of Joining</label>
                                <input type="date" class="form-control" name="date_of_joining" id="date_of_joining" value="{{ $row->date_of_joining }}">
                                @if ($errors->has('date_of_joining'))
                                    <span class="text-danger">{{ $errors->first('date_of_joining') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Blood Group</label>
                                <input type="text" class="form-control" name="blood_group" id="blood_group" value="{{ $row->blood_group }}">
                                @if ($errors->has('blood_group'))
                                    <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="educational_qualification">Educational Qualification</label>
                                <textarea class="form-control" id="educational_qualification" placeholder="Educational Qualification" name="educational_qualification" rows="3">{{ $row->educational_qualification }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Major Subject</label>
                                <input type="text" class="form-control" name="major_subject" id="major_subject" value="{{ $row->major_subject }}">
                                @if ($errors->has('major_subject'))
                                    <span class="text-danger">{{ $errors->first('major_subject') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="priority">Priority</label>
                                <input type="number" class="form-control" name="priority" id="priority" value="{{ $row->priority }}">
                                @if ($errors->has('priority'))
                                    <span class="text-danger">{{ $errors->first('priority') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
