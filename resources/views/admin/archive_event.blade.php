@extends('layout.header1')    
@section('title')
Archived Events || Information Management System
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
                        <h4 class="text-themecolor">ARCHIVED EVENTS</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Events</li>
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
                
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                    @include('include.success')
                    @include('include.warning')
                    @include('include.error')
                    <div class="card">
                            <div class="card-body">
                                <h5>All Archived Events</h5>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-filtering="true" data-paging="true" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date of Events</th>
                                                <th>Created At</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($archiveevent as $event)
                                            <tr>
                                                <td>{{ $event->title }}</td>
                                                <td>{{ date('F d, Y', strtotime($event->date)) }}</td>
                                                <td>{{ date('F d, Y', strtotime($event->created_at)) }}</td> 
                                                <td>{{ $event->description }}</td>
                                                <td>
                                                    @if($event->status == 0)
                                                        <span class="label label-table label-primary">Archived</span>
                                                    @endif
                                                </td>
                                                <td>                                             
                                                    @if($event->status == 0)
                                                        <span class="label label-table label-danger"><a href="#" data-toggle="modal" data-target="#activate{{ $event->id }}" style="color:#fff;">Activate</a></span>
                                                    @endif
                                                    
                                                    <!-- sample modal content -->
                                                    <div id="activate{{ $event->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h4><strong>Confirm Reactivation</strong></h4>
                                                                    <p>Are you sure you want to Reactivate {{ $event->title }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('activateevent',$event->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
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