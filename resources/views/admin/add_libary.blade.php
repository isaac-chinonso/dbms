@extends('layout.master')    
@section('title')
Add Libary Assets || Information Management System
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
                        <h4 class="text-themecolor">Add Library Asset</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Add Library Asset</li>
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
                                <h5 class="card-title text-uppercase">ASSET DETAILS</h5>
                                <form class="form-material m-t-40" method="post" action="{{ url('/save-libary') }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Name of Asset<span> *</span></label>
                                                @if ($errors->has('name'))
                                                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                                @endif
                                                <input type="text" name="name" class="form-control" placeholder="Enter Name of Assets" value="{{ Request::old('name')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Subject of Asset<span> *</span></label>
                                                @if ($errors->has('subject'))
                                                    <span class="help-block"><strong>{{ $errors->first('subject') }}</strong></span>
                                                @endif
                                                <input type="text" name="subject" class="form-control" placeholder="Enter Subject Of Asset" value="{{ Request::old('subject')}}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Author Name<span> *</span></label>
                                                @if ($errors->has('author'))
                                                    <span class="help-block"><strong>{{ $errors->first('author') }}</strong></span>
                                                @endif
                                                <input type="text" name="author" class="form-control" placeholder="Enter Author Name" value="{{ Request::old('author')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
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
                                            <div class="col-sm-6">
                                                <label>Type of Asset<span> *</span></label>
                                                @if ($errors->has('type'))
                                                    <span class="help-block"><strong>{{ $errors->first('type') }}</strong></span>
                                                @endif
                                                <select class="form-control" name="type" required>
                                                    <option selected disabled>Select Type</option>
                                                    <option value="book">Book</option>
                                                    <option value="CD">CD</option>
                                                    <option value="DVD">DVD</option>
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
                                                <textarea class="form-control" rows="3" name="description" required>{{ Request::old('description')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Save Libary Assets</button>
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