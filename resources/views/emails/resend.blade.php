@extends('layouts.app')

<!-- Main Content -->
@section('content')

 <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
      <div class="container">
        <div class="gt_sub_banner_hdg  default_width">
          <h2>تسجيل الدخول &#38; حساب جديد</h2>
          <h6>مرحبا بك في موقعنا</h6>
        </div>
      </div>
    </div>
    <!--Sub Banner Wrap End -->
    <!--Breadcrumb Wrap End -->
    <div class="gt_breadcrumb_bg default_width">
      <div class="container">
        <div class="gt_breadcrumb_wrap default_width">
            <ul>
                <li><a href="{{ url('/') }}">الرئيسيه</a></li>
                <li><a href="#">تسجيل الدخول &#38; حساب جديد</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->
    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <!--Login & Register Page Wrap Start-->
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
                        <div class="panel-heading">تفعيل الحساب</div>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->has('status'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif

                            <form class="form" role="form" method="POST" action="/active/resend">
                                {!! csrf_field() !!}

                                <div class="gt_login_field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label"><i class="fa fa-envelope"></i></label>

                                    <div class="">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="البريد اﻷلكترونى">

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
                                        إرسال رابط التفعيل
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
