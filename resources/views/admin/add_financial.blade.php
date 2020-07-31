@extends('layout.header2')    
@section('title')
Add Financial Report || Information Management System
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
                        <h4 class="text-themecolor">ADD FINANCIAL REPORTS</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Reports</li>
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
                    <div class="col-12">
                        <div class="card">
                            @include('include.success')
                            @include('include.warning')
                            @include('include.error')
                            <div class="card-body">
                            <h5 class="card-title text-uppercase">ADD FINANCIAL REPORT</h5>
                                <form class="form-material m-t-40" method="post" action="{{ url('/save-financial-report')}}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Report Title<span> *</span></label>
                                                @if ($errors->has('title'))
                                                    <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                                @endif
                                                <input type="text" name="title" class="form-control" placeholder="enter report title" value="{{ Request::old('title')}}" required>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Report Date<span> *</span></label>
                                                @if ($errors->has('date'))
                                                    <span class="help-block"><strong>{{ $errors->first('date') }}</strong></span>
                                                @endif
                                                <input type="date" name="date" class="form-control" placeholder="enter report date" value="{{ Request::old('date')}}" required>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label>Report Details<span> *</span></label>
                                                @if ($errors->has('description'))
                                                    <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                                @endif
                                                <textarea class="summernote" name="description">{{ Request::old('description')}}</textarea>
                                            </div>
                                        </div>
                                    </div><br>
                                    <button type="reset" class="btn btn-dark waves-effect waves-light">Reset</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Save Report</button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                                
                            </div>
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