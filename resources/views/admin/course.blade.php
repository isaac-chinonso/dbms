@extends('layout.master')    
@section('title')
Courses || Information Management System
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
                        <h4 class="text-themecolor">Courses</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Courses</li>
                            </ol>
                        </div>
                        <button class="btn btn-info btn-sm"><a href="{{ route('addcourse') }}" style="color:#fff;">Add Course</a></button><br>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="row">
                    @foreach($course as $course)
                    <div class="col-md-3">
                        <img class="img-responsive" alt="user" src="../assets/dist/images/big/c2.jpg">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title}} <small>( {{ $course->code }})</small></h5>
                                <div class="d-flex no-block align-items-center">
                                    <span><i class="ti-alarm-clock"></i> Duration: {{ $course->duration }}</span>
                                </div>
                                <div class="d-flex no-block align-items-center p-t-10">
                                    <span><i class="ti-user"></i> Lecturer: </span>
                                </div>
                                <div class="d-flex no-block align-items-center p-t-10">
                                    <span><i class="fa fa-graduation-cap"></i> Department: {{ $course->department->title }}</span></span>
                                </div>
                                <div class="d-flex no-block align-items-center p-t-10">
                                    <span>{{ $course->description }}</span></span>
                                </div><br>
                                <button class="btn btn-info btn-sm"><a href="{{ route('editcourse',$course->id) }}" style="color:#fff;">Edit Course</a></button>
                                @if($course->status == 1)
                                    <button class="btn btn-danger btn-sm"><a href="#" data-toggle="modal" data-target="#activate{{ $course->id }}" style="color:#fff;">Deactivate</a></button>
                                @endif
                                <!-- sample modal content -->
                                <div id="activate{{ $course->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4><strong>Confirm Deactivation</strong></h4>
                                                <p>Are you sure you want to Deactivate {{ $course->title }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                <a href="{{ route('deactivatecourse',$course->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>
                        </div>
                    </div>
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