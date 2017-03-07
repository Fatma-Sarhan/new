@extends('layouts.app')
@section('content')

	<!--Sub Banner Wrap Start -->
	<div class="gt_sub_banner_bg default_width">
	    <div class="container">
	        <div class="gt_sub_banner_hdg  default_width">
	            <h2>الجدول</h2>
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
	            <li><a href="{{url('home') }}">الرئيسيه</a></li>
	            <li><a href="#">جدول الحصص</a></li>
	        </ul>
	    </div>
	    
	  </div>
	</div>
	<!--Breadcrumb Wrap End -->
	<!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <!--Classes Wrap Start-->
      <section class="gt_courses_bg">
        <div class="container">
        	<!-- Dashboard Side Bar Wrap Start -->
	          <div class="col-md-4 wow slideInUp">
	            <div class="gt-user-sidebar">
	             <div class="gt_d_author_wrap wow slideInUp">
	                <div class="gt_d_author_pic">
	                  <figure>     
	                    @if(! empty (Auth::user()->profile_image))
	                 		<img src="{{Auth::user()->profile_image}}"
	                              	  />
	                    @else
	                       <img src="{{asset('theme/extra-images/profile-img-01.jpg')}}"
	                              	  />
	                    @endif
	                  </figure>
	                </div>
	                <div class="gt_d_author_pic_des">
	                  <h5>{{ Auth::user()->name }}</h5>
	                  <span class="gt_hdg_span"></span>
	                  <p>رقم الطالب</p>
	                  <label>{{ Auth::user()->id }}</label>
	                </div>
	                <div class="gt_d_author_sbj">
	                  <h6>المدرسه</h6>
	                   @if(! empty(Auth::user()->school_name))
		                <span>{{ Auth::user()->school_name }}</span>
		                @else
		                <span>لم يتم ادخال اسم المدرسه بعد ..</span>
		                @endif
	                  <h6>السنه الدراسيه</h6>
	                  @if(! empty($degree_name))
	                  <span>{{$degree_name}}</span>
	                  @else
	                  <span>لم يتم ادخال السنه الدراسيه بعد .. </span>
	                  @endif
	                </div>
	              </div>
	              <div class="gt-usser-account-list">
	                <ul>
	                  <li class="active"><a href="{{ url('/profile') }}"><i class="fa fa-user-circle-o gt-color"></i>الصفحه الشخصيه</a></li>
	                  <li><a href="/user/{{Auth::user()->id}}/courses"><i class="icon-book gt-color"></i>المقررات</a></li>
	                  <li><a href="/user/{{Auth::user()->id}}/classes"><i class="icon-clock-1 gt-color"></i>الجدول</a></li>
	                  <li><a href="/user/{{Auth::user()->id}}/favcourses"><i class="fa fa-heart gt-color"></i>المفضله</a></li>
	                  <li><a href="/user/{{Auth::user()->id}}/settings"><i class="icon-three gt-color"></i>تعديل حسابي</a></li>
                     @if(Auth::user()->hasRole('admin'))
                          <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> لوحه التحكم</a></li>
                        @endif
	                	{{-- logout form --}}
                       <li>
	                      <a href="{{ route('logout') }}"
	                        onclick="event.preventDefault();
	                          document.getElementById('logout-form').submit();" class="gt-logout">
	                          <i class="icon-arrows-2 gt-color"></i>
	                          خروج 
	                      </a>
	                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                        {{ csrf_field() }}
	                      </form>
                      </li>
                    </ul>
	              </div>
	            </div>
	          </div>
	          <!-- Dashboard Side Bar Wrap End -->
	          <!--Classes List Wrap Start-->
          <div class="col-md-8">
            <div class="gt_d_classes_wrap default_width wow slideInUp">
              <h4 class="gt_d_title">الجدول الدورات</h4>
              <div class="gt_classes_wrap">
                <table class="gt_classes_table">
                  <thead class="gt_table_head">
                    <tr >
                      <th>السبت<span class="open-date">12/05/2017</span></th>
                      <th>الاحد<span class="open-date">12/05/2017</span></th>
                      <th>الاثنين<span class="open-date">12/05/2017</span></th>
                      <th>الثلاثاء<span class="open-date">12/05/2017</span></th>
                      <th>الاربع<span class="open-date">12/05/2017</span></th>
                    </tr>
                  </thead>
                  <tbody class="gt_class_body_bg">
                    <tr>
                      <td>
                        <div class="card-container">
                          <div class="card">
                            <h4> <i class="fa fa-paint-brush"></i>جبر</h4>
                            <span class="open-time">9.00 ص - 10.30 ص</span>
                            <p class="instrutor">أستاذ: <span>رمضان</span></p>
                            <!-- <p>حجره: <span>24</span></p> -->
                            <p>المستوي: <span>الاول</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container">
                          <div class="card">
                            <h4><i class="fa fa-paint-brush"></i>احصاء</h4>
                            <span class="open-time">9.00 م - 10.30 م</span>
                            <p class="instrutor">أستاذ: <span>محمد</span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container">
                          <div class="card">
                            <h4><i class="fa fa-paint-brush"></i>انجليزي</h4>
                            <span class="open-time">9.00 م - 10.30 م</span>
                            <p class="instrutor">أستاذ: <span>أحمد </span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container ">
                          <div class="card">
                              <h4><i class="fa fa-paint-brush"></i>هندسه </h4>
                              <span class="open-time">9.00 م - 10.30 م</span>
                              <p class="instrutor">أستاذ : <span>سعد</span></p>
                              <!-- <p>Room: <span>24</span></p> -->
                              <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container">
                          <div class="card">
                            <h4><i class="fa fa-paint-brush"></i>كمياء</h4>
                            <span class="open-time">9.00 ص - 10.30 ص</span>
                            <p class="instrutor">أستاذ: <span>محمود</span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="empty_class_bg"></td>
                      <td>
                        <div class="card-container ">
                          <div class="card painting">
                            <h4><i class="fa fa-paint-brush"></i>كمياء</h4>
                            <span class="open-time">9.00 ص - 10.30 ص</span>
                            <p class="instrutor">أستاذ: <span>محمود</span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container">
                          <div class="card painting">
                            <h4><i class="fa fa-paint-brush"></i>هندسه </h4>
                              <span class="open-time">9.00 م - 10.30 م</span>
                              <p class="instrutor">أستاذ : <span>سعد</span></p>
                              <!-- <p>Room: <span>24</span></p> -->
                              <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td class="empty_class_bg"></td>
                      <td>
                        <div class="card-container ">
                          <div class="card painting">
                            <h4><i class="fa fa-paint-brush"></i>انجليزي</h4>
                            <span class="open-time">9.00 م - 10.30 م</span>
                            <p class="instrutor">أستاذ: <span>أحمد </span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="card-container">
                          <div class="card">
                            <h4><i class="fa fa-paint-brush"></i>احصاء</h4>
                            <span class="open-time">9.00 م - 10.30 م</span>
                            <p class="instrutor">أستاذ: <span>محمد</span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container">
                          <div class="card painting">
                            <h4><i class="fa fa-paint-brush"></i>هندسه </h4>
                              <span class="open-time">9.00 م - 10.30 م</span>
                              <p class="instrutor">أستاذ : <span>سعد</span></p>
                              <!-- <p>Room: <span>24</span></p> -->
                              <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container ">
                          <div class="card painting">
                            <h4><i class="fa fa-paint-brush"></i>عربي</h4>
                            <span class="open-time">9.00 ص - 10.30 ص</span>
                            <p class="instrutor">أستاذ: <span>محمود</span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container ">
                          <div class="card painting">
                            <h4><i class="fa fa-paint-brush"></i>فرنساوي</h4>
                            <span class="open-time">9.00 ص - 10.30 ص</span>
                            <p class="instrutor">أستاذ: <span>محمود</span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="card-container ">
                          <div class="card painting">
                            <h4><i class="fa fa-paint-brush"></i>كمياء</h4>
                            <span class="open-time">9.00 ص - 10.30 ص</span>
                            <p class="instrutor">أستاذ: <span>محمود</span></p>
                            <!-- <p>Room: <span>24</span></p> -->
                            <p>مستوي: <span>مبتدئ</span></p>
                          </div>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
                <div class="gt_table_small default_width">
                  <h3 class="header-small">Monday</h3>
                  <ul>
                      <li>
                          <a class="painting" href="#">Painting Art</a>
                          <p>9.00 am - 10.30 am</p>
                      </li>
                      <li>
                          <a class="dancing" href="#">Dancing</a>
                          <p>10.30 am - 12.00 pm</p>
                      </li>
                      <li>
                          <a class="english" href="#">English</a>
                          <p>12.00 pm - 15.00 pm</p>
                      </li>
                  </ul>
                  <h3 class="header-small">Tuesday</h3>
                  <ul>
                      <li>
                          <a class="painting" href="#">Painting Art</a>
                          <p>9.00 am - 10.30 am</p>
                      </li>
                      <li>
                          <a class="dancing" href="#">Dancing</a>
                          <p>10.30 am - 12.00 pm</p>
                      </li>
                      <li>
                          <a class="english" href="#">English</a>
                          <p>12.00 pm - 15.00 pm</p>
                      </li>
                  </ul>
                  <h3 class="header-small">Wednesday</h3>
                  <ul>
                      <li>
                          <a class="painting" href="#">Painting Art</a>
                          <p>9.00 am - 10.30 am</p>
                      </li>
                      <li>
                          <a class="dancing" href="#">Dancing</a>
                          <p>10.30 am - 12.00 pm</p>
                      </li>
                      <li>
                          <a class="english" href="#">English</a>
                          <p>12.00 pm - 15.00 pm</p>
                      </li>
                  </ul>
                  <h3 class="header-small">Thursday</h3>
                  <ul>
                      <li>
                          <a class="painting" href="#">Painting Art</a>
                          <p>9.00 am - 10.30 am</p>
                      </li>
                      <li>
                          <a class="dancing" href="#">Dancing</a>
                          <p>10.30 am - 12.00 pm</p>
                      </li>
                      <li>
                          <a class="english" href="#">English</a>
                          <p>12.00 pm - 15.00 pm</p>
                      </li>
                  </ul>
                  <h3 class="header-small">Friday</h3>
                  <ul>
                      <li>
                          <a class="painting" href="#">Painting Art</a>
                          <p>9.00 am - 10.30 am</p>
                      </li>
                      <li>
                          <a class="dancing" href="#">Dancing</a>
                          <p>10.30 am - 12.00 pm</p>
                      </li>
                      <li>
                          <a class="english" href="#">English</a>
                          <p>12.00 pm - 15.00 pm</p>
                      </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--Classes List Wrap End-->

	    </div> 
	  </section>
	</div>

@endsection     