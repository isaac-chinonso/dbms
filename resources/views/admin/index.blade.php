@extends('layout.header')    
@section('title')
Login || Information Management System
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login.jpg);">
        <div class="login-box card">
            @include('include.success')
			@include('include.warning')
			@include('include.error')
            <div class="card-body">
                <form class="form-horizontal form-material text-center" id="loginform" method="post" action="{{ url('/signin') }}">
                    <a href="javascript:void(0)" class="db"><img src="../assets/images/logo-icon.png" alt="Home" /><br/><img src="../assets/images/text.png" alt="Home" /></a>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                             @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                            <input class="form-control" type="email" name="email" placeholder="Email" value="{{ Request::old('email')}}" required>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                            <input class="form-control" type="password" name="password"  placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Don't have an account? <a href="{{ url('/sign-up')}}" class="text-primary m-l-5"><b>Sign Up</b></a>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@endsection