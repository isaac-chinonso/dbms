@extends('layout.master2')    
@section('title')
Edit Profile || Information Management System
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
                        <h4 class="text-themecolor">EDIT PROFILE</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
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
                                <form class="form-material m-t-40" method="PUT" enctype="multipart/form-data" action="{{ route('updateprofile',$editstudent->id) }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Fullname<span> *</span></label>
                                                @if ($errors->has('fullname'))
                                                    <span class="help-block"><strong>{{ $errors->first('fullname') }}</strong></span>
                                                @endif
                                                <input type="text" name="fullname" class="form-control" placeholder="enter your fullname" value="{{ $editstudent->fullname }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Matriculation Number<span> *</span></label>
                                                @if ($errors->has('matric'))
                                                    <span class="help-block"><strong>{{ $errors->first('matric') }}</strong></span>
                                                @endif
                                                <input type="text" name="matric" class="form-control" placeholder="enter your matric no" value="{{ $editstudent->matric }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Phone Number<span> *</span></label>
                                                @if ($errors->has('phone'))
                                                    <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                                                @endif
                                                <input type="text" name="phone" class="form-control" placeholder="enter your Phone Num" value="{{ $editstudent->phone }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of Birth<span> *</span></label>
                                                @if ($errors->has('dob'))
                                                    <span class="help-block"><strong>{{ $errors->first('dob') }}</strong></span>
                                                @endif
                                                <input type="date" name="dob" class="form-control mydatepicker" placeholder="enter your birth date" value="{{ $editstudent->dob }}" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Gender<span> *</span></label>
                                                @if ($errors->has('gender'))
                                                    <span class="help-block"><strong>{{ $errors->first('gender') }}</strong></span>
                                                @endif
                                                <select class="form-control" name="gender" required>
                                                    <option selected value="{{ $editstudent->gender }}">{{ $editstudent->gender }}</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Program Type<span> *</span></label>
                                                @if ($errors->has('program'))
                                                    <span class="help-block"><strong>{{ $errors->first('program') }}</strong></span>
                                                @endif
                                                <input type="text" name="program" class="form-control mydatepicker" placeholder="enter program type" value="{{ $editstudent->program }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Department<span> *</span></label>
                                                @if ($errors->has('department_id'))
                                                    <span class="help-block"><strong>{{ $errors->first('department_id') }}</strong></span>
                                                @endif
                                                <select class="form-control" name="department_id" required>
                                                    <option selected value="{{ $editstudent->department->id }}">{{ $editstudent->department->title }}</option>
                                                    @foreach ($department as $dept)
                                                        <option value="{{ $dept->id }}">{{ $dept->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Year Admitted<span>*</span></label>
                                                @if ($errors->has('year_admitted'))
                                                    <span class="help-block"><strong>{{ $errors->first('year_admitted') }}</strong></span>
                                                @endif
                                                <input type="text" name="year_admitted" class="form-control" placeholder="enter year you were admitted" value="{{ $editstudent->year_admitted }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Program Duration<span> *</span></label>
                                                @if ($errors->has('duration'))
                                                    <span class="help-block"><strong>{{ $errors->first('duration') }}</strong></span>
                                                @endif
                                                <input type="text" name="duration" class="form-control" placeholder="enter program duration" value="{{ $editstudent->duration }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nationality<span>*</span></label>
                                                @if ($errors->has('nationality'))
                                                    <span class="help-block"><strong>{{ $errors->first('nationality') }}</strong></span>
                                                @endif
                                                <input type="text" name="nationality" class="form-control" placeholder="enter nationality" value="{{ $editstudent->nationality }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>State of Origin<span> *</span></label>
                                                @if ($errors->has('state'))
                                                    <span class="help-block"><strong>{{ $errors->first('state') }}</strong></span>
                                                @endif
                                                <input type="text" name="state" class="form-control" placeholder="enter state of origin" value="{{ $editstudent->state }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Religion<span>*</span></label>
                                                @if ($errors->has('religion'))
                                                    <span class="help-block"><strong>{{ $errors->first('religion') }}</strong></span>
                                                @endif
                                                <input type="text" name="religion" class="form-control" placeholder="enter your religion" value="{{ $editstudent->religion }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Marital Status<span> *</span></label>
                                                @if ($errors->has('marital_status'))
                                                    <span class="help-block"><strong>{{ $errors->first('marital_status') }}</strong></span>
                                                @endif
                                                <select class="form-control" name="marital_status" required>
                                                    <option selected value="{{ $editstudent->marital_status }}">{{ $editstudent->marital_status }}</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-12">Address<span> *</span></label>
                                            <div class="col-md-12">
                                                @if ($errors->has('address'))
                                                    <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                                                @endif
                                                <textarea class="form-control" rows="3" name="address">{{ $editstudent->address }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-12">Profile Image<span> *</span></label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Upload</span>
                                                    @if ($errors->has('pics'))
                                                        <span class="help-block"><strong>{{ $errors->first('pics') }}</strong></span>
                                                    @endif
                                                    <input type="file" name="pics" value="{{ Request::old('pics')}}" required> </span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update Profile</button>
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

@endsection