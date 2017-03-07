@extends('layouts.app')
@section('content')
	<!--Sub Banner Wrap Start -->
	<div class="gt_sub_banner_bg default_width">
	    <div class="container">
	        <div class="gt_sub_banner_hdg  default_width">
	            <h2>المقررات </h2>
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
	            <li><a href="#">الرئيسيه</a></li>
	            <li><a href="#">تفاصيل المقرر</a></li>
	        </ul>
	    </div>
	    
	  </div>
	</div>
	<!--Breadcrumb Wrap End -->
	  <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <section class="gt_courses_bg">
        <div class="container">
          <!--Course Detail Wrap Start-->
          <div class="col-md-8">
            <div class="gt_cdd_outer_wrap default_width">
              <figure>
                <img src="{{$subject->image}}" >
              </figure>
              <div class="gt_cd_hdg_wrap default_width wow slideInUp">
                <h4>{{$subject->name}}</h4>
                <div class="gt_cd_rating">
                 
                  <ul class="gt_rating_star">
                    <li>
                      <a href="#"><i class="fa fa-star"></i></a>
                      <a href="#"><i class="fa fa-star"></i></a>
                      <a href="#"><i class="fa fa-star"></i></a>
                      <a href="#"><i class="fa fa-star"></i></a>
                      <a href="#"><i class="fa fa-star"></i></a>
                    </li>
                  </ul>
                   <span>(244 مشاهد)</span>
                </div>
              </div>
              <div class="gt_cd_mata_wrap default_width wow slideInUp">
                <ul>
                  <li>
                    <figure>
                      <img src="{{asset('theme/extra-images/course-author.png')}}" alt="">
                    </figure>
                    <div class="gt_course_meta_des">
                      <h6>احمد محمد</h6>
                      <span>مدرس اول احصاء</span>
                    </div>
                  </li>
                  <li>
                    <i class="icon-book"></i>
                      <div class="gt_course_meta_des">
                        <h6>علمي رياضه</h6>
                        <span>الاقسام</span>
                      </div>
                  </li>
                  <li>
                    <ul class="gt_scl_icon">
                      <li><a class="bg_fb" href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="bg_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a class="bg_gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a class="bg_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a class="bg_behance" href="#"><i class="fa fa-behance"></i></a></li>
                      <li><a class="bg_vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                      <li><a class="bg_youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="gt_cd_des_wrap default_width wow slideInUp">
                <h4>عن الدوره</h4>
                <p class="mb20"> {{$subject->description}}
                </p>
              </div>
              <div class="gt_cd_des_wrap default_width wow slideInUp">
                <h4>ماذا سوف تدرس</h4>
                <p class="mb20"> دورة إعداد الجداول الإحصائية وتحليل البيانات باستخدام الحاسب الإلكتروني (دورات تدريبية متقدمة)
                دورة تعدين البيانات دورة الضبط الإحصائى للعمليات وتطبيقات خرائط ضبط الجودةدورة الإحصاء ودورها فى التخطيط والمتابعة وإتخاذ القرارات دورة المهارات </p>
                <ul>
                  <li>إنشاء وتطوير نظم الإحصاء.</li>
                  <li> تطبيقات الحكومة الإلكترونية في مجال التسجيل والإحصاء.</li>
                  <li> الإنترنت وأساليب البحث العلمي في مراكز المعلومات.</li>
                  <li>الإحصاء ودورها فى التخطيط والمتابعة وإتخاذ القرارات.</li>
                </ul>
              </div>
              <div class="gt_cd_des_wrap default_width wow slideInUp">
                <h4>المتطلبات</h4>
                <p class="mb20"> دورة إعداد الجداول الإحصائية وتحليل البيانات باستخدام الحاسب الإلكتروني (دورات تدريبية متقدمة)
                دورة تعدين البيانات دورة </p>
                <ul>
                  <li> ورشة التدريبية حول : البرمجية R.</li>
                  <li>أساسيات استخدام برنامج الجداول الحسابية الالكترونية.</li>
                  <!-- <li>We are home to 1,500 students and 100 experts.</li>
                  <li>We are home to 1,500 students and 100 experts.</li> -->
                </ul>
              </div>
              <!-- <div class="gt_cd_des_wrap border_bottom default_width wow slideInUp">
                <h4>منهجنا</h4>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
              </div> -->
              <div class="gt_course_list_wrap default_width wow slideInUp">
                <h6>المبتدئين في الاحصاء</h6>
                <ul>
                  <li>
                    <div class="gt_lec_detail">محاضره 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>مرحبا بك في الدوره</h6>
                      <span>معاينة</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 دقيقه</div>
                  </li>
                  <li>
                    <div class="gt_lec_detail">محاضره 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>مبدائيات الدوره</h6>
                      <span>معاينه</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 دقيقه</div>
                  </li>
                </ul>
              </div>
              <div class="gt_course_list_wrap default_width wow slideInUp">
                <h6>فهم علم الاحصاء</h6>
                <ul>
                  <li>
                    <div class="gt_lec_detail">المحاضره 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>مرحبا بك في الدوره</h6>
                      <span>مشاهده</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 دقيقه</div>
                  </li>
                  <li>
                    <div class="gt_lec_detail">محاضره 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>تعريف مبادئ علم الاحصاء</h6>
                      <span>متابعه</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 دقيقه</div>
                  </li>
                  <li>
                    <div class="gt_lec_detail">محاضره 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>مرحبا بك في الدوره</h6>
                      <span>مشاهده</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 دقيقه</div>
                  </li>
                  
                </ul>
              </div>
              <!-- <div class="gt_course_list_wrap border_bottom default_width wow slideInUp">
                <h6>Basic Training of Photoshop</h6>
                <ul>
                  <li>
                    <div class="gt_lec_detail">Lecture 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>Welcome to the Courses</h6>
                      <span>Preveiw</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 Minute</div>
                  </li>
                  <li>
                    <div class="gt_lec_detail">Lecture 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>Introducing the program of the course</h6>
                      <span>Preveiw</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 Minute</div>
                  </li>
                  <li>
                    <div class="gt_lec_detail">Lecture 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>Welcome to the Courses</h6>
                      <span>Preveiw</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 Minute</div>
                  </li>
                  <li>
                    <div class="gt_lec_detail">Lecture 1.1:</div>
                    <div class="gt_lec_title">
                      <h6>Introducing the program of the course</h6>
                      <span>Preveiw</span>
                    </div>
                    <div class="gt_lec_duration"><i class="fa fa-clock-o"></i>30 Minute</div>
                  </li>
                </ul>
              </div> -->
              <!-- <div class="gt_cd_des_wrap border_bottom default_width wow slideInUp">
                <h4>COURSE INSTRUCTOR</h4>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
              </div> -->
              <!-- <div class="gt_instructor_detail default_width wow slideInUp">
                <figure>
                  <img src="extra-images/instructor-pic-01.jpg" alt="">
                </figure>
                <div class="gt_instructor_detail_des">
                  <h4>CHARLES G. SMITH</h4>
                  <h6>Senior Teacher</h6>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                  <ul class="gt_scl_icon">
                    <li><a class="bg_fb" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="bg_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="bg_gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="bg_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="bg_behance" href="#"><i class="fa fa-behance"></i></a></li>
                    <li><a class="bg_vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                    <li><a class="bg_youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                  </ul>
                </div>
              </div> -->
            </div>
          </div>
          <!--Course Detail Wrap End-->

          <!--Aside Wrap End-->
          <aside class="col-md-4">
            <div class="gt_resp_margn default_width">
              <!--Aside Featured Courses Wrap Start-->
              <div class="gt_featured_course_list gt_aside2_hdg mb30 wow slideInUp">
                <h5>مميزات الدوره</h5>
                <ul>
                  <li>
                    <div class="gt_course_dur_list">
                      <i class="icon-clock-1"></i>
                      <span>مده الدوره</span>
                    </div>
                    <span class="gt_duration">3 شهور</span>
                  </li>
                  <li>
                    <div class="gt_course_dur_list">
                      <i class="icon-student"></i>
                      <span>عدد الحصص</span>
                    </div>
                    <span class="gt_duration">18</span>
                  </li>
                  <li>
                    <div class="gt_course_dur_list">
                      <i class="icon-cup"></i>
                      <span>شهاده </span>
                    </div>
                    <span class="gt_duration">يوجد</span>
                  </li>
                  <li>
                    <div class="gt_course_dur_list">
                      <i class="icon-classroom-with-students-group-and-the-teacher"></i>
                      <span>الاختبارات</span>
                    </div>
                    <span class="gt_duration">2</span>
                  </li>
                  <li>
                    <div class="gt_course_dur_list">
                      <i class="icon-people"></i>
                      <span>المشتركين</span>
                    </div>
                    <span class="gt_duration">50</span>
                  </li>
                  <li>
                    <div class="gt_course_dur_list">
                      <i class="icon-people-1"></i>
                      <span>مستوي التعلم</span>
                    </div>
                    <span class="gt_duration">مبتدئيين</span>
                  </li>
                  <li>
                    <div class="gt_course_dur_list">
                      <i class="icon-commerce-1"></i>
                      <span>السعر</span>
                    </div>
                    <span class="gt_duration">$99</span>
                  </li>
                </ul>
                <a href="#">احجز الان</a>
                <a class="gt_add_fav" href="#">اضافه الي مفضلتي</a>
              </div>
              <!--Aside Featured Courses Wrap End-->

              <!--Aside Download Courses Wrap Start-->
              <div class="gt_dwnload_course default_width mb30 wow slideInUp">
                <a href="#">
                  <i class="icon-arrows"></i>
                  <span>تحميل <br>الدوره كامله</span>
                </a>
              </div>
              <!--Aside Download Courses Wrap End-->

              <!--Aside Courses Introduction Wrap Start-->
              <div class="gt_course_intro default_width mb30 wow slideInUp">
                <figure>
                  <img src="{{$subject->image}}" alt="">
                  <figcaption class="gt_play_btn">
                    <a data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=Z_Qb-BOAVac"><i class="fa fa-play"></i></a>
                  </figcaption>
                </figure>
                <p>التعريف بالدوره</p>
              </div>
              <!--Aside Courses Introduction Wrap End-->

              <!--Aside Categories Wrap Start-->
              <div class="gt_aside_category gt_aside2_hdg mb30 wow slideInUp">
                <h5>الاقسام</h5>
                  <ul>
                    <li><a href="#">جبر</a> <span>55</span></li>
                      <li><a href="#">هندسه فراغيه</a> <span>45</span></li>
                      <li><a href="#">احصاء</a> <span>10</span></li>
                      <li><a href="#">علم نفس</a> <span>15</span></li>
                      <li><a href="#">لغه عربيه</a> <span>25</span></li>
                      <li><a href="#">لغه انجليزيه</a> <span>50</span></li>
                      <li><a href="#">لغه فرنسيه</a> <span>25</span></li>
                      <li><a href="#">ميكانيكا</a> <span>50</span></li>
                      <li><a href="#">استاتيكا</a> <span>25</span></li>
                  </ul>
              </div>
              <!--Aside Categories Wrap End-->

              <!--Aside Featured Courses Wrap Start-->
              <div class="gt_featured_course_list gt_aside2_hdg mb30 wow slideInUp">
                <h5>دورات متشابهه</h5>
                <ul class="gt_aside_fea_course">
                  <li>
                    <figure>
                      <img src="{{asset('theme/extra-images/course-fea-01.jpg')}}" alt="">
                    </figure>
                    <div class="aside_fea_course_des">
                      <h6><a href="#">حبر </a></h6>
                      <span>Price: 55$</span>
                    </div>
                  </li>
                  <li>
                    <figure>
                      <img src="{{asset('theme/extra-images/course-fea-02.jpg')}}" alt="">
                    </figure>
                    <div class="aside_fea_course_des">
                      <h6><a href="#">علم الطبيعه</a></h6>
                      <span>Price: 55$</span>
                    </div>
                  </li>
                  <li>
                    <figure>
                      <img src="{{asset('theme/extra-images/course-fea-03.jpg')}}" alt="">
                    </figure>
                    <div class="aside_fea_course_des">
                      <h6><a href="#">الرياضه الباحته</a></h6>
                      <span>Price: 55$</span>
                    </div>
                  </li>
                </ul>
              </div>
              <!--Aside Featured Courses Wrap End-->

              <!--Aside Question From Wrap Start-->
              <div class="gt_aside2_hdg">
                <h5>اسئله</h5>
                <form class="gt_aside_ques_form">
                  <input type="text" placeholder="الاسم">
                  <input type="text" placeholder="الايميل">
                  <textarea placeholder="السؤال"></textarea>
                  <input type="submit" value="ارسل الان">
                </form>
              </div>
              <!--Aside Question From Wrap End-->
            </div>
          </aside>
          <!--Aside Wrap Start-->
        </div>
      </section>
    </div>
    <!--Main Content Wrap End-->

@endsection