@extends('layouts.app')
@section('content')

	<!--Sub Banner Wrap Start -->
	<div class="gt_sub_banner_bg default_width">
	    <div class="container">
	        <div class="gt_sub_banner_hdg  default_width">
	            <h2>مقرراتى </h2>
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
	            <li><a href="#">المقررات</a></li>
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
	                 		<img src="{{Auth::user()->profile_image}}"/>
	                    @else
	                       <img src="{{asset('theme/extra-images/profile-img-01.jpg')}}" />
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
        <div class="gt_d_classes_wrap default_width mb20">
        	<h4 class="gt_d_title">المقررات </h4>
	         @if(count($user_subjects) > 0)
		        @foreach($user_subjects as $subject)
		          <div class="gt_d_courses_wrap default_width  
	           			mb20 wow slideInUp">
                <figure>
                  <img src="{{$subject->image}}" alt="">
                  <figcaption class="gt_listing_rating">
                    مدفوع
                  </figcaption>
                </figure>
                <div class="gt_d_classes_des">
                  <h4><a href="/subject/{{$subject->id}}/view">{{$subject->name}}</a></h4>
                  <ul>
                    <li>
                      <ul class="gt_rating_star">
                        <li>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                          <a href="#"><i class="fa fa-star"></i></a>
                        </li>
                      </ul>
                    </li>
                    <li>شاهد الدوره - تنتهي: {{$subject->end_data}}</li>
                  </ul>
                  <p>{{$subject->description}} </p>
                </div>
                </div>
		        @endforeach
	          @else
	                <h4><a href="#">إنت غير مشترك فى مقررات حتى اﻷن </a>
	                </h4>   		
	          @endif

        </div>
        </div>

        </div>
      </section>
     </div>
@endsection