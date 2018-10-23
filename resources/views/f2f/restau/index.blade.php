@extends('templates.f2f.master')
@section('title')
	Nhà hàng
@endsection
@section('content')
	<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding" style="margin-top: 15px;">
				
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 clearpaddingr" style="width: 96%">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
						
						<div class="panel panel-info " style="margin-bottom: 15px">
						  
						  <div class="panel-body">
					  		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
				                <a href="https://media.foody.vn/res/g77/761834/prof/s/foody-upload-api-foody-mobile-tiger-1-jpg-180911164411.jpg" class="jqzoom" rel="gal1" title="triumph">
						            <img src="https://media.foody.vn/res/g77/761834/prof/s/foody-upload-api-foody-mobile-tiger-1-jpg-180911164411.jpg" alt="" style="width:480px;height: 300px">
						        </a>
								<p style="margin-top: 35px;font-size: 15px;text-align: left;padding-left: 12px">Đặt món giao hàng tận nơi tại EZI Coffee</p>
						  	</div>
						  	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="font-family: Time New Roman;border-bottom: 1px solid #EEEEEE">
						  		<span style="font-size: 14px"><a href="{{ route('trangChu') }}" title="">Trang chủ »</a><a href="" title="">EZI Coffee</a></span>
						  		<p style="font-size: 12px;color: gray;margin-top: 15px">CAFÉ/DESSERT - MÓN VIỆT</p>
						  		<h2><strong>EZI Coffee</strong></h2>
						  		<p style="font-size: 14px;color: #464646">30 Ông Ích Khiêm, Q.Hải Châu, Đà nẵng</p>	
						  		<i class="fa fa-circle" style="color: green"></i>&nbsp; <span style="font-family: Arial;font-size: 15px">Đang mở cửa</span><br>
						  		<i class="fa fa-money" aria-hidden="true" style="color: gray;font-size: 16px"></i>&nbsp;<span style="color: gray;font-size: 16px;">12,000 - 39,000</span>
						  	</div>
						  	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="font-family: Time New Roman;margin-top: 10px;color: gray;font-size: 17px">
						  		<span>Phí vận chuyển : </span><span>7,000đ / 1km</span><br>
								<button type="" style="width: 200px;height: 35px;margin-top: 45px;border: 1px solid gray;background-color: #CF2127;border-radius: 8px"><i class="fa fa-check-circle" aria-hidden="true" style="color: white;font-size: 16px"></i>&nbsp;<span style="color: white">Đặt hàng</span></button>
						  	</div>
						  </div>
						</div>
						
					</div>
				</div>
			</div>
			@include('templates.f2f.leftmenu')
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 clearpaddingr">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
						<div class="panel panel-info">
						  <div class="panel-body">
						  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g14/138802/prof/s/foody-mobile-mi-jpg-416-636262973918757761.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g68/672709/prof/s/foody-mobile-co-jpg-314-636350344186785343.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g14/138802/prof/s/foody-mobile-mi-jpg-416-636262973918757761.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g14/138802/prof/s/foody-mobile-mi-jpg-416-636262973918757761.jpg" alt="" class=""></a>
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
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b4ec0a436ed7084"></script>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b4ec0a436ed7084"></script>
@endsection