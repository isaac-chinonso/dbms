@extends('layout.header1')    
@section('title')
Financial Report || Information Management System
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
                        <h4 class="text-themecolor">FINANCIAL REPORTS</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Reports</li>
                            </ol>
                        </div>
                        <button class="btn btn-info btn-sm"><a href="{{ url('/add-financial-report') }}" style="color:#fff;">Add New General Report</a></button>
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
                            <h5>List of Financial Reports</h5>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped" data-filtering="true" data-paging="true" data-sorting="true">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Created At</th>
                                                <th>View</th>
                                                <th>Edit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach($financialreport as $financial)
                                        <tbody>
                                            <td>{{ $financial->title }}</td>
                                            <td>{{ $financial->date }}</td>
                                            <td>{{ date('F d, Y', strtotime($financial->created_at)) }}</td>
                                            <td><span class="label label-table label-info"><a href="{{ route('financialreportdetail',$financial->id)}}" style="color:#fff;">View</span></td>
                                            <td><span class="label label-table label-primary"><a href="{{ route('editfinancialreport',$financial->id) }}" style="color:#fff;">Edit</span></td>
                                            <td>
                                                <span class="label label-table label-danger"><a href="#" data-toggle="modal" data-target="#delete{{ $financial->id }}" style="color:#fff;">Delete</a></span>
                                            </td>
                                                <!-- sample modal content -->
                                                <div id="delete{{ $financial->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4><strong>Confirm Deletion</strong></h4>
                                                                <p>Are you sure you want to Delete {{ $financial->title }} Report</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                                <a href="{{ route('deletefinancialreport',$financial->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                        </tbody>
                                        @endforeach
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