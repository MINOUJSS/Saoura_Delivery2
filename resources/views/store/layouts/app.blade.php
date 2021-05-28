<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{url('store/img')}}/logo3.png">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>الساورة دليفري</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{url('store')}}/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="{{url('store')}}/css/rtl_bootstrap.css" />
	
	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{url('store')}}/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="{{url('store')}}/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{url('store')}}/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{url('store')}}/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cairo:600&display=swap" rel="stylesheet">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{url('store')}}/css/style.css" />
	<link type="text/css" rel="stylesheet" href="{{url('store')}}/css/my_style.css" />
	<link type="text/css" rel="stylesheet" href="{{url('store')}}/css/starrr.css" />
	<!-- sweet alert link-->
    <script src="{{url('vendor')}}/sweetalert/sweetalert.all.js"></script>    		
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	@yield('header')
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	@yield('navigation')
	<!-- /NAVIGATION -->

@yield('content')

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="{{url('store')}}/img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>تابعونا على وسائل التواصل الإجتماعي</p>

						<!-- footer social -->
						<ul class="footer-social">
							@if(has_facebook())
							<li><a href="{{get_facebook_data()->value}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
							@endif
							@if(has_youtube())
							<li><a href="{{get_youtube_data()->value}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
							@endif
							@if(has_instagram())
							<li><a href="{{get_instagram_data()->value}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
							@endif
							{{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li> --}}
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">أقسام المتجر</h3>
						<ul class="list-links">							
							@foreach(get_all_categories() as $index => $category)
							<li><a href="{{url('products/category/'.$category->name)}}">{{$category->name}}</a></li>	
							@endforeach							
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">خدمة الزبائن</h3>
						<ul class="list-links">
							<li><a href="{{route('about_as')}}">من نحن</a></li>
							<li><a href="{{route('contra')}}">سياسة خصوصية</a></li>
							<li><a href="{{route('how_to_ship')}}">طريقة تسليم الطلبات</a></li>
							<li><a href="{{route('contact_us')}}">إتصل بنا</a></li>
							<li><a href="{{route('faq')}}">أسئلة شائعة</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->
				@if(!Auth::guard('consumer')->check())
				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">إبقى في إتصال معنا</h3>
						<p>سجل في القائمة البريدية للمتجر ليصلك كل جديد عن العروض المغرية لمتجرنا في ولاية بشار.</p>
						<form action="{{route('email_list.store')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="form-group {{$errors->has('email')? 'has-error': ''}}">
								<input class="form-control" name="email" placeholder="بريدك الإلكتروني">
								@if($errors->has('email'))
								<span class="help-block">
									{{$errors->first('email')}}
								</span>
								@endif
							</div>
							<button class="primary-btn"> سجل </button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
				@else 
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">حسابي</h3>
						<ul class="list-links">							
							<li><a href="{{route('consumer.dashboard',Auth::guard('consumer')->user()->id)}}">حسابي</a></li>
							<li><a href="{{route('consumer.wish_list')}}">قائمة المفضلة</a></li>
							<li><a href="{{route('consumer.compar_list')}}">قائمة المقارنة</a></li>
							<li><a href="{{route('checkout')}}">الدفع</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->
				@endif
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-12 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						{{-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> --}}
						  جميع الحقوق محفوظة لموقع <a href="{{url('/')}}"> ساورة دليفري</a> &copy;<script>document.write(new Date().getFullYear());</script>| تم عمل هذا القلب بـ <i class="fa fa-heart-o" aria-hidden="true"></i> من طرف <a href="https://colorlib.com" target="_blank">كولرليب</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{url('store')}}/js/jquery.min.js"></script>
	<script src="{{url('store')}}/js/bootstrap.min.js"></script>
	<script src="{{url('store')}}/js/slick.min.js"></script>
	<script src="{{url('store')}}/js/nouislider.min.js"></script>
	<script src="{{url('store')}}/js/jquery.zoom.min.js"></script>
	<script src="{{url('store')}}/js/main.js"></script>
	<script src="{{url('store')}}/js/My_function.js"></script>
	<script src="{{url('store')}}/js/starrr.js"></script>	
	<!--ckeditor-->
    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script>CKEDITOR.replace('article-ckeditor');</script>
	<script>
		$(function(){																					
			// 

   //
			var pathname=document.location.pathname.toString();
			var path_array=document.location.pathname.split('/');
            var cat_or_sub_cat_name=path_array[path_array.length-1];
			
			if(pathname =='/' || pathname =='/products' || pathname =='/products/search' || pathname =='/consumer/wish-list' || pathname =='/consumer/compar-list' || pathname =='/products/category/'+cat_or_sub_cat_name || pathname =='/products/sub-category/'+cat_or_sub_cat_name || pathname =='/products/sub-sub-category/'+cat_or_sub_cat_name)
			{
				//products		
				var product_ratings=document.getElementsByName('products_ratings');
			for(var b=0 ;b<=product_ratings.length-1; b++)
			{
				$('.product-star-'+b).starrr({
				readOnly:true,
				rating:product_ratings[b].getAttribute('data-rating')
			    });
			}
			//sid products				
			var product_ratings=document.getElementsByName('sid_products_ratings');
			for(var b=0 ;b<=product_ratings.length-1; b++)
			{
				$('.sid-product-star-'+b).starrr({
				readOnly:true,
				rating:product_ratings[b].getAttribute('data-rating')
			    });
			}
			//piked for you products
			var product_ratings=document.getElementsByName('piked_products_ratings');
			for(var b=0 ;b<=product_ratings.length-1; b++)
			{
				$('.piked-product-star-'+b).starrr({
				readOnly:true,
				rating:product_ratings[b].getAttribute('data-rating')
			    });
			}
			}else{
			//get product ratings
			var product_rating=document.getElementById('product_ratings');
			$('.product-star').starrr({
				readOnly:true,
				rating:product_rating.getAttribute('data-rating')
			});
			//get consumer rating
			var consumers_ratings = document.getElementsByName('consumer_rating');
			for(var a=0; a < consumers_ratings.length;a++)
			{
				$('.consumer-star-'+a).starrr({
				readOnly:true,
				rating:consumers_ratings[a].getAttribute('data-rating')
			    });					
			}						
			//put star rating in hidenn input
			$('.put-stars').starrr();		
			$('.put-stars').on('starrr:change', function(e, value){
              alert('new rating is ' + value)
            })

			}			
		});
	</script>
	<!--incloud sweet alert script-->
	@include('sweetalert::alert')
</body>

</html>
