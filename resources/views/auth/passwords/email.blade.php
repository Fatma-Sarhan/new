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
      <!--Reset Page Wrap Start-->
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
                        <div class="panel-heading">إعاده تعيين كلمة المرور</div>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="form" role="form" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="gt_login_field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label"><i class="fa fa-envelope"></i></label>

                                    <div class="">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="البريد اﻷلكترونى">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="gt_login_field form-group">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">
                                            إرسال رابط التغيير
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
