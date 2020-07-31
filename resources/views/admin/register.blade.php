@extends('layout.header')    
@section('title')
Register || Information Management System
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login-register.jpg);">
        <div class="login-box card">
            @include('include.success')
			@include('include.warning')
			@include('include.error')
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" method="post" action="{{ url('/savelogin') }}">
                    <div class="text-center">
                        <a href="javascript:void(0)" class="db"><img src="../assets/images/logo-icon.png" alt="Home" /><br/><img src="../assets/images/text.png" alt="Home" /></a>
                    </div>
                    <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>
                    <div class="form-group m-t-20 {{ $errors->has('username') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            @if ($errors->has('username'))
                                <span class="help-block"><strong>{{ $errors->first('username') }}</strong></span>
                            @endif
                            <input class="form-control" type="text" name="username" placeholder="Username" value="{{ Request::old('username')}}" required>
                        </div>
                    </div>
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
                    <div class="form-group {{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            @if ($errors->has('confirm_password'))
                                <span class="help-block"><strong>{{ $errors->first('confirm_password') }}</strong></span>
                            @endif
                            <input class="form-control" type="password" name="confirm_password"  placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="{{ url('/')}}" class="text-info m-l-5"><b>Sign In</b></a></p>
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