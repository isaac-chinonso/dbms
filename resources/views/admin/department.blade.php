@extends('layout.header1')    
@section('title')
Departments || Information Management System
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
                        <h4 class="text-themecolor">DEPARTMENTS</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Department</li>
                            </ol>
                        </div>
                        <button class="btn btn-info btn-sm"><a href="{{ route('adddepartment') }}" style="color:#fff;">Add Departments</a></button><br>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                            <div class="card-body">
                                <h5>All Departments</h5>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-filtering="true" data-paging="true" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Lecturer</th>
                                                <th>Student</th>
                                                <th>Created At</th>
                                                <th>Edit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dept as $dept)
                                            <tr>
                                                <td>{{ $dept->title }}</td>
                                                <td>{{ $dept->lecturer->fullname }}</td>
                                                <td>{{ $dept->student }}</td>
                                                <td>{{ date('F d, Y', strtotime($dept->created_at)) }}</td> 
                                                <td><span class="label label-table label-info"><a href="{{ route('editdepartment',$dept->id) }}" style="color:#fff;">Edit</a></span></td>
                                                <td>                                             
                                                    @if($dept->status == 1)
                                                        <span class="label label-table label-danger"><a href="#" data-toggle="modal" data-target="#activate{{ $dept->id }}" style="color:#fff;">Archive</a></span>
                                                    @endif
                                                    
                                                    <!-- sample modal content -->
                                                    <div id="activate{{ $dept->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h4><strong>Confirm Deactivation</strong></h4>
                                                                    <p>Are you sure you want to Deactivate {{ $dept->title }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('deactivatedepartment',$dept->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
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
                <!-- /.row -->
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