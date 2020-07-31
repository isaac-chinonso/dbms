@extends('layout.header3')    
@section('title')
Lecturers || Information Management System
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
                        <h4 class="text-themecolor">STAFFS PROFILE</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Staffs</li>
                            </ol>
                        </div>
                        <button class="btn btn-info btn-sm"><a href="{{ route('addlecturer') }}" style="color:#fff;">Add New Staff</a></button><br>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="user-bg"> <img width="100%" alt="user" src="../../images/{{ $lecturer->profile_pic }}"> </div>
                            <div class="card-body">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12">
                                        <strong>Fullname</strong>
                                        <p><h4>{{ $lecturer->fullname }}</h4></p>
                                    </div>
                                </div>
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Created At</strong>
                                        <p>{{ date('F d, Y', strtotime($lecturer->created_at)) }}</p>
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
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $lecturer->fullname }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $lecturer->phone }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $lecturer->email }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Date of Birth</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $lecturer->dob }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Gender</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $lecturer->gender }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8"> <strong>Position</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $lecturer->position }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <strong>Description</strong>
                                        <p class="m-t-30">{{ $lecturer->description }}</p>
                                        <hr>
                                        <div class="row button-group">
                                            <div class="col-md-6 col-xs-12">
                                                <button class="btn btn-info btn-block btn-sm"><a href="{{ route('editlecturer',$lecturer->id)}}" style="color:#fff;">Edit Staff</a></button>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                @if($lecturer->status == 1)
                                                <button class="btn btn-primary btn-block btn-sm"><a href="#" data-toggle="modal" data-target="#activate{{ $lecturer->id }}" style="color:#fff;">Archive Staff</a></button>
                                                @endif
                                                <!-- sample modal content -->
                                                <div id="activate{{ $lecturer->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4><strong>Confirm Deactivation</strong></h4>
                                                                <p>Are you sure you want to Deactivate {{ $lecturer->fullname }}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                                <a href="{{ route('deactivatelecturer',$lecturer->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                        <br><br>
                                        <button class="btn btn-secondary btn-block btn-sm"><a href="{{ url('/lecturers') }}" style="color:#000;"><< See All Staff</a></button>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
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