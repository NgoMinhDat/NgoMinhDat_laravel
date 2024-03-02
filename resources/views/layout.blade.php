<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">   
    <link rel="shortcut icon" href="public/frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><i class="fa fa-phone">0377497816</i></li>
								<li> --- </li>
								<li><i class="fa fa-envelope">ngominhdat171102001@gmail.com</i></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang-chu')}}"><img src="public/frontend/images/logo.png" alt="loading" /></a>
						</div>
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">


								<?php
									$customer_id=Session::get('customer_id');
									$shipping_id=Session::get('shipping_id');
									if($customer_id!=NULL && $shipping_id==NULL){// 
								?>

									<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
								
								<?php
									}elseif($customer_id!=NULL && $shipping_id!=NULL){//
								?>
									<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
								<?php
									 }else{
								?>
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
								<?php
									}
								?>
								


								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
								<?php
									$customer_id=Session::get('customer_id');
									if($customer_id != NULL){
								?>
									<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>Đăng xuất</a></li>
								<?php
									}else{
								?>
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
								<?php
									}
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								
								<li><a href="{{URL::to('/show-cart')}}">giỏ  hàng</a></li>
								<li><a href="{{URL::to('/about')}}">liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<form action="{{URL::to('/tim-kiem')}}" method="post">
							{{ csrf_field() }}
						<div class="search_box pull-right">
							<input name="keywords_submit" style="width:200px;" type="text" placeholder="Tìm kiếm"/>
							<input type="submit" style="margin-top:0;color:#666;width:100px;" name="search_items" class="btn btn-primary btn-sm" value="tìm kiếm">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span></span>D7T</h1>
									<h2>D7T shop</h2>
									<p></p>
									<!-- <button type="button" class="btn btn-default get"></button> -->
								</div>
								<div class="col-sm-6">
									<h2>Cửa hàng cam kết</h2>
									<h2>sẽ mang đến cho</h2>
									<h2 style="color: #f77c16;font-size: 49px;">quý khách</h2>
									<h2>những sản phẩm</h2>
									<h1 style="color: #f77c16;" >chất lượng nhất</h1>
								</div>
							</div>
							@foreach($slider as $key => $sli)
							<div class="item">
							<div class="col-sm-6">
									<h1><span></span>D7T</h1>
									<h2>D7T shop</h2>
									<p></p>
									<!-- <button type="button" class="btn btn-default get"></button> -->
								</div>
								<div class="col-sm-6">
									<img style="height:400px;" src="{{URL::to('public/uploads/product/'.$sli->product_image)}}" alt="loading" />
								</div>
							</div>
							@endforeach
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							@foreach($category as $key => $cate)
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu sản phẩm</h2>

							@foreach($brand as $key => $brand	)
							
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">{{$brand->brand_name}}</a></li>
									
								</ul>
							</div>
							@endforeach
						</div><!--/brands_products-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
					
					@yield('content')
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				
		</div>
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Địa chỉ: Bắc Từ Liêm - Hoài Đức - Hà Nội</p>
					<p class="pull-left">Số điện thoại: 0377497816</p>
					<p class="pull-right">Ngô Minh Đạt</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>