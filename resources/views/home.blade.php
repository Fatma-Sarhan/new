@extends('layouts.app')

@section('content')
         <!--Banner Wrap Start [[Slider]] -->
    <div class="gt_banner default_width">
      <div class="swiper-container" id="swiper-container">
         <ul class="swiper-wrapper">
            <li class="swiper-slide">
                <img src="{{asset('theme/extra-images/banner-01.jpg')}}" alt="">
                <div class="gt_banner_text gt_slide_1">
                  <h2>الأن من أولى إعدادى إلى أولى ثانوى</h2>
                  <p>لفترة محدودة - أحصل علي رصيد مجاني بقيمة 25 جنيه</p>
                  <a href="#">اشترك مجانا<i class="fa fa-arrow-left"></i></a>
                </div>
            </li>
            <li class="swiper-slide">
                <img src="{{asset('theme/extra-images/banner-02.jpg')}}" alt="">
                <div class="gt_banner_text gt_slide_2">
                  <h2>نظام تعليمي متكامل يحقق ليك النجاح بأقل المصاريف</h2>
                  <p>لفترة محدودة - أحصل علي رصيد مجاني بقيمة 25 جنيه</p>
                  <a href="#">اشترك مجانا<i class="fa fa-arrow-left"></i></a>
                </div>
            </li>
            <li class="swiper-slide">
                <img src="{{asset('theme/extra-images/banner-03.jpg')}}" alt="">
                <div class="gt_banner_text gt_slide_3">
                  <h2>نظام تعليمي متكامل يحقق ليك النجاح بأقل المصاريف</h2>
                  <p>الأن من أولى إعدادى إلى أولى ثانوى</p>
                  <a href="#">اشترك مجانا<i class="fa fa-arrow-left"></i></a>
                </div>
            </li>
         </ul>
       </div>
      <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
      <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    </div>

     <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <!--Banner Services Wrap Start  [[ Services]] -->
      <div class="gt_banner_service_wrap default_width">
        <div class="container">
          <div class="col-md-4 no_padding wow slideInUp">
            <div class="gt_banner_service service_bg_1 default_width" style="background-image:url(theme/extra-images/courses-01.jpg);">
              <i class="icon-commerce"></i>
              <h4><a href="#">افضل النتائج التعليميه</a></h4>
              <p>افضل المتابعه مع افضل الاساتذه</p>
              <a href="#">شاهد المزيد</a>
            </div>
          </div>
          <div class="col-md-4 no_padding wow slideInUp">
            <div class="gt_banner_service service_bg_2 default_width" style="background-image:url(theme/extra-images/courses-02.jpg);">
              <i class="icon-computer-1"></i>
              <h4><a href="#">افضل الاساتذه</a></h4>
              <p>افضل المقررات التعليميه</p>
              <a href="#">شاهد المزيد</a>
            </div>
          </div>
          <div class="col-md-4 no_padding wow slideInUp">
            <div class="gt_banner_service service_bg_3 default_width" style="background-image:url(theme/extra-images/courses-03.jpg);">
              <i class="icon-open-book"></i>
              <h4><a href="#">افضل المراجع التعليميه</a></h4>
              <p>افضل المتابعه مع افضل الاساتذه</p>
              <a href="#">شاهد المزيد</a>
            </div>
          </div>
        </div>
      </div>
      <!--Banner Services Wrap End [[ End Services]] -->

      <!--Explore All Courses Wrap End [[ About US]]-->
      <section class="gt_courses_bg">
        <div class="container">
          <!--Heading Wrap Start-->
          <div class="gt_hdg_1 default_width">
            <h3>من نحن</h3>
            <p>اكتشف من نحن </p>
              <span class="gt_hdg_left"></span>
              <i class="icon-school"></i>
              <span class="gt_hdg_right"></span>
              <div class="gt_history_slider flexslider" id="gt_history_slider">
                <div class="row">
            <div class="col-md-6 wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
              <div class="get_started_video">
                  <img src="{{asset('theme/extra-images/welcome-eduskill.png')}}" alt="">
                  <div class="get_video_icon">
                      <a data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=Z_Qb-BOAVac"><i class="fa fa-play" style="color: #fff"></i></a>
                      <span>شاهد الفديو</span>
                  </div>
              </div>
            </div>
            <div class="col-md-6 wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
              <div class="get_started_content_wrap ct_blog_detail_des_list">
                  <h3>مرحبا بك في موقعنا</h3>
                  <p>موقعنا هو أول موقع تعليمي شامل من نوعه في مصر، بيخللي الطلبة -بتكلفة قليلة- يذاكروا أونلاين مع مدرسين متخصصين في مجالهم ومشهود لهم بالكفاءة والتميز وإنهم ساعدوا طلبة كتير يجيبوا درجات عالية. ذاكر أونلاين بقاله 11 سنة بيخدم طلبة المدارس المختلفة، ومؤخرًا بدأنا نركز على طلبة المدارس الحكومية نظرًا لوجود احتياج أكبر في الشريحة دي. ذاكر نظام تعليمي متكامل يحققلك النجاح بأقل المصاريف في ذاكر الطالب هيلاقي كل الخدمات التعليمية في مكان واحد وبشكل يسهل عليه إنه يذاكر وينجح بتكلفة أقل. وذاكر يفرق عن أي مكان بيقدم خدمات تعليمية تقليدية إنه بيستخدم أحدث أساليب التكنولوجيا في الشرح والمتابعة والتقييم</p>

                  <a href="#" class="about_btn"> شاهد المزيد </a>
              </div>
            </div>
          </div>
              </div>
          </div>
        </div>
      </section>
      <!--Explore All Courses Wrap Start [[ End About US]] -->



      <!-- Educational stages-->
      <section class="gt_fact_bg">
        <div class="container">
          <!--Heading Wrap Start-->
          <div class="gt_hdg_1 default_width Stage_header">
            <h3>المراحل التعليميه</h3>
            <p>قريبا موقعنا هيقدم كل المراحل ... اكتشف المراحل التعليمية المتاحه دلوقتى علي موقعنا </p>
            <span class="gt_hdg_left"></span>
            <i class="icon-school"></i>
            <span class="gt_hdg_right"></span>
            <div class="gt_history_slider flexslider" id="gt_history_slider">
            </div>
          </div>
          <div class="row">
              {{-- <div class="col-md-3 col-sm-6 wow slideInUp Stages">
                  <div class="gt_number_count_wrap gt_bg_14 Stage_body">
                    <i class="icon-books-stack-from-top-view"></i>
                    <h5><a href="#">اولي اعدادي</a></h5>
                  </div>
              </div>
               <div class="col-md-3 col-sm-6 wow slideInUp Stages">
                  <div class="gt_number_count_wrap gt_bg_17 Stage_body">
                    <i class="icon-open-book"></i>
                    <h5><a href="#">تانيه اعدادي</a></h5>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 wow slideInUp Stages">
                  <div class="gt_number_count_wrap gt_bg_15 Stage_body">
                    <i class="icon-avatar"></i>
                    <h5><a href="#">ثالثه اعدادي</a></h5>
                  </div>
              </div> --}}
                @if(!empty ($degrees))
                  @foreach($degrees as $degree)
                      <div class="col-md-3 col-sm-6 wow slideInUp Stages">
                      <div class="gt_number_count_wrap gt_bg_16 Stage_body">
                        {{-- <i class="icon-education"></i> --}}
                        <img src="{{$degree->icon}}" width="70px" height="70px">
                        <h5><a href="#">{{$degree->name}}</a></h5>
                      </div>
                    </div>

                  @endforeach
                @endif
              
                <a href="#" class="Stage_btn hidden-md"> شاهد المزيد </a>
             
          </div>
        </div>
      </section>
      <!--Facts and Figure Wrap End-->
      <!--Why Choose Us Wrap Start-->
      <section class="gt_choose_bg">
        <div class="container">
          <!--Heading Wrap Start-->
          <div class="gt_hdg_1 default_width">
            <h3>تحب تتعلم إزاى؟</h3>
            <p>ذاكر - راجع - إنجح</p>
              <span class="gt_hdg_left"></span>
              <i class="icon-school"></i>
              <span class="gt_hdg_right"></span>
          </div>
          <!--Heading Wrap End-->

          <!--Choose Us List Wrap Start-->
          <div class="row">
            <div class="col-md-3">
              <div class="gt_choose_img">
                <img src="{{asset('theme/extra-images/choose-img.png')}}" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6 col-sm-6 wow slideInUp">
                  <div class="gt_choose_wrap gt_bg_9 default_width">
                    <span class="gt_bg_5"><i class="icon-learning"></i></span>
                    <div class="gt_choose_des">
                      <h3><a href="#">الدروس المباشرة والمسجلة</a></h3>
                      <p>باستخدام تكنولوجيا متطورة، يقدر الطالب يشارك في حصة مباشرة أونلاين يسمع ويشوف فيها شرح درس على سبورة قدامه ويتفاعل مع المدرس ومع زمايله</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 wow slideInUp">
                  <div class="gt_choose_wrap gt_bg_13 default_width">
                    <span class="gt_bg_3"><i class="icon-nature"></i></span>
                    <div class="gt_choose_des">
                      <h3><a href="#">التجارب والأنشطة</a></h3>
                      <p>موقعنا بيقدم التجارب والأنشطة اللي في المنهج بشكل مبسط وجذاب باستخدام الصور والفيديوهات اللي بتوصل المعلومة بطريقة سريعة وممتعة.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 wow slideInUp">
                  <div class="gt_choose_wrap gt_bg_10 default_width">
                    <span class="gt_bg_6"><i class="icon-education-1"></i></span>
                    <div class="gt_choose_des">
                      <h3><a href="#">إختبارات و تقييم</a></h3>
                      <p>كل طالب له صفحة للتقييمات يقدر يتابع من خلالها مستواه وتقدمه في مادة معينة، ويعرف نقط ضعفه وقوته، وياخد نصايح لتحسين مستواه</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 wow slideInUp">
                  <div class="gt_choose_wrap gt_bg_12 default_width">
                    <span class="gt_bg_8"><i class="icon-sports"></i></span>
                    <div class="gt_choose_des">
                      <h3><a href="#">التعليم الذاتي</a></h3>
                      <p>الملزمة هي كل محتويات الدرس اللي متقدمة بطريقة شبه الكتاب الخارجي في العرض والتلخيص والتوضيح بس بتستخدم الأدوات التكنولوجية.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 wow slideInUp">
                  <div class="gt_choose_wrap gt_bg_11 default_width">
                    <span class="gt_bg_7"><i class="icon-technology"></i></span>
                    <div class="gt_choose_des">
                      <h3><a href="#">متابعة الأداء</a></h3>
                      <p>تابع مستواك طول السنة حل امتحانات السنين السابقة مراجعه ليلة الامتحان أهم الأسئلة المتوقعة</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 wow slideInUp">
                  <div class="gt_choose_wrap gt_bg_9 default_width">
                    <span class="gt_bg_5"><i class="icon-books-stack-from-top-view"></i></span>
                    <div class="gt_choose_des">
                      <h3><a href="#">تعدد الإختيار</a></h3>
                      <p>الطالب في موقعنا يقدر يختار المدرس اللي يعجبه ووقت الحصص اللي يناسبه، ويقدر يشوف الدرس اللي حضره بعد ما يخلص أكتر من مرة</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!--Choose Us List Wrap End-->
        </div>
      </section>
      <!--Why Choose Us Wrap End-->

      <!--Explore All Courses Search Wrap Start-->
      <section class="gt_course_search_bg">
        <!--Heading Wrap Start-->
        <div class="gt_hdg_1 white_color default_width">
          <h3>استكشاف جميع الدورات</h3>
          <p>يمكنك التعرف علي الدورات الموجوده لدينا</p>
        </div>
        <!--Heading Wrap End-->
        <!--Explore Search Wrap Start-->
        <div class="container">
          <div class="gt_explore_search_wrap default_width wow slideInUp">
            <form class="default_width">
               <div class="col-md-3 col-sm-6">
                   <div class="gt_explore_search">
                       <select class="find_course_search">
                           <option>القسم</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                       </select>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="gt_explore_search">
                       <select class="find_course_search">
                           <option>الفصل الدراسى</option>
                           <option>اﻻول</option>
                           <option>التانى</option>
                           <option>طول العام</option>
                       </select>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="gt_explore_search">
                       <select class="find_course_search">
                        <option>السنه الدراسيه</option>
                        @foreach($degrees as $degree)
                           <option>{{$degree->name}}</option>
                        @endforeach
                       </select>
                   
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="gt_explore_search">
                       <select class="find_course_search">
                           <option>الماده</option>
                           @foreach($subjects as $subject)
                           <option>{{$subject->name}}</option>
                           @endforeach
                       </select>
                   </div>
               </div>
               <div class="col-md-12">
                   <div class="gt_explore_search align_center">
                       <input type="submit" value="ابحث عن الكورس" />
                   </div>
               </div>
           </form>
          </div>
        </div>
        <!--Explore Search Wrap End-->
      </section>
 
      

      <!--Meet Our Teacher Wrap Start-->
      <section>
        <div class="container">
          <!--Heading Wrap Start-->
          <div class="gt_hdg_1 default_width">
            <h3>نخبة من أفضل الأساتذة</h3>
            <p>في في موقعنا المدرسين مختارين بعناية لضمان تفوق الطالب ...</p>
              <span class="gt_hdg_left"></span>
              <i class="icon-school"></i>
              <span class="gt_hdg_right"></span>
          </div>
          <!--Heading Wrap End-->

          <!--Meet Teacher List Wrap Start-->
          <div class="gt_teacher_slider" id="gt_teacher_slider">
            <div class="item wow slideInUp">
              <div class="gt_team_wrap default_width">
                <figure>
                  <img src="{{asset('theme/extra-images/teacher-04.jpg')}}" alt="">
                </figure>
                <div class="gt_team_des default_width">
                  <h3><a href="#">محمد محمود</a></h3>
                  <span>  مدرس أحياء / علوم</span>
                  <ul class="gt_scl_icon">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                  <p class="Techer_p">بكالريوس العلوم قسم حيوان عام 2002 - دبلومة تدريس العلوم باللغتين العربية والانجليزية من جامعة عين شمس - معد ومقدم البرامج التعليمية علوم لغات بقنوات النيل التعليمية - معد ومقدم المواد التعليمية </p>
                </div>
              </div>
            </div>
            <div class="item wow slideInUp">
              <div class="gt_team_wrap default_width">
                <figure>
                  <img src="{{asset('theme/extra-images/teacher-08.jpg')}}" alt="">
                </figure>
                <div class="gt_team_des default_width">
                  <h3><a href="#"> نوال احمد</a></h3>
                  <span>مدرسه رياضيات</span>
                  <ul class="gt_scl_icon">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                  <p class="Techer_p">بكاريوس التربية قسم الرياضيات عام 2004 جامعة حلوان - دورات في طرق تدريس الرياضيات باللغة العربية والانجليزية من جامعة عين شمس - معد ومقدم البرامج التعليمية رياضيات لغات بقنوات النيل التعليمية </p>
                </div>
              </div>
            </div>
            <div class="item wow slideInUp">
              <div class="gt_team_wrap default_width">
                <figure>
                  <img src="{{asset('theme/extra-images/teacher-04.jpg')}}" alt="">
                </figure>
                <div class="gt_team_des default_width">
                  <h3><a href="#">نادر زغلول</a></h3>
                  <span>مدرس رياضيات</span>
                  <ul class="gt_scl_icon">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                  <p class="Techer_p">من أفضل 50 معلم على مستوى العالم فى مسابقة الماثليتيكس لعام 2015 -2016 - حاصل على دوره تدريبيه فى تدريس مادة الرياضيات باللغة الإنجليزيه من كليه التربيه بجامعة عين شمس - حاصل على دورة تدريبيه فى استراتي</p>
                </div>
              </div>
            </div>
            <div class="item wow slideInUp">
              <div class="gt_team_wrap default_width">
                <figure>
                  <img src="{{asset('theme/extra-images/teacher-04.jpg')}}" alt="">
                </figure>
                <div class="gt_team_des default_width">
                  <h3><a href="#">مدحت محمد أحمد</a></h3>
                  <span>مدرس كيمياء / علوم</span>
                  <ul class="gt_scl_icon">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                  <p class="Techer_p">مقدم مادتي الكيمياء للمرحلة الثانوية والعلوم للمرحلة الاعدادية باللغتين العربية والأنجليزية -  حاصل على بكاريوس العلوم والتربية قسم الكيمياء الحيوية - حاصل على الماجستير في الكيمياء الحيوية 2008 - </p>
                </div>
              </div>
            </div>
            <div class="item wow slideInUp">
              <div class="gt_team_wrap default_width">
                <figure>
                  <img src="{{asset('theme/extra-images/teacher-08.jpg')}}" alt="">
                </figure>
                <div class="gt_team_des default_width">
                  <h3><a href="#">منال عوض</a></h3>
                  <span>مدرسه أحياء / علوم</span>
                  <ul class="gt_scl_icon">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                  <p class="Techer_p">بكالوريوس العلوم و التربية ، حاصل علي دورة مهارات التدريس باللغتين العربيةو الأنجليزية ، دورة التعليم الألكتروني و إعداد المناهج التعليمية ،بالإضافة لدورة الأختبارات الدولية -  حاصل على دورات في ا
                   </p>
                </div>
              </div>
            </div>
          </div>
          <!--Meet Teacher List Wrap End-->
        </div>
      </section>
      <!--Meet Our Teacher Wrap End-->

      <!--Testimonial Wrap Start-->
      <section class="gt_testimonial_bg">
        <div class="container">
          <!--Heading Wrap Start-->
          <div class="gt_hdg_1 white_color default_width">
            <h3>قالو عنا ؟</h3>
            <p>أراء الطلبة و أولياء الأمور عن موقعنا..</p>
              <span class="gt_hdg_left"></span>
              <i class="icon-school"></i>
              <span class="gt_hdg_right"></span>
          </div>
          <!--Heading Wrap End-->

          <!--Testimonial List Wrap Start-->
          <div class="gt_testimonial_slider" id="gt_testimonial_slider">
            <div class="item wow slideInUp">
              <div class="gt_testimonial_wrap gt_bg_18">
                  <p>بحب المنافسة بينى وبين اصحابى على موقعكم ، الرسوم والاشكال فى الشرح بتخلنى افهم احسن، مش بتكسف مع المدرس وبكون على راحتى خالص. </p>
              </div>
              <div class="gt_testimonial_img">
                  <figure>
                      <img src="{{asset('theme/extra-images/testimonial-01.jpg')}}" alt="">
                  </figure>
                  <div class="gt_testimonial_des">
                      <h5><a href="#"> محمد أحمد صلاح </a></h5>
                      <span>طالب</span>
                  </div>
              </div>
            </div>
            <div class="item wow slideInUp">
              <div class="gt_testimonial_wrap gt_bg_19">
                  <p>موقعكم فيها مجموعة من أفضل المدرسين من حيث الأداء التعليمي و طريقة توصيل المعلومة بشكل جيد وسهل للطلبة.</p>
              </div>
              <div class="gt_testimonial_img">
                  <figure>
                      <img src="{{asset('theme/extra-images/testimonial-02.jpg')}}" alt="">
                  </figure>
                  <div class="gt_testimonial_des">
                      <h5><a href="#">لورا محمد </a></h5>
                      <span>طالبه</span>
                  </div>
              </div>
            </div>
            <div class="item wow slideInUp">
              <div class="gt_testimonial_wrap gt_bg_20">
                  <p>بحضر بعض الدروس مع بنتى وكمان وهى فى المدرسة بقدر اشوف دروسها مسجلة علشان أذاكر لها وبعرف مستوىها مباشرة اول باول.</p>
              </div>
              <div class="gt_testimonial_img">
                  <figure>
                      <img src="{{asset('theme/extra-images/testimonial-03.jpg')}}" alt="">
                  </figure>
                  <div class="gt_testimonial_des">
                      <h5><a href="#">مدام فيولت روؤف</a></h5>
                      <span>ولي امر</span>
                  </div>
              </div>
            </div>
            <div class="item wow slideInUp">
              <div class="gt_testimonial_wrap gt_bg_19">
                  <p>وفر وقت علشان المذاكرة والراحة، طريقة عرض المدرسين للشرح وتوصيل المعلومة ممتازة، واستخدام التعلم عن بعد بيساعدنى على الخصوصية والتركيز اكثر. </p>
              </div>
              <div class="gt_testimonial_img">
                  <figure>
                      <img src="{{asset('theme/extra-images/testimonial-04.jpg')}}" alt="">
                  </figure>
                  <div class="gt_testimonial_des">
                      <h5><a href="#">سامح علي</a></h5>
                      <span>طالب</span>
                  </div>
              </div>
            </div>
          </div>
          <!--Testimonial List Wrap End-->
        </div>
      </section>
      <!--Testimonial Wrap End-->

      <!--Upcomming Conference and Events Wrap Start-->
      <!-- <section>
        <div class="container">
          <!--Heading Wrap Start--
          <div class="gt_hdg_1 default_width">
            <h3>Upcoming Conferences &#38; Events</h3>
            <p>Aenean commodo ligal geate dolor. Aenan massa. Loren ipsum dolor sit amet,color<br>tetuer adiois elit, aliquam eget nibh etibra</p>
              <span class="gt_hdg_left"></span>
              <i class="icon-school"></i>
              <span class="gt_hdg_right"></span>
          </div>
          <!--Heading Wrap End-->

          <!--Event List Wrap Start--
          <div class="row">
            <div class="col-md-4 wow slideInUp">
              <div class="gt_event_img default_width">
                <img src="extra-images/event-01.jpg" alt="">
              </div>
            </div>
            <div class="col-md-8 wow slideInUp">
              <div class="gt_event_list_wrap default_width">
                <ul>
                  <li>
                    <div class="gt_event_date">
                      <h3>01</h3>
                      <span>September</span>
                    </div>
                    <div class="gt_event_des">
                      <h4><a href="#">Education Development expo</a></h4>
                      <ul class="gt_event_meta">
                        <li><i class="fa fa-clock-o"></i>8:00 am-5:00</li>
                        <li><i class="fa fa-location-arrow"></i>Locaion London</li>
                      </ul>
                      <p>Mrboie accuman veiit. anme a aodio tincggaej aucci aoreant sen nin ite reat concuat..</p>
                      <a href="#">Read More</a>
                    </div>
                  </li>
                  <li>
                    <div class="gt_event_date">
                      <h3>01</h3>
                      <span>September</span>
                    </div>
                    <div class="gt_event_des">
                      <h4><a href="#">Education Development expo</a></h4>
                      <ul class="gt_event_meta">
                        <li><i class="fa fa-clock-o"></i>8:00 am-5:00</li>
                        <li><i class="fa fa-location-arrow"></i>Locaion London</li>
                      </ul>
                      <p>Mrboie accuman veiit. anme a aodio tincggaej aucci aoreant sen nin ite reat concuat..</p>
                      <a href="#">Read More</a>
                    </div>
                  </li>
                  <li>
                    <div class="gt_event_date">
                      <h3>01</h3>
                      <span>September</span>
                    </div>
                    <div class="gt_event_des">
                      <h4><a href="#">Education Development expo</a></h4>
                      <ul class="gt_event_meta">
                        <li><i class="fa fa-clock-o"></i>8:00 am-5:00</li>
                        <li><i class="fa fa-location-arrow"></i>Locaion London</li>
                      </ul>
                      <p>Mrboie accuman veiit. anme a aodio tincggaej aucci aoreant sen nin ite reat concuat..</p>
                      <a href="#">Read More</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--Event List Wrap End--
        </div>
      </section> -->
      <!--Upcomming Conference and Events Wrap End-->
    </div>
    <!--Main Content Wrap End-->
    
@endsection


