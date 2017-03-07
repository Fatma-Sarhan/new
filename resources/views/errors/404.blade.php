@extends('layouts.app')

@section('content')
	
	<!--Sub Banner Wrap Start -->
	<div class="gt_sub_banner_bg default_width">
	    <div class="container">
	        <div class="gt_sub_banner_hdg  default_width">
	            <h2>خطأ 404 </h2>
	            <h6>مرحبا بك في موقعنا</h6>
	        </div>
	    </div>
	</div>
	<!--Sub Banner Wrap End -->
	<!--Breadcrumb Wrap start -->
	<div class="gt_breadcrumb_bg default_width">
	  <div class="container">
	    <div class="gt_breadcrumb_wrap default_width">
	        <ul>
	            <li><a href="{{url('home') }}">الرئيسيه</a></li>
	            <li><a href="#">خطأ 404</a></li>
	        </ul>
	    </div>
	    
	  </div>
	</div>
	<!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <!--404 Page 02 Wrap Start-->
      <section>
        <div class="container">
          <div class="container">
            <div class="gt_404_02_wrap wow fadeIn">
              <h1>4<span><i class="icon-halloween-spider wow swing"></i></span>4</h1>
              <div class="gt_4042_error_wrap">
                <h4>خطأ</h4>
                <h5>هذه الصفحه غير موجودة {{-- <br>Search something from search form. --}}</h5>
              </div>
              {{-- <form class="gt_comming_soon_form">
                <div class="gt_comming_soon_field">
                  <input type="text" name="coming_email" placeholder="Enter Your Email Address Here">
                  <input type="submit" value="subscribe">
                </div>
              </form> --}}
              <a href="{{url('home') }}">إذهب إالى الصفحه الرئيسية</a>
            </div>
          </div>
        </div>
      </section>
      <!--404 Page 02 Wrap End-->
    </div>
    <!--Main Content Wrap End-->
@endsection