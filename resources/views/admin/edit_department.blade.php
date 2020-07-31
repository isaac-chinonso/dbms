@extends('layout.master3')    
@section('title')
Edit Department || Information Management System
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
                        <h4 class="text-themecolor">Edit Department</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Department</li>
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
                                <h5 class="card-title text-uppercase">EDIT DEPARTMENT DETAILS</h5>
                                <form class="form-material m-t-40" method="PUT" action="{{ route('updatedepartment',$editdepartment->id) }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Name<span> *</span></label>
                                                @if ($errors->has('title'))
                                                    <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                                @endif
                                                <input type="text" name="title" class="form-control" placeholder="enter name" value="{{ $editdepartment->title }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Head of Department<span> *</span></label>
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
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>No of Students<span> *</span></label>
                                                @if ($errors->has('student'))
                                                    <span class="help-block"><strong>{{ $errors->first('student') }}</strong></span>
                                                @endif
                                                <input type="text" name="student" class="form-control" placeholder="total num of student" value="{{ $editdepartment->student }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update Department</button>
                                    <button type="reset" class="btn btn-dark waves-effect waves-light">Cancel</button>
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

@endsection