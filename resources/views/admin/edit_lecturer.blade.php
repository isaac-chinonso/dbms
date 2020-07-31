@extends('layout.master3')    
@section('title')
Edit Staff Info || Information Management System
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
                        <h4 class="text-themecolor">Edit Staff Record</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Staffs</li>
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
                                <h5 class="card-title text-uppercase">Basic Information</h5>
                                <form class="form-material m-t-40" method="PUT" enctype="multipart/form-data" action="{{ route('updatelecturer',$lectur->id) }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Fullname<span> *</span></label>
                                                @if ($errors->has('fullname'))
                                                    <span class="help-block"><strong>{{ $errors->first('fullname') }}</strong></span>
                                                @endif
                                                <input type="text" name="fullname" class="form-control" placeholder="enter your name" value="{{ $lectur->fullname }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Email<span>*</span></label>
                                                @if ($errors->has('email'))
                                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                                @endif
                                                <input type="email" name="email" class="form-control" placeholder="enter your email" value="{{ $lectur->email }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone<span> *</span></label>
                                                @if ($errors->has('phone'))
                                                    <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                                                @endif
                                                <input type="text" name="phone" class="form-control" placeholder="enter your Phone Num" value="{{ $lectur->phone }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Date of Birth<span> *</span></label>
                                                @if ($errors->has('dob'))
                                                    <span class="help-block"><strong>{{ $errors->first('dob') }}</strong></span>
                                                @endif
                                                <input type="date" name="dob" class="form-control mydatepicker" placeholder="enter your birth date" value="{{ $lectur->dob }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Gender<span> *</span></label>
                                                @if ($errors->has('gender'))
                                                    <span class="help-block"><strong>{{ $errors->first('gender') }}</strong></span>
                                                @endif
                                                <select class="form-control" name="gender" required>
                                                    <option selected disabled>Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Position<span> *</span></label>
                                                @if ($errors->has('position'))
                                                    <span class="help-block"><strong>{{ $errors->first('position') }}</strong></span>
                                                @endif
                                                <input type="text" name="position" class="form-control" placeholder="e.g. Asst. Professor" value="{{ $lectur->position }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12">Description<span> *</span></label>
                                            <div class="col-md-12">
                                                @if ($errors->has('description'))
                                                    <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                                @endif
                                                <textarea class="form-control" rows="3" name="description">{{ $lectur->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Profile Image<span> *</span></label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Upload</span>
                                                    @if ($errors->has('profile_pic'))
                                                        <span class="help-block"><strong>{{ $errors->first('profile_pic') }}</strong></span>
                                                    @endif
                                                    <input type="file" name="profile_pic" value="{{ Request::old('profile_pic')}}" required> </span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row button-group">
                                        <div class="col-md-6 col-xm-12">
                                            <button type="submit" class="btn btn-info btn-block waves-effect waves-light m-r-10">Update Staff Record</button>
                                        </div>
                                        <div class="col-md-6 col-xm-12">
                                            <button type="reset" class="btn btn-danger btn-block waves-effect waves-light">Reset</button>
                                        </div>
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