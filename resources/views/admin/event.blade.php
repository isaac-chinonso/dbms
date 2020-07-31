@extends('layout.header2')    
@section('title')
Events || Information Management System
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
                        <h4 class="text-themecolor">ALL EVENTS</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Events</li>
                            </ol>
                        </div>
                        <button class="btn btn-info btn-sm"><a href="{{ url('/add-event') }}" style="color:#fff;">Add New Event</a></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            @foreach($event as $even)
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi mdi-calendar-check"></i> {{ $even->title }} <a class="get-code" data-toggle="collapse" href="#tt1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                <p>
                                    {!!html_entity_decode($even->description)!!}
                                </p>
                                <span><i class="mdi mdi-calendar-clock"></i> {{ date('F d, Y', strtotime($even->date)) }}</span>
                                <div class="text-right">
                                    <span class="label label-table label-primary text-right"><a href="#" data-toggle="modal" data-target="#delete{{ $even->id }}" style="color:#fff;">Archive</a></span>
                                </div>
                                <!-- sample modal content -->
                                <div id="delete{{ $even->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4><strong>Confirm Deactivation</strong></h4>
                                                <p>Are you sure you want to deactivate {{ $even->title }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                <a href="{{ route('deactivateevent',$even->id) }}" class="btn btn-success waves-effect waves-light">Yes</a>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>
                            @endforeach
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