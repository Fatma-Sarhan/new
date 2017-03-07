@extends('layouts.app')
@section('content')

	<!--Sub Banner Wrap Start -->
	<div class="gt_sub_banner_bg default_width">
	    <div class="container">
	        <div class="gt_sub_banner_hdg  default_width">
	            <h2>الصفحه الشخصيه</h2>
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
	            <li><a href="#">تعديل الملف الشخصي</a></li>
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

          <div class="col-md-8 wow slideInUp">
           {{-- Edit profile form --}}
           	<form  method='POST' action = "/user/{{Auth::user()->id}}/settings" enctype="multipart/form-data">
	            {{method_field('PATCH')}}
	            {{ csrf_field() }}
	            <input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="gt_d_classes_wrap default_width mb20">
	              <div class="row">
	                <div class="col-md-12">
	                  <h4 class="gt_d_title">تعديل الملف</h4>
	                  <div class="gt_d_upload_photo default_width">
	                    <div class="gt_d_upload_area default_width">
	                      <span>
	                      <label for="file-1" class="upload_label"><i class="fa fa-camera"></i> </label>
	                        <input type="file" name="image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="">
                      
	                        {{-- {{Auth::user()->profile_image}} --}}
	                      </span>
	                      <p class="gt_d_download_icon">
	                       <i class="fa fa-upload"></i>
	                      </p>
	                       
	                    </div>
	                    <span>اكبر حجم للملف : <em>10.00 MB</em></span>
	                    <span>المقاس: <em>370x377</em></span>
	                    <span>الامتداد:  <em>JPG,JPEG,PNG,GIF</em></span>
	                  </div>
	                </div>
	              </div>
	              <h4 class="gt_d_title">البيانات الشخصيه</h4>
	              <div class="gt_d_profile_setting default_width">
	                <div class="row">
	                  <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                      <input class="c_ph" type="text" value= "{{Auth::user()->name}}" name="name" placeholder="اسم المستخدم: {{Auth::user()->name}}">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                      <input class="c_ph" type="text" name="full_name" value="{{Auth::user()->full_name}}" placeholder="اﻷسم الكالمل :  {{Auth::user()->full_name}}">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                      <input class="c_ph" type="email" name="email" value="{{Auth::user()->email}}" placeholder="البريد :{{Auth::user()->email}}">
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                    @if(!empty (Auth::user()->address))
	                      <input class="c_ph" type="text" name="address" value="{{Auth::user()->address}}" placeholder="العنوان : {{Auth::user()->address}}">
	                    @else
	                      <input class="c_ph" type="text" name="address" placeholder="العنوان : أدخل عنوانك">

	                    @endif
	                    </div>
	                  </div>
	                  {{-- <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                      <input class="c_ph" type="text" placeholder="عنوان الاول :">
	                    </div>
	                  </div> --}}
	                  {{-- <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                      <input class="c_ph" type="text" placeholder="العنوان 2:">
	                    </div>
	                  </div> --}}
	                  {{-- <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                      <input class="c_ph" type="text" placeholder="تاريخ الميلاد">
	                    </div>
	                  </div> --}}
	                  <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                    @if(! empty(Auth::user()->school_name))
	                      <input class="c_ph" type="text" name="school" value="{{Auth::user()->school_name}}" placeholder="اسم المدرسة : {{Auth::user()->school_name}}">
	                      @else
	                      <input class="c_ph" type="text" name="school" placeholder="اسم المدرسة : لم يتم ادخال اسم المدرسه بعد  ">
	                      @endif
	                    </div>
	                  </div>
	                  <div class="col-md-6">
	                    <div class="gt_privacy_field default_width mb20">
	                      <select class="gt_d_privacy_dd" name="degree">
	                       @if(! empty($degree_name))
		                   <option value="{{$degree_name}}">{{$degree_name}}</option>
		                   @else
		                   <option value="">اختر السنه الدراسية</option>
		                   @endif
		                   @foreach($degrees as $degree)
		                      <option value="{{$degree->name}}">{{$degree->name}}</option>
		                    @endforeach    
	                       </select>
	                  
	                    </div>
	                  </div>
	                </div>
	              </div>

	              <div class="gt_d_scl_setting default_width">
	                
	                <div class="row">
	               
	                  <div class="col-md-6">
	                    <div class="gt_privacy_field default_width">
	                      <input type="submit" value="تعديل">
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
            </form>
             {{-- End Edit profile from --}}
          </div>
          <!--Classes List Wrap End-->
          	  
        </div>
	    {{-- Container div end --}}
      </section>
   </div>


@endsection