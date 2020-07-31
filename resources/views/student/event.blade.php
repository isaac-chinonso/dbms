@extends('layout.master1')    
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
                        <h4 class="text-themecolor">UP COMING EVENTS</h4>
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
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            @foreach($event as $event)
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi mdi-calendar-check"></i> {{ $event->title }} <a class="get-code" data-toggle="collapse" href="#tt1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                <p>
                                    {!!html_entity_decode($event->description)!!}
                                </p>
                                <span><i class="mdi mdi-calendar-clock"></i> {{ date('F d, Y', strtotime($event->date)) }}</span>
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