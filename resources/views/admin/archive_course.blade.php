@extends('layout.header1')    
@section('title')
Archived Courses || Information Management System
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
                        <h4 class="text-themecolor">List of Archived Courses</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Course</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                 <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- Column -->
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Archived Course Record</h5>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-filtering="true" data-paging="true" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th data-toggle="true"> Title </th>
                                                <th> Course Code </th>
                                                <th> Duration </th>
                                                <th> lecturer</th>
                                                <th>Department</th>
                                                <th>Description</th>
                                                <th data-hide="all"> Status </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($archivecourse as $course)
                                            <tr>
                                                <td>{{ $course->title }}</td>
                                                <td>{{ $course->code }}</td>
                                                <td>{{ $course->duration }}</td>
                                                <td>{{ $course->lecturer->fullname }}</td>
                                                <td>{{ $course->department->title }}</td>
                                                <td>{{ $course->description }}</td>
                                                <td>
                                                    @if($course->status == 0)
                                                        <span class="label label-table label-danger">Archived</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-success btn-sm"><a href="#" data-toggle="modal" data-target="#activate{{ $course->id }}" style="color:#fff;">Activate</a></button>
                                                    <!-- sample modal content -->
                                                    <div id="activate{{ $course->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h4><strong>Confirm Reactivation</strong></h4>
                                                                    <p>Are you sure you want to Reactivate {{ $course->fullname }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('activatecourse',$course->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
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