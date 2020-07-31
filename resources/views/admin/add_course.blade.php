@extends('layout.master')    
@section('title')
Add Course || Information Management System
@endsection

@section('content')
 
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Course</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Add Course</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            @include('include.success')
                            @include('include.warning')
                            @include('include.error')
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">COURSE DETAILS</h5>
                                <form class="form-material m-t-40" method="post" action="{{ url('/save-course') }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Course Title<span> *</span></label>
                                                @if ($errors->has('title'))
                                                    <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                                @endif
                                                <input type="text" name="title" class="form-control" placeholder="enter Course name" value="{{ Request::old('title')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Course Code<<span> *</span></label>
                                                @if ($errors->has('code'))
                                                    <span class="help-block"><strong>{{ $errors->first('code') }}</strong></span>
                                                @endif
                                                <input type="text" name="code" class="form-control" placeholder="enter course code" value="{{ Request::old('code')}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Course Duration<span> *</span></label>
                                                @if ($errors->has('duration'))
                                                    <span class="help-block"><strong>{{ $errors->first('duration') }}</strong></span>
                                                @endif
                                                <input type="text" name="duration" class="form-control" placeholder="time span of the course" value="{{ Request::old('duration')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Course Lecturer<span> *</span></label>
                                                @if ($errors->has('lecturer_id'))
                                                    <span class="help-block"><strong>{{ $errors->first('lecturer_id') }}</strong></span>
                                                @endif
                                                <select class="form-control" name="lecturer_id" required>
                                                    <option selected disabled>Select lecturer</option>
                                                    @foreach ($lecturer as $lect)
                                                        <option value="{{ $lect->id }}">{{ $lect->fullname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Department<span> *</span></label>
                                                @if ($errors->has('department_id'))
                                                    <span class="help-block"><strong>{{ $errors->first('department_id') }}</strong></span>
                                                @endif
                                                <select class="form-control" name="department_id" required>
                                                    <option selected disabled>Select Department</option>
                                                    @foreach ($department as $dept)
                                                        <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Description<span> *</span></label>
                                                @if ($errors->has('description'))
                                                    <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                                @endif
                                                <textarea class="form-control" rows="3" name="description">{{ Request::old('description')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Save Course</button>
                                    <button type="reset" class="btn btn-dark waves-effect waves-light">Reset</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

@endsection