@extends('layouts.app')
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

            </ul>
      
            {{-- New login form --}}

            <div class="tab-content">
              <div class="tab-pane active" id="login">
                <div class="gt_login_des_wrap default_width">
                  <form class="form" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class=" gt_login_field form-group{{ $errors->has('email') ? ' has-error' : '' }}"
                      >
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="البريد الالكتروني">
                        @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                      <label for="email" class="col-md-4 
                        control-label">
                        <i class="fa fa-envelope"></i>
                      </label>   
                    </div>

                    <div class="gt_login_field form-group{{ $errors->has('password') ? ' has-error' : '' 
                        }}">
                      <input id="password" type="password" class="
                        form-control" name="password" required placeholder="كلمة المرور">
                        @if ($errors->has('password'))
                          <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                        <label for="password" class="col-md-4 
                          control-label">
                            <i class="fa fa-lock"></i>
                        </label>
                      </div>
                      <div class="form-group">
                        <div class="gt_login_radio_btn">
                          <input id="1" type="checkbox" name="remember"
                           {{ old('remember') ? 'checked' : '' }}>
                          <label for="1">
                            <span></span>
                            الاحتفاظ بكلمه المرور
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="gt_login_field">
                          <button type="submit" class="btn
                            btn-primary">
                            دخول
                          </button>
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                   نسيت كلمه المرور؟
                          </a>
                        </div>
                      </div>
                    </form>
                    <div class="gt_login_field">
                      <p>تسجيل الدخول عبر وسائل التواصل الاجتماعي </p>
                      <ul class="gt_scl_icon">
                        <li><a class="bg_fb" href="redirect"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="bg_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="bg_gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                  </div>
                </div>

                </div>

              {{-- New login form --}} 
              </div> 
            </div>
          </div>
        {{-- </div> --}}
      </section>
      <!--Login & Register Page Wrap End-->
    </div>
    <!--Main Content Wrap End-->


@endsection
