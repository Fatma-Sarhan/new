@extends('layouts.app')
@section('content')
  <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
      <div class="container">
        <div class="gt_sub_banner_hdg  default_width">
          <h2> حساب جديد</h2>
          <h6>مرحبا بك في موقعنا</h6>
        </div>
      </div>
    </div>
    <!--Sub Banner Wrap End -->
    
    <!--Main Content Wrap Start-->
        <div class="gt_content_wrap">
        <!--Login & Register Page Wrap Start-->
        <section>
         <div class="container">
          <div class="gt_lgin_tab_wrap wow slideInUp">
            <div class="tab-content">
                <div class="gt_login_des_wrap default_width">
                    <div class="panel-heading">تفعيل الحساب 
                    </div>
                    <div class="panel-body" style="background-color: green; margin-bottom: 20px;">
                        
                        <h2 style="color:#fff; text-align: center;">تم التفعيل بنجاح</h2>
                    </div>
                    
                    <div class="gt_login_field">
                        @if (Auth::guest())
                        <a href="{{ url('login') }}"><i class="icon-lock"></i> تسجيل دخول </a>

                      @endif
                    </div>
                </div>
            </div>
        </div>
          </div>
         </section>
      </div>

@endsection

