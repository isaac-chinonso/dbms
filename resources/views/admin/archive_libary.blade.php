@extends('layout.header1')    
@section('title')
Archived Libary Assets || Information Management System
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
                        <h4 class="text-themecolor">List of Archived Libary Assets</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Libary</li>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5>Archived Libary Assets</h5>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-filtering="true" data-paging="true" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Author</th>
                                                <th>Department</th>
                                                <th>Assets Type</th>
                                                <th>Description</th>
                                                <th>Created At</th>
                                                <th>edit</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($archivelibary as $libary)
                                            <tr>
                                                <td>{{ $libary->name }}</td>
                                                <td>{{ $libary->subject }}</td>
                                                <td>{{ $libary->author }}</td>
                                                <td>{{ $libary->department->title }}</td>
                                                <td>{{ $libary->type }}</td>
                                                <td>{{ $libary->description }}</td>
                                                <td>{{ date('F d, Y', strtotime($libary->created_at)) }}</td> 
                                                <td>
                                                    @if($libary->status == 0)
                                                        <span class="label label-table label-danger">Archived</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="label label-table label-success"><a href="#" data-toggle="modal" data-target="#activate{{ $libary->id }}" style="color:#fff;">Activate</a></span>
                                                    <!-- sample modal content -->
                                                    <div id="activate{{ $libary->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h4><strong>Confirm Reactivation</strong></h4>
                                                                    <p>Are you sure you want to Reactivate {{ $libary->name }} Assets</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('activatelibary',$libary->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
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