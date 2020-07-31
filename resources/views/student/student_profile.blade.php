@extends('layout.master1')    
@section('title')
My Profile || Information Management System
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
                        <h4 class="text-themecolor">MY PROFILE</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <button class="btn btn-info btn-sm"><a href="{{ route('addprofile') }}" style="color:#fff;">Complete Profile</a></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                @foreach($studentprofile as $studentprofile)
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="user-bg"> <img width="100%" alt="user" src="../images/{{ $studentprofile->pics }}"> </div>
                            <div class="card-body">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12">
                                        <strong>Username</strong>
                                        <p><h4>{{ Auth::user()->username }}</h4></p>
                                    </div>
                                </div>
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12">
                                        <p><h4>{{ $studentprofile->matric }}</h4></p>
                                    </div>
                                </div>
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Created At</strong>
                                        <p>{{ date('F d, Y', strtotime($studentprofile->created_at)) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Full Record of Staff</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Matric No</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->matric }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->fullname }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Phone No</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->phone }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Date of Birth</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ date('F d, Y', strtotime($studentprofile->created_at)) }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8"> <strong>Gender</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->gender }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>Program</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->program }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>Department</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->department->title }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>Year Admitted</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->year_admitted }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Duration</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->duration }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>Religion</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->religion }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>Matric Status</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->marital_status }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Nationality</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->nationality }}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>State</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $studentprofile->state }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <strong>Address</strong>
                                        <p class="m-t-30">{{ $studentprofile->address }}</p>
                                        <hr>
                                        @if ( ($studentprofile->fullname == !Null) )
                                        <div class="row button-group">
                                            <button class="btn btn-secondary btn-block btn-sm"><a href="{{ route('editprofile',$studentprofile->id) }}" style="color:#000;"><< Edit Profile</a></button>  
                                        </div>
                                        @endif 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    @endforeach
                </div>
                <!-- row -->
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