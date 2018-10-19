@extends('templates.f2f.master')
@section('title')
	Trang chủ
@endsection
@section('content')
<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding" style="margin-top: 15px;">
				@include('templates.f2f.leftbar')
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 clearpaddingr">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
						<ol class="breadcrumb">
						  <li><a href="{{ route('trangChu') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ</a></li>
						  
						  <li class="active">Cà phê</li>
						</ol>
						
						<div class="panel panel-info">
						  <div class="panel-heading">
						    <h3 class="panel-title">Cà phê</h3>
						  </div>
						  <div class="panel-body">
						  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
						  		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g19/184588/prof/s/foody-mobile-main-avatar-foody-ap.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g19/184588/prof/s/foody-mobile-main-avatar-foody-ap.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g19/184588/prof/s/foody-mobile-main-avatar-foody-ap.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g19/184588/prof/s/foody-mobile-main-avatar-foody-ap.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g19/184588/prof/s/foody-mobile-main-avatar-foody-ap.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
					  		</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection