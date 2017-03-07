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
      <!-- Register Page Wrap Start-->
      <section>
        <div class="container">
          <div class="gt_lgin_tab_wrap wow slideInUp">
            <ul class="gt_login_link"  data-tabs="tabs">
                @if (Auth::guest())
                    <li class="active"><a href="{{ route('register') }}">حساب جديد</a></li>
                    <li ><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                @endif 
            </ul>
      
            {{-- New registration form  --}}            
            <div class="tab-content">
                <div class="tab-pane active" id="register">
                    <div class="gt_login_des_wrap default_width">
                        <form class="form" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                            <div class="gt_login_field form-group
                                {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">
                                <i class="fa fa-user"></i>
                                </label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->getNickname() }}" required autofocus placeholder="{{ $user->getNickname() }}">
                                     @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}
                                        </strong>
                                    </span>
                                 @endif
                            </div>
                            <div class="gt_login_field form-group
                                {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label"><i class="fa fa-envelope"></i></label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->getEmail() }}" required placeholder="{{$user->getEmail()}}">
                                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  @endif
                            
                            </div>
                            <div class="gt_login_field form-group
                                {{ $errors->has('full_name') ? ' has-error' : '' }}">
                                <label for="full_name" class="
                                    col-md-4 control-label"><i class="fa fa-user"></i></label>
                                <input id="full_name" type="text" class="form-control" name="full_name" value="{{ $user->getName() }}" required autofocus placeholder="{{$user->getName()}}">
                                 @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                 @endif  
                            </div>
                            <div class="gt_login_field form-group
                                {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">
                                    <i class="icon-lock"></i>
                                </label>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="كلمه المرور">
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}
                                        </strong>
                                    </span>
                                 @endif
                            </div>
                            <div class="gt_login_field form-group">
                                <label for="password-confirm" 
                                    class="col-md-4 control-label">
                                    <i class="icon-lock"></i>
                                </label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تأكيد كلمه المرور">
                            
                            </div>
                            <div class="gt_login_field form-group">
                            <input type="text" name="image" value="{{$user->getAvatar()}}" class="hidden">
                            
                                <button type="submit" class="btn btn-primary">
                                    تسجيل
                                </button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- New registration form  --}}
         </div>
       </div>
     {{-- </div> --}}
   </section>
<!--Register Page Wrap End-->
 </div>
<!--Main Content Wrap End-->
@endsection
