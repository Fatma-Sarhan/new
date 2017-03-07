@extends('layouts.app')

@section('content')

	<!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h2>مرحبا بك في موقعنا </h2>
                <h6>كيفيه الدفع</h6>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->
    <!--Breadcrumb Wrap Start -->
    <div class="gt_breadcrumb_bg default_width">
      <div class="container">
        <div class="gt_breadcrumb_wrap default_width">
            <ul>
                <li><a href="#">الرئيسيه</a></li>
                <li><a href="#">مساعده</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap container">
    	<h3 class="text-center col-md-6 col-md-offset-3 col-xs-12 header-text">كيفية الدفع للحصول على المصادر التعليمية الخاصة بـ "مكتبة استاذي لاب" الإلكترونية</h3>
    	<section id="cd-timeline" >
		    <div class="cd-timeline-block">
		      <div class="cd-timeline-img cd-picture">
		        <img src="{{asset('theme/extra-images/cd-icon-picture.svg')}}" alt="credit">
		      </div> <!-- cd-timeline-img -->

		      <div class="cd-timeline-content panel panel-default">
		        <h4 class="panel-heading">1. قم بشراء كارت الخدش الخاص باستاذي من أقرب منفذ بيع</h4>
		        <p  class="panel-body credit-1"><img src="{{asset('theme/extra-images/cd-credit icon.svg')}}" class="svg-2x"></p>
		      </div> <!-- cd-timeline-content -->
		    </div> <!-- cd-timeline-block -->
		    <div class="cd-timeline-block">
		      <div class="cd-timeline-img cd-movie">
		        <img src="{{asset('theme/extra-images/cd-icon-picture.svg')}}" alt="credit">
		      </div> <!-- cd-timeline-img -->

		      <div class="cd-timeline-content  panel panel-default">
		        <h4 class="panel-heading">2. أدخل الكود السري الذي يتكون من 14 رقمًا في الحقل الموضح في منصة "استاذي لاب"، لتحميل المصادر التعليمية الإلكترونية.</h4>
		        <p class="panel-body"><img src="{{asset('theme/extra-images//profile.png')}}" class="img-responsive profile-img"></p>
		      </div> <!-- cd-timeline-content -->
		    </div> <!-- cd-timeline-block -->
		    <div class="cd-timeline-block">
		      <div class="cd-timeline-img cd-location">
		        <img src="{{asset('theme/extra-images/cd-icon-picture.svg')}}" alt="credit">
		      </div> <!-- cd-timeline-img -->

		      <div class="cd-timeline-content panel panel-default">
		        <h4 class="panel-heading">إذا كنت تُفضل الدفع باستخدام أحد أساليب الدفع المتوفرة عبر الإنترنت الأخرى</h4>
		        <div class="panel-body">
		          <ol class="list col-xs-8">
		          <li>قم باضافة المصادر التعليمية التي تود في شرائها الي السلة الخاصة بك.</li>
		          <li >قم بمراجعة الطلب الخاص بك، ثم انتقل الي اختيار طريقة الدفع.</li>
		          <li >سوف تظهر لك بيانات العملية واجمالي المشتريات بالريال السعودي.</li>
		          <li >اقرأ الشروط والأحكام ثم اختر "أوافق على الشروط والأحكام المذكورة أعلاه".</li>
		          <li >اضغط على الزر الخاص باتمام عملية الشراء.</li>
		          <li >ستجد المنتجات قد تم اضافتها الي مشترياتك ويمكنك فتح التطبيق وتحميلها.</li>
		        </ol>
		        <div class="col-xs-4">
		          <img src="{{asset('theme/extra-images/payment.png')}}" class="img-responsive payment-img">
		        </div>
		        </div>
		      </div> <!-- cd-timeline-content -->
		    </div> <!-- cd-timeline-block -->
		    <div class="cd-timeline-block">
		      <div class="cd-timeline-img cd-movie">
		        <img src="{{asset('theme/extra-images/cd-icon-picture.svg')}}" alt="credit">
		      </div> <!-- cd-timeline-img -->

		      <div class="cd-timeline-content panel panel-default">
		        <h4 class="panel-heading">إذا كنت تريد الدفع باستخدام فيزا/ماستر كارد (Visa/Master Card)</h4>
		         <div class="panel-body">
		          <ol class="list col-xs-8">
		          <li>افتح صفحة البنك، ثم اضغط على "دفع".</li>
		          <li >بعد إدخال تفاصيل البطاقة ستتم إعادة توجيهك إلى صفحة إتمام العملية بنجاح؛ حيث ستجد بها "الكود السرى" و"الرقم المسلسل" الخاص بك.</li>
		          <li >أدخل الكود فى الحقل الموضح فى منصة "استاذي لاب"؛ لزيادة رصيدك وشراء المصادر التعليمية التي تود شرائها.</li>
		        </ol>
		        <div class="col-xs-4">
		          <img src="{{asset('theme/extra-images/aaib-visa-mcard.png')}}" class="img-responsive payment-img">
		        </div>
		        </div>
		      </div> <!-- cd-timeline-content -->
		    </div> <!-- cd-timeline-block -->
		    <div class="cd-timeline-block">
		      <div class="cd-timeline-img cd-picture">
		        <img src="{{asset('theme/extra-images/cd-icon-picture.svg')}}" alt="credit">
		      </div> <!-- cd-timeline-img -->

		      <div class="cd-timeline-content panel panel-default">
		        <h4 class="panel-heading">الدفع باستخدام "وان كارد" One Card</h4>
		        <div class="panel-body">
		          <ol class="list col-xs-8">
		          <li>فى صفحة تسجيل الدخول على "وان كارد" أدخل بيانات اعتمادك، ثم اضغط على "دفع".</li>
		          <li >عند سؤالك لتأكيد العملية بعد تسجيل الدخول، أكد الدفع بالضغط على خيار الموافقة "نعم".</li>
		          <li >بعد الموافقة، ستتم إعادة توجيهك إلى صفحة إتمام العملية بنجاح، حيث ستجد بها "الكود السرى" و"الرقم المسلسل" الخاص بك.</li>
		          <li >أدخل الكود فى الحقل الموضح فى منصة "استاذي لاب"؛ لزيادة رصيدك وشراء المصادر التعليمية التي تود شرائها.</li>
		        </ol>
		        <div class="col-xs-4">
		          <img src="{{asset('theme/extra-images/onecard.png')}}" class="img-responsive payment-img">
		        </div>
		        </div>
		      </div> <!-- cd-timeline-content -->
		    </div> <!-- cd-timeline-block -->
  		</section> <!-- cd-timeline -->
  		<section class="wow fadeInUp container">
  			<div class="panel-group" id="accordion">
  				<div class="panel panel-default">
    				<div class="panel-heading">
				      <h4 class="panel-title text-center">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" >
				        أين تجد بطاقة الشحن الخاصة بـ"استاذي" ؟</a>
				      </h4>
    				</div>
    				<div id="collapse1" class="panel-collapse collapse in">
	      				<div class="panel-body">
					        <table  class="table table-bordered table-striped table-hover data-table">
							    <thead>
							      <tr>
							        <th>المنطقة</th>
							        <th>العنوان</th>
							        <th>الهاتف</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>خميس مشيط </td>
							        <td>الواحة سنتر، طريق الملك فهد، خميس مشيط  </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الأحساء</td>
							        <td>شارع الظهران، الهفوف  </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الأحساء</td>
							        <td>شارع عين نجم، الأحساء   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الخبر</td>
							        <td>شارع الأمير تركي، طريق الكورنيش، الخبر   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الخبر </td>
							        <td>مجمع الراشد، شارع فراس بن النضر، الخبر    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الدمام  </td>
							        <td>طريق علي بن أبي طالب، الدمام   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الدمام  </td>
							        <td>طريق الخليج بعد دوار الصدفة، حي الزهور   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الظهران</td>
							        <td>طريق الأمير فيصل بن فهد، الظهران    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الجبيل</td>
							        <td>مركز الحويلات، شارع الحويلات، الجبيل   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>حائل</td>
							        <td>الطريق الدائري، الشمالى حي الزهراء    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>جازان</td>
							        <td>طريق الكورنيش الشمالي، جازان   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>طريق المدينة المنورة، البديعة، الرياض   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>طريق الملك عبدالله، حي الحمراء، مخرج 10، الرياض    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>طريق الملك عبدالعزيز، الحياة مول، الرياض   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>طريق الدائري الشمالي، حي النفل، مخرج 5، الرياض    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>طريق الدائري الجنوبي، حي شبرا، مخرج 25، الرياض    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>شارع التخصصي، مجمع بانوراما، الرياض   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>طريق عمر بن عبدالعزيز، حي الربوة، الرياض     </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>شارع الإحساء، حي الملز، الرياض    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>طريق خريص، حي الريان، مخرج 13، الرياض      </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>الرياض</td>
							        <td>طريق عثمان بن عفان تقاطع الثمامة - حي النرجس، الرياض     </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>المدينة المنورة </td>
							        <td>شارع أبو بكر الصديق، (بجوار مسجد القبلتين)، المدينة المنورة  </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>ينبع </td>
							        <td>شارع علي بن أبي طالب، ينبع   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>جدة  </td>
							        <td>الجامعة بلازا، مجمع الجامعة    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>جدة  </td>
							        <td>شارع الأمير سلطان، حي المحمدية، جدة    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>جدة  </td>
							        <td>شارع الأمير محمد بن عبدالعزيز، حي الرحاب، جدة   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>جدة  </td>
							        <td>شارع صاري، حي السلامة، جدة    </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>جدة  </td>
							        <td>شارع فلسطين، حي بني مالك، جدة   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							        <td>جدة  </td>
							        <td>طريق الأمير ماجد، حي الصفا، جدة  </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							      <td>مكة المكرمة   </td>
							        <td>شارع الملك فيصل (السيل سابقاً)، بجوار ديوان المظالم، مكة المكرمة   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							      <td>مكة المكرمة   </td>
							        <td>اسواق الحجاز، طريق مكة جدة   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							      <td>القصيم </td>
							        <td>مجمع عنيزة، عنيزة، القصيم   </td>
							        <td>920000089</td>
							      </tr>
							      <tr>
							      <td>بريدة  </td>
							        <td>طريق عثمان بن عفان، بريدة، القصيم  </td>
							        <td>920000089</td>
							      </tr>
							    </tbody>
					  		</table>
	      				</div>
    				</div>
  				</div>
				<div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title text-center">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
				        موزعي بطاقات ون كارد
						</a>
				      </h4>
				    </div>
				    <div id="collapse2" class="panel-collapse collapse">
				      <div class="panel-body">
				       	<table class="table table-bordered table-striped table-hover data-table">
				        	<thead>
					            <tr>
					              <th>المنطقة</th>
					              <th>العنوان</th>
					              <th>الهاتف</th>
					            </tr>
				            </thead>
				          	<tbody>
					          	<tr>
					            <td>الحداد للاتصالات</td>
					            <td>http://www.al-haddad.com طريق الكورنيش سوق الجوالات, جازان, السعودية</td>
					            <td>920009977</td>
					            </tr>
					             <tr>
					               <td>بنده</td>
					               <td>شارع عمر بن الخطاب, ابقيق, السعودية</td>
					               <td>920027707</td>
					             </tr>
					              <tr>
					                <td>فيا ستور</td>
					                <td>شارع الملك سعود مع شارع الظهران, الهفوف, الإحساء, السعودية</td>
					                <td></td>
					              </tr>
					              <tr>
					                <td>مركز دان للتسويق</td>
					                <td>الأحساء-حي المبرز-النزهه-شارع بوسحبل-بالقرب من ثانويه المدينه المنوره, المبرز, الإحساء, السعودية</td>
					                <td>035303770</td>
					             </tr>
					              <tr>
					                <td>كونكت للإتصالات</td>
					                <td>المبرز-الرشيديه العام -بالقرب من بنك ساب, المبرز, الإحساء, السعودية</td>
					                <td>035304757</td>
					              </tr>
					              <tr>
					               <td>ميد 63040</td>
					                <td>ش. الظهران. المبرز , المبرز, الإحساء, السعودية</td>
					                 <td>035314506</td>
					                </tr>
					                <tr>
					                  <td>أنتر تك لخدمات الحاسب الآلي</td>
					                  <td>الخرس - مقابل مدرسه الفرزدق الإبتدائية, المبرز, الإحساء, السعودية</td>
					                  <td>035310015</td>
					                </tr>
					                <tr>
					                  <td>مكتبة جرير</td>
					                  <td>شارع الظهران - بجانب مبنى نيوهورايزون, المبرز, الإحساء, السعودية</td>
					                   <td>035311501</td>
					                </tr>
					                <tr>
					                  <td>ميد 63038</td>
					                  <td>ش. الريل. الهفوف , الهفوف, الإحساء, السعودية</td>
					                  <td>035843601</td>
					                </tr>
					                <tr>
					                  <td>مكتبة جرير</td>
					                  <td>شارع عين نجم، دوار السلام, الإحساء, السعودية</td>
					                  <td>5622440</td>
					                </tr>
					                <tr>
					                  <td>ميد 63039</td>
					                  <td>الهفوف - شارع المزروعيه, الهفوف, الإحساء, السعودية</td>
					                  <td>035851875</td>
					                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>شارع النجم ، جوار محطة القطار, الإحساء, السعودية</td>
	                                    <td>920027707</td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>شارع الظهران, المبرز, الإحساء, السعودية</td>
	                                    <td>920027707</td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>النخيل بلازا طريق الرياض, الهفوف, الإحساء, السعودية</td>
	                                    <td>920027707</td>
	                                </tr>
	                                <tr>
	                                    <td>الحداد للاتصالات</td>
	                                    <td>شارع الماجد - سوق الفيصلية http://www.al-haddad.com/, الإحساء, السعودية</td>
	                                    <td>920009977</td>
	                                </tr>
	                                <tr>
	                                    <td>كيوب 3</td>
	                                    <td>شارع الماجد - سوق الفيصلية, الإحساء, السعودية</td>
	                                    <td>920009977</td>
	                                </tr>
	                                <tr>
	                                    <td>أيفون سنتر</td>
	                                    <td>شارع الجوالات مقابل مستوصف الوطني, الإحساء, السعودية</td>
	                                    <td>0135333492</td>
	                                </tr>
	                                <tr>
	                                    <td>أيفون سنتر</td>
	                                    <td>اسواق المزرعة ( المزروع ) , الإحساء, السعودية</td>
	                                    <td>0135888803</td>
	                                </tr>
	                                <tr>
	                                    <td>أيفون سنتر</td>
	                                    <td>شارع عين النجم محاسن , الإحساء, السعودية</td>
	                                    <td>0135999449</td>
	                                </tr>
	                                <tr>
	                                    <td>أيفون سنتر</td>
	                                    <td>المبرز شارع المدينة المنورة , الإحساء, السعودية</td>
	                                    <td>0135364666</td>
	                                </tr>
	                                <tr>
	                                    <td>أيفون سنتر</td>
	                                    <td>شارع الملك خالد, الهفوف, الإحساء, السعودية</td>
	                                    <td>0135344443</td>
	                                </tr>
	                                <tr>
	                                    <td>الحداد للاتصالات</td>
	                                    <td>http://www.al-haddad.com شارع الملك عبدالله, محايل عسير , السعودية</td>
	                                    <td>920009977</td>
	                                </tr>
	                                <tr>
	                                    <td>كمبيونت</td>
	                                    <td>حي الياسمين - ش. الملك فهد - مقابل المستوصف, الخبراء, السعودية</td>
	                                    <td>063553030</td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>شارع ابوبكر الصديق , البدائع, السعودية</td>
	                                    <td>920027707</td>
	                                </tr>
	                                <tr>
	                                    <td>يو اس بي للكمبيوتر </td>
	                                    <td>الخالدية - شارع الثلاثين - بجوار مستوصف العالمي للاسنان, الإسكندرية , السعودية</td>
	                                    <td>0115447550</td>
	                                </tr>
	                                <tr>
	                                    <td>مكتبة جرير</td>
	                                    <td>شارع علي بن ابي طالب ، مقابل ينبع مول, ينبع, السعودية</td>
	                                    <td></td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>طريق الملك فهد, ينبع, السعودية</td>
	                                    <td>920027707</td>
	                                </tr>
	                                <tr>
	                                    <td>مؤسسة دروب المعرفة للحاسبات</td>
	                                    <td>مقابل مسجد عمر بن الخطاب , البلد, ينبع, السعودية</td>
	                                    <td>0143224602</td>
	                                </tr>
	                                <tr>
	                                    <td>دار الكمبيوتر </td>
	                                    <td>شارع النواه - بجانب سابتكو للنقل الجماعي , الصناعية, ينبع, السعودية</td>
	                                    <td>043250807</td>
	                                </tr>
	                                <tr>
	                                    <td>المطر للكمبيوتر </td>
	                                    <td>طريف, طريف, السعودية</td>
	                                    <td>0503385471</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 62041</td>
	                                    <td>ش. حسان بن ثابت ، محطة نفط للبترول, اليمانية, الطائف, السعودية</td>
	                                    <td>027322006</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 62030</td>
	                                    <td>ش. الغزالي ، محطة نفط للبترول, الشهداء الشمالي, الطائف, السعودية</td>
	                                    <td>027426931</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 62028</td>
	                                    <td>ش. التلفزيون. جنوب الشهداء, الشهداء الشمالي, الطائف, السعودية</td>
	                                    <td>027454185</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 62040</td>
	                                    <td>ش. شبرا. الطائف , مركز شبرا, الطائف, السعودية</td>
	                                    <td>027431923</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 62075</td>
	                                    <td>حي ام العراد. طريق الشفا داخل التنوير للبترول , شفا, الطائف, السعودية</td>
	                                    <td>027442460</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 62031</td>
	                                    <td>ش. الغزالي ، محطة نفط للبترول, الفيصلية, الطائف, السعودية</td>
	                                    <td>027360430</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 62033</td>
	                                    <td>ش. حسان بن ثابت ، محطة نفط للبترول, اليمانية, الطائف, السعودية</td>
	                                    <td>027383846</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 62080</td>
	                                    <td>طريق الملك خالد, مركز شبرا, الطائف, السعودية</td>
	                                    <td>027422982</td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>المليكا مول, الطائف, السعودية</td>
	                                    <td>920027707 </td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>شارع حسان بن ثابت, الشهداء الشمالي, الطائف, السعودية</td>
	                                    <td>920027707 </td>
	                                </tr>
	                                <tr>
	                                    <td>الحداد للاتصالات</td>
	                                    <td>http://www.al-haddad.com  شارع شهار, الطائف, السعودية</td>
	                                    <td>920009977</td>
	                                </tr>
	                                <tr>
	                                    <td>المركز السعودي للكمبيوتر</td>
	                                    <td>ش. الجيش ، مركز شبرا, مركز شبرا, الطائف, السعودية</td>
	                                    <td>0555707479</td>
	                                </tr>
	                                <tr>
	                                    <td>كيوب 3</td>
	                                    <td>حي شهار - شارع شهار - مركز الطائف مول , الطائف, السعودية</td>
	                                    <td>920009977</td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>طريق الملك عبد العزيز, العليا, تبوك, السعودية</td>
	                                    <td>920027707</td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>طريق الامام عبد الرحمن ، اسواق البلاد, تبوك, السعودية</td>
	                                    <td>920027707</td>
	                                </tr>
	                                <tr>
	                                    <td>الحداد للاتصالات</td>
	                                    <td>http://www.al-haddad.com  شارع المحكمه  مجمع دانه تبوك, تبوك, السعودية</td>
	                                    <td>920009977</td>
	                                </tr>
	                                <tr>
	                                    <td>الحداد للاتصالات</td>
	                                    <td>http://www.al-haddad.com  طريق المطار بجوار فندق المروج, تبوك, السعودية</td>
	                                    <td>920009977</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 63023</td>
	                                    <td>ش. الكونيش ، قرب مخازن التوفير, الكورنيش, سيهات, السعودية</td>
	                                    <td>038370096</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 63045</td>
	                                    <td>ش. الخليج . سيهات , سيهات, السعودية</td>
	                                    <td></td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 63033</td>
	                                    <td>ش. الملك عبد العزيز. ابو سعود , أبو سعود , سيهات, السعودية</td>
	                                    <td>038507303</td>
	                                </tr>
	                                <tr>
	                                    <td>الحداد للاتصالات</td>
	                                    <td>http://www.al-haddad.comمركز الخواجى  الشارع الملك عبدالعزيز بجوار الكوبرى, صبيا, السعودية</td>
	                                    <td>920009977</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 63025</td>
	                                    <td>ش. أم الساهك ، قرب محطة التسهيلات للبترول, المجيدية, صفوى, السعودية</td>
	                                    <td>036646461</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 63024</td>
	                                    <td>ش. الرئيسي ، قرب بنك الرياض, النادي, صفوى, السعودية</td>
	                                    <td>036646462</td>
	                                </tr>
	                                <tr>
	                                    <td>مكتبة اليوسف</td>
	                                    <td>ش النعمان بن بشير // ش بلال بن رباح بالقرب من المدرسة المتوسطة للبنات , مدينة العمال   , صفوى, السعودية</td>
	                                    <td>036644957</td>
	                                </tr>
	                                <tr>
	                                    <td>مكتبة شعلة بلادي </td>
	                                    <td>طريق الامام سعود قرب مستوصف عاليه, اليرموك , الرياض, السعودية</td>
	                                    <td>01-2492118</td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>غرب مستفى الرياض المركزي(الشميسي), الشميسي, الرياض, السعودية</td>
	                                    <td>920027707 </td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>قرب محطة التلفزيون, الخزان, الرياض, السعودية</td>
	                                    <td>920027707 </td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>شارع عائشة  قرب كنتاكي , البديعة, الرياض, السعودية</td>
	                                    <td>920027707 </td>
	                                </tr>
	                                <tr>
	                                    <td>بنده</td>
	                                    <td>الدائري الغربي مخرج 24, شبرا, الرياض, السعودية</td>
	                                    <td>920027707 </td>
	                                </tr>
	                                <tr>
	                                    <td>صن كافيه</td>
	                                    <td>طريق الملك فهد -داخل اسواق التميمي , العليا, الرياض, السعودية</td>
	                                    <td></td>
	                                </tr>
	                                <tr>
	                                    <td>فيا ستور</td>
	                                    <td>طريق الملك عبد الله امام الممشى -الجهه الغربية امام البوابة النسائية لكلية التقنية, المصيف, الرياض, السعودية</td>
	                                    <td>114507014</td>
	                                </tr>
	                                <tr>
	                                    <td>فيا ستور</td>
	                                    <td>طريق التحلية بجوار لوكاليزر مول , العليا, الرياض, السعودية</td>
	                                    <td>112886232</td>
	                                </tr>
	                                <tr>
	                                    <td>فيا ستور</td>
	                                    <td>طريق الامير تركى -مخرج 2 داخل مجمع المطاعم بجوار صب واى , النخيل, الرياض, السعودية</td>
	                                    <td>011-2070827</td>
	                                </tr>
	                                <tr>
	                                    <td>فيا ستور</td>
	                                    <td>شارع التحلية - قرب سيدار, العليا, الرياض, السعودية</td>
	                                    <td>1146472171</td>
	                                </tr>
	                                <tr>
	                                    <td>فيا ستور</td>
	                                    <td>طريق خريص - مقابل الجميح, الاندلس, الرياض, السعودية</td>
	                                    <td>112323531</td>
	                                </tr>
	                                <tr>
	                                    <td>فيا ستور</td>
	                                    <td>شارع الترمذي - مقابل مصلى العيد, الشفا, الرياض, السعودية</td>
	                                    <td>112012206</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 61002</td>
	                                    <td>ش. فيصل بن تركي ، محطة نفط للبترول, الشميسي, الرياض, السعودية</td>
	                                    <td>014032719</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 61003</td>
	                                    <td>ش. الخرج ، مقابل محطة نفط للبترول, خنشليلة, الرياض, السعودية</td>
	                                    <td>014462917</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 61009</td>
	                                    <td>ش. السويدي العام ، مقابل ماكدونالدز, السويدي, الرياض, السعودية</td>
	                                    <td>012670054</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 61010</td>
	                                    <td>ش. الأمير سطام بن عبد العزيز ، قرب بيتزا هت, الشميسي, الرياض, السعودية</td>
	                                    <td>014410685</td>
	                                </tr>
	                                <tr>
	                                    <td>ميد 61013</td>
	                                    <td>ش. الأبراج ، مقابل مركز نيوهورايزن, السويدي, الرياض, السعودية</td>
	                                    <td>014240848</td>
	                                </tr>
	                                </tbody>
	                                <tfoot>
	                                    <tr>
	                                        <td colspan="3" class="text-center"><a href="#" target="_blank" class="btn btn-primary pull-right">المزيد</a></td>
	                                    </tr>
				                    </tfoot>
				                </table>
				      </div>
				    </div>
				</div>
			</div>
  		</section>
    </div>
    <!--Main Content Wrap End-->
@endsection