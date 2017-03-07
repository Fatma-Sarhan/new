@extends('layouts.app')
@section('content')
	 <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h2>تواصل معنا</h2>
                <h6>مرحبا بك فى موقعنا</h6>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->
    <!--Breadcrumb Wrap Start -->
    <div class="gt_breadcrumb_bg default_width">
      <div class="container">
        <div class="gt_breadcrumb_wrap default_width">
            <ul>
                <li><a href="{{ url('/')}}">الرئيسيه</a></li>
                <li><a href="{{ url('contact-us')}}">تواصل معنا</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->
      <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <section>
        <div class="container">
          <div class="row">
            <!--Contact List Wrap Start-->
            <div class="col-md-5">
              <div class="gt_contact_list default_width wow slideInUp">
                <h4>معلومات التواصل </h4>
                <ul>
                  <li>
                    <div class="gt_contact_icon"><i class="fa fa-map-marker"></i></div>
                    <div class="gt_contact_des">
                      <h6>العنوان</h6>
                      <p>مصر , الدقهليه,مدينه المنصوره</p>
                    </div>
                  </li>
                  <li>
                    <div class="gt_contact_icon"><i class="icon-telephone"></i></div>
                    <div class="gt_contact_des">
                      <h6> اتصل بنا </h6>
                      <p>(09) 111 222 333  -  (09) 111 222 333  </p>
                    </div>
                  </li>
                  <li>
                    <div class="gt_contact_icon"><i class="icon-email-opened-envelope"></i></div>
                    <div class="gt_contact_des">
                      <h6>راسلنا على </h6>
                      <a href="#">Support@deltasoft.com</a>
                    </div>
                  </li>
                  <li>
                   {{--  <div class="gt_contact_icon"><i class="icon-clock"></i></div> --}}
                   {{--  <div class="gt_contact_des">
                      <h6>University Timing</h6>
                      <p>Mon - sat 0:800 am to O9:00 pm</p>
                    </div> --}}
                  </li>
                </ul>
                <div class="gt_contact_scl_wrap default_width">
                  <h4>تابعنا على </h4>
                  <ul class="gt_scl_icon">
                    <li><a class="bg_fb" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="bg_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="bg_gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                    {{-- <li><a class="bg_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="bg_behance" href="#"><i class="fa fa-behance"></i></a></li>
                    <li><a class="bg_vimeo" href="#"><i class="fa fa-vimeo"></i></a></li> --}}
                    <li><a class="bg_youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Contact List Wrap End-->
            <!--Map Wrap Start-->
            <div class="col-md-7 wow slideInUp">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56585166.949345924!2d-58.258560236393045!3d30.045907835307332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79c5319ff9af7%3A0x92a5c04ee11f30e8!2sDelta+Soft!5e0!3m2!1sen!2seg!4v1488195855472" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!--Map Wrap End-->
          </div>
          <!--Conatct Form Wrap Start-->
          <div class="gt_contact_form_wrap default_width wow slideInUp">
            <!--Heading Wrap Start-->
            <div class="gt_hdg_1 default_width">
              <h3>ابقٍ على تواصل معنا </h3>
              <p></p>
                <span class="gt_hdg_left"></span>
                <i class="icon-school"></i>
                <span class="gt_hdg_right"></span>
            </div>
            <!--Heading Wrap End-->
            <form class="gt_contact_form" id="contact-form" action="http://2goodtheme.net/edu-skill/nice-scroll/assets/sendmail.php" method="post">
              <div class="col-md-4">
                  <div class="gt_contact_us_field">
                      <input class="c_ph" type="text" placeholder="اﻷسم :" id="name" name="contact-name" required>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="gt_contact_us_field">
                      <input class="c_ph" type="text" placeholder="البريد اﻷلكترونى :" id="email" name="contact-email" required>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="gt_contact_us_field">
                      <input class="c_ph" type="text" placeholder="رقم الهاتف :" id="subject" name="contact-subject" required>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="gt_contact_us_field">
                      <textarea class="gt_c_bg" name="contact-message" id="message" placeholder="رسالتك  . . . ." required></textarea>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="gt_contact_us_field">
                      <input id="submit-message" type="submit" value="إرسال " name="submit_msg">
                  </div>
                  <!--Alert Message-->
                  <div id="contact-result">
                  </div>
              </div>
            </form>
          </div>
          <!--Conatct Form Wrap End-->
        </div>
      </section>
    </div>
    <!--Main Content Wrap End-->
@endsection
