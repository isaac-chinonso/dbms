@extends('layout.header3')    
@section('title')
General Report Details || Information Management System
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
                        <h4 class="text-themecolor">GENERAL REPORT DETAILS</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Report</li>
                            </ol>
                        </div>
                        <button class="btn btn-info btn-sm"><a href="{{ url('/add-general-report') }}" style="color:#fff;">Add New General Report</a></button><br>
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
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Full details of General Report</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Title</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $reportdetail->title }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8 border-right"> <strong>Date</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ $reportdetail->date }}</p>
                                            </div>
                                            <div class="col-md-4 col-xs-8"> <strong>Created At</strong>
                                                <br>
                                                <p class="text-muted m-t-30">{{ date('F d, Y', strtotime($reportdetail->created_at)) }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <strong>Description</strong>
                                        <p class="m-t-30">{!!html_entity_decode($reportdetail->description)!!}</p>
                                        <hr>
                                        <div class="row button-group">
                                            <div class="col-md-6 col-xs-12">
                                                <button class="btn btn-info btn-block btn-sm"><a href="{{ route('generalreportdetail',$reportdetail->id)}}" style="color:#fff;">Edit Report</a></button>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <button class="btn btn-danger btn-block btn-sm"><a href="#" data-toggle="modal" data-target="#delete{{ $reportdetail->id }}" style="color:#fff;">Delete Report</a></button>

                                                <!-- sample modal content -->
                                                <div id="delete{{ $reportdetail->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4><strong>Confirm Deletion</strong></h4>
                                                                <p>Are you sure you want to Delete {{ $reportdetail->title }} Report</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                                <a href="{{ route('deletegeneralreport',$reportdetail->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                        <br><br>
                                        <button class="btn btn-secondary btn-block btn-sm"><a href="{{ url('/generalreport') }}" style="color:#000;"><< See All General Report</a></button>   
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