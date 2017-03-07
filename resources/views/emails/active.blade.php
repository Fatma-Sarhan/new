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
                    <div class="panel-body" style="background-color: #ce9e44 ; margin-bottom: 20px;">
                        {{-- In order to verify your account, you have to click on the link in your inbox. --}}
                       <h4 style="color: #fff; "> من اجل تفعيل حسابك يجب عليك استخدام الرابط المرسل إالى بريدك اللكترونى </h4>
                    </div>

                    <div class="gt_login_field">
                        <a href="/active/resend">إعادة إرسال</a>
                    </div>
                </div>
            </div>
        </div>
	        </div>
	       </section>
	    </div>

@endsection

