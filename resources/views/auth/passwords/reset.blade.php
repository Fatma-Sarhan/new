@extends('layouts.app')
@section('content')

<!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
      <div class="container">
        <div class="gt_sub_banner_hdg  default_width">
          <h2>تغيير كلمة المرور</h2>
          <h6>مرحبا بك في موقعنا</h6>
        </div>
      </div>
    </div>
    <!--Sub Banner Wrap End -->
    <!--Breadcrumb Wrap start-->
    <div class="gt_breadcrumb_bg default_width">
      <div class="container">
        <div class="gt_breadcrumb_wrap default_width">
            <ul>
                <li><a href="{{ url('/') }}">الرئيسيه</a></li>
                <li><a href="#">تغيير كلمة المرور</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->
  <div class="gt_content_wrap">
    <section>  
        <div class="container">
            <div class="gt_lgin_tab_wrap wow slideInUp">
              <ul class="gt_login_link"  data-tabs="tabs">
               @if (Auth::guest())
                <li ><a href="{{ route('register') }}">حساب جديد</a></li>
                <li class="active"><a href="{{ route('login') }}">تسجيل الدخول</a></li>
               @endif 
               </ul>
                <div class="tab-content">
                    <div class="gt_login_des_wrap default_width">
                        <div class="panel-heading">تغيير كلمة المرور</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="form" role="form" method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="gt_login_field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label"><i class="fa fa-envelope"></i></label>

                                    <div class="">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="البريد اﻷلكترونى">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="gt_login_field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label"><i class="fa fa-lock"></i></label>

                                    <div class="">
                                        <input id="password" type="password" class="form-control" name="password" required placeholder="كلمة المرور">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="gt_login_field form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-md-4 control-label"><i class="fa fa-lock"></i></label>
                                    <div class="">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تأكيد كلمة المرور">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group gt_login_field">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">
                                            تغيير كلمة المرور
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection
