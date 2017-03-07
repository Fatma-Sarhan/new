<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('theme/images/logo.png')}}"/>
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <!--------------- Styles theme ----------------->
    <!-- Animation CSS -->
    <link href="{{asset('theme/css/animate.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/css/prettyPhoto.css')}}" rel="stylesheet">
    <!-- Chosen CSS -->
    <link href="{{asset('theme/css/chosen.min.css')}}" rel="stylesheet">
    <!-- Swiper Slider CSS -->
    <link href="{{asset('theme/css/swiper.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{asset('theme/css/login-register.css')}}" rel="stylesheet">
    <!-- Swiper Slider CSS -->
    <link href="{{asset('theme/css/flexslider.css')}}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{asset('theme/css/prettyPhoto.css')}}" rel="stylesheet">
    <!-- Chosen CSS -->
    <link href="{{asset('theme/css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('theme/style-rtl.css')}}" rel="stylesheet">
    <!-- Color CSS -->
    <link href="{{asset('theme/css/color-2.css')}}" rel="stylesheet">

    <link href="{{asset('theme/css/color.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/typography.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('theme/css/responsive.css')}}" rel="stylesheet">
     <!-- CSS reset -->
    {{-- <link rel="stylesheet" href="{{asset('theme/css/reset.css')}}"> --}}
    <!-- Resource style -->
    <link rel="stylesheet" href="{{asset('theme/css/privacy.css')}}"> 
    
   
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    <!--gt Wrapper Start-->  
  <div class="gt_wrapper">
    <!--Header Wrap Start-->
    <header class="gt_hdr2_wrap">
      <div class="gt_top2_wrap default_width">
          <div class="container">
            <div class="gt_top_element">
              <ul>
                <li><a href="#">لديك سؤال ؟</a></li>
                <li><i class="fa fa-phone"></i>002-050-4031500</li>
                <li><i class="fa fa-envelope"></i><a href="#">Support@deltasoft.com</a></li>
              </ul>
            </div>
            <div class="gt_hdr_2_ui_element">
            <!-- Authentication Links -->
             @if (Auth::guest())
                <a href="{{ url('login') }}"><i class="icon-lock"></i> تسجيل دخول &#38; حساب جديد</a>

              @else
                <ul>
                 <li>
                    <div class="gt-user-login">
                      <div class="gt-media">
                          <figure>
                          @if(! empty (Auth::user()->profile_image))
                           <img alt="" src="{{Auth::user()->profile_image}}">
                          @else
                            <img alt="" src="{{asset('theme/extra-images/profile-img-01.jpg')}}">
                          @endif
                          </figure>
                      </div>
                      <a href="#">{{ Auth::user()->name }}</a>
                      <ul>
                        <li><a href="{{ url('/profile') }}"><i class="fa fa-user"></i> الصفحه الشخصيه</a></li>
                        <li><a href="/user/{{Auth::user()->id}}/courses"><i class="fa fa-graduation-cap"></i> مقرراتى</a></li>
                        <li><a href="/user/{{Auth::user()->id}}/favcourses"><i class="fa fa-heart"></i>      المفضله</a></li>
                        {{-- Dashboard controller --}}
                        @if(Auth::user()->hasRole('admin'))
                          <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> لوحه التحكم</a></li>
                        @endif
                        {{-- logout form --}}
                        <li>
                          <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <i class="fa fa-sign-out"></i>
                              خروج 
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                          </form>
                        </li>
                      </ul>
                    </div>
                </li>
            </ul>
             @endif
            </div>
          </div>
      </div>
      <div class="gt_menu_bg default_width">
          <div class="container">
            <!--Logo Wrap Start-->
            <div class="gt_logo">
              <a href="#"><img src="{{asset('theme/images/logo.png')}}" alt=""></a>
            </div>
            
            <!--Search Wrap Start-->
            <div class="gt_search_wrap Search_1">
              <span class="search-fld Search-span"><i class="fa fa-search"></i></span>
                <div class="search-wrapper-area">
                    <form class="search-area">
                        <input type="text" placeholder="ابحث هنا"/>
                        <input type="submit"  value="ابحث"/>
                    </form>
                    <span class="gt_search_remove_btn"><i class="fa fa-remove"></i></span>
                </div>
            </div>
            <!--Search Wrap End-->
            <!--Navigation Wrap Start-->
            <nav class="gt_navigation">
              <button class="gt_mobile_menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <ul>
                 <li class="active"><a href="{{ url('/') }}">الرئيسيه</a>
                  </li>
                  <li ><a href="javascript:avoid(0);">اكتشف الموقع</a>
                    <ul>
                      <li><a href="#">من نحن ؟</a></li>
                      <li><a href="#">الشروط والاحكام</a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:avoid(0);">المراحل الدراسيه</a>
                    <ul>
                      <li><a href="#">اولي اعدادي</a></li>
                      <li><a href="#">تانيه اعدادي</a></li>
                      <li><a href="#">تالته اعدادي</a></li>
                      <li><a href="#">اولي ثانوي</a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:avoid(0);">مساعده</a>
                    <ul>
                      <li><a href="#">دليل المستخدم</a></li>
                      <li><a href="#">الاسئله الشائعه</a></li>
                      <li><a href="#">برامج التحميل</a></li>
                      <li><a href="#">الاسعار</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('contact-us')}}">تواصل معنا</a></li>
                   <li><a href="{{ url('to-buy')}}">كيفية الشراء</a></li>
                </ul>
            </nav>
            <!--Navigation Wrap End-->
          </div>
      </div>
    </header>
    <!--Header Wrap End-->

    @yield('content')
    <!--Banner Wrap End-->
     <!--Footer Wrap Start-->
    <footer class="wow fadeInUp">
      <!--Newletter Wrap Start-->
      <div class="gt_newsletter_bg default_width">
        <div class="container">
          <div class="gt_newsletter_inside_bg default_width">
            <div class="gt_newsletter_wrap">
              <h3>سدد مدفوعاتك بمنتهى السرعة. </h3>
              <form class="default_width">
                <input type="text" class="ph_news" placeholder="بريدك الالكتروني">
                <input type="submit" value="ارسال">
              </form>
              <p>كل ما تحتاج إلى معرفته هو عنوان بريدك الإلكتروني وكلمة مرورك.</p>
            </div>
          </div>
        </div>
      </div>
      <!--Newletter Wrap End-->

      <!--Footer List Wrap Start-->
      <div class="gt_footer1_bg default_width">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 wow zoomIn">
              <div class="gt_foo_about gt_widget_hdg">
                  <h5>خدماتنا</h5>
                  <ul>
                      <li><a href="#">دورات تعليميه</a></li>
                      <li><a href="#">أحداث</a></li>
                      <li><a href="#">المدرسين</a></li>
                      <li><a href="#">مسابقات</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 wow zoomIn">
              <div class="gt_foo_about gt_widget_hdg">
                  <h5>حسابي</h5>
                  <ul>
                      <li><a href="#">المراحل الدراسيه</a></li>
                      <li><a href="#">استرك معنا</a></li>
                      <li><a href="#">دخول</a></li>
                      <li><a href="#">حساب جديد</a></li>
                  </ul>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-6 wow zoomIn">
              <div class="gt_foo_about gt_widget_hdg">
                  <h5>معلومات عنا</h5>
                  <ul>
                      <li><a href="#">من نحن</a></li>
                      <li><a href="#">الشروط والاحكام</a></li>
                      <li><a href="#">الاسعار</a></li>
                      <li><a href="#">برامج التحميل</a></li>
                      <li><a href="#">تواصل معنا</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 wow zoomIn">
              <div class="gt_foo_about gt_widget_hdg">
                  <h5>لمعرفه كل جديد زورونا علي :</h5>
                  <ul>
                      <li><a href="#">Facebook</a></li>
                      <li><a href="#">Twitter</a></li>
                      <li><a href="#">Linked in</a></li>
                  </ul>
              </div>
            </div>
          </div>

          <!--Footer Contact Wrap Start-->
          <div class="gt_foo_contact_wrap">
            <div class="row">
                <div class="col-md-4 col-sm-6 wow zoomIn">
                    <div class="gt_foo_contact_des">
                        <i class="icon-phone"></i>
                          <div class="gt_foo_icon_des">
                            <h5>(8) 111 22 333 444</h5>
                              <span>من السبت الي الاربعاء من 8 ص حتي 5.30 مستءا</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 wow zoomIn">
                    <div class="gt_foo_contact_des">
                        <i class="icon-tool"></i>
                          <div class="gt_foo_icon_des">
                            <h5>support@deltasoft.com</h5>
                              <span>تواصل معنا </span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="gt_foo_contact_des wow zoomIn">
                        <i class="icon-pin"></i>
                          <div class="gt_foo_icon_des">
                            <h5>مصر , الدقهليه,مدينه المنصوره</h5>
                            <span>شارع الدولي , برج الرواد </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--Footer Contact Wrap End-->
        </div>
      </div>
      <!--Footer List Wrap End-->

      <!--Copyright Wrap End-->
      <div class="gt_copyright_wrap">
        <div class="container">
            <div class="gt_copyright_des"> 
                <span class="site-title"> <a href="http://edeltasoft.com/en/" rel="home"> Delta Soft &nbsp; <img src="http://edeltasoft.com/wp-content/uploads/2016/04/delta_icon.png" alt="">  </a>developed and customized by </span> 
                <p>حقوق الملكيه © 2017. كل الحقوق محفوظه.</p>
                
              </div>
          </div>
      </div>
      <!--Copyright Wrap Start-->
    </footer>
    <!--Footer Wrap End-->
  <!--Back to Top Wrap Start-->
  <div class="back-to-top">
      <a href="#home"><i class="fa fa-angle-up"></i></a>
  </div>
    <!--Back to Top Wrap Start-->
  </div>
  <!--gt Wrapper End-->


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <!--Jquery Library theme -->
    <script src="{{asset('theme/js/jquery.js')}}"></script>
    <!--Bootstrap core JavaScript-->
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <!--Swiper Slider JavaScript-->
    <script src="{{asset('theme/js/swiper.jquery.min.js')}}"></script>
    <!--Owl Carousel JavaScript-->
    <script src="{{asset('theme/js/owl.carousel.js')}}"></script>
    <!--Chosen JavaScript-->
    <script src="{{asset('theme/js/chosen.jquery.min.js')}}"></script>
    <!--Chosen JavaScript-->
    <script src="{{asset('theme/js/waypoints-min.js')}}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{asset('theme/js/jquery.prettyPhoto.js')}}"></script>
    <!--WOW JavaScript-->
    <script src="{{asset('theme/js/wow.min.js')}}"></script>
    <!--Nice Scroll JavaScript-->
    <script src="{{asset('theme/js/nicescroll.js')}}"></script>
     <!--Jquery Validation Script-->
    <script src="{{asset('theme/js/pluginse209.js')}}"></script>
    <!--Custom JavaScript-->
    <script src="{{asset('theme/js/custom.js')}}"></script>  
    <script src="{{asset('theme/js/modernizr.js')}}"></script> 
    <script src="{{asset('theme/js/main.js')}}"></script> 
    <!--Map JavaScript-->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk&callback=initMap" type="text/javascript"></script>   --}}
</body>
</html>
