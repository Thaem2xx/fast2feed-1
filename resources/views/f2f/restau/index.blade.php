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
<<<<<<< HEAD
						  		<span style="font-size: 14px">
						  			<a href="{{ route('trangChu') }}" title="">Trang chủ »</a><a href="" title="">EZI Coffee</a>
						  		</span>
						  		<p style="font-size: 12px;color: gray;margin-top: 15px">
						  			CAFÉ/DESSERT - MÓN VIỆT
						  		</p>
						  		<h3>
						  			<strong>EZI Coffee</strong>
						  		</h3>
						  		<p style="font-size: 14px;color: #464646">
						  			30 Ông Ích Khiêm, Q.Hải Châu, Đà nẵng
						  		</p>
						  		<div class="star-rate">
						  			<i class="fa fa-star" aria-hidden="true"></i>
							  		<i class="fa fa-star" aria-hidden="true"></i>
							  		<i class="fa fa-star" aria-hidden="true"></i>
							  		<i class="fa fa-star" aria-hidden="true"></i>
							  		<i class="fa fa-star-half-o" aria-hidden="true"></i>
						  		</div>
						  		&nbsp;
						  		<span style="color: #02A5E5;font-size: 16px">2 bình luận</span>
						  		<br>	
						  		<i class="fa fa-circle" style="color: green"></i>&nbsp; 
						  		<span style="font-family: Arial;font-size: 15px;color: green">
						  			Mở cửa
						  		</span>&nbsp;
						  		<span>
						  			<i class="fa fa-clock-o" aria-hidden="true" style="color: gray;font-size: 18px"></i>
						  		</span>
						  		<span style="font-weight: 500;font-size: 16px">
						  			08:00 - 21:00
						  		</span><br>
						  		<i class="fa fa-money" aria-hidden="true" style="color: gray;font-size: 16px">
						  			
						  		</i>&nbsp;
						  		<span style="color: gray;font-size: 16px;">
						  			12,000 - 39,000
						  		</span>
=======
						  		<span style="font-size: 14px"><a href="{{ route('trangChu') }}" title="">Trang chủ »</a><a href="" title="">EZI Coffee</a></span>
						  		<p style="font-size: 12px;color: gray;margin-top: 15px">CAFÉ/DESSERT - MÓN VIỆT</p>
						  		<h2><strong>EZI Coffee</strong></h2>
						  		<p style="font-size: 14px;color: #464646">30 Ông Ích Khiêm, Q.Hải Châu, Đà nẵng</p>	
						  		<i class="fa fa-circle" style="color: green"></i>&nbsp; <span style="font-family: Arial;font-size: 15px">Đang mở cửa</span><br>
						  		<i class="fa fa-money" aria-hidden="true" style="color: gray;font-size: 16px"></i>&nbsp;<span style="color: gray;font-size: 16px;">12,000 - 39,000</span>
>>>>>>> an
						  	</div>
						  	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="font-family: Time New Roman;margin-top: 10px;color: gray;font-size: 17px">
						  		<span>
						  			Phí vận chuyển : 
						  		</span>
						  		<span>
						  			7,000đ / 1km
						  		</span><br>	
						  	</div>
						  	
						  </div>
						</div>
						
					</div>
				</div>
			</div>
<<<<<<< HEAD
			<!-- Leftbar of customer -->
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 clearpaddingl">
					<div class="panel panel-info">
					  <div class="panel-body" style="padding:0px">
					  	
					  	<div class="list-group">
						  <a id="active" href="{{ route('trangDanhMuc') }}" class="list-group-item">Kem sữa</a>
						  <a href="{{ route('trangDanhMuc') }}" class="list-group-item">Trà nguyên chất</a>
						  <a href="{{ route('trangDanhMuc') }}" class="list-group-item">Trái cây</a>
						</div>
					  </div>
					</div>
				</div>
				<!-- end-leftbar of customer-->
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 clearpaddingr" style="width:585px;height: 100%">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
					<div class="panel panel-info">
						<div class="discount">
					  		<div class="code-discount">
					  			<div class="code-discount-img">
					  				<img src="/templates/f2f/images/discount.png" alt="">
					  				<img src="/templates/f2f/images/airpay.png" alt="">
					  			</div>
					  			<div class="code-discount-text">
					  				<div class="discount-text1">
					  					<p>Giảm giá <strong style="color: #DC3545">30%</strong> - Mã: <strong>XUANNAM1234</strong></p>
					  					<p>Hết hạn: <strong>24/10/2018 21:00</strong></p>
					  					<p>Đặt tối thiểu: <strong>0đ</strong>  - Giảm tối đa:  <strong>Không giới hạn</strong></p>
					  				</div>
					  				<div class="discount-text2">
					  					<p><strong>Khuyến mãi qua ví AirPay </strong></p>
					  					<p>Hết hạn: <strong>Hết hạn: 31/12/2018 23:59</strong></p>
					  					<p>Đặt tối thiểu: <strong>0</strong> - Giảm tối đa: <strong>30,000đ</strong></p>
					  				</div>
					  			</div>
=======
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
>>>>>>> an
					  		</div>
						</div>
					  	<div class="panel-body">
					  		<div class="item">
						  		<div class="item-cat">
						  			<h4>Kem Sữa</h4>
						  		</div>
								<div class="list-item">
									<div class="img-item">
										<img src="https://media.foody.vn/res/g68/672709/s120x120/201771116955-tra-sua-tran-chau-1.jpg" alt="">
									</div>
									<div class="name-item">
										<h4>Sữa tươi trân châu đường hổ</h4>
										<p>Order <strong style="color: black">921</strong> lần</p>
									</div>
									<div class="price-item">
										<span>49.000đ</span><a href="#" title=""><i class="fa fa-plus-square" aria-hidden="true" style="color: #CF2127;font-size: 25px"></i></a>
									</div>
									<div class="clear"></div>
								</div>
								<div class="list-item">
									<div class="img-item">
										<img src="https://media.foody.vn/res/g68/672709/s120x120/201771116955-tra-sua-tran-chau-1.jpg" alt="">
									</div>
									<div class="name-item">
										<h4>Sữa tươi trân châu đường hổ</h4>
										<p>Order <strong style="color: black">921</strong> lần</p>
									</div>
									<div class="price-item">
										<span>49.000đ</span><a href="#" title=""><i class="fa fa-plus-square" aria-hidden="true" style="color: #CF2127;font-size: 25px"></i></a>
									</div>
									<div class="clear"></div>
								</div>	
							</div>
							<div class="item">
						  		<div class="item-cat">
						  			<h4>Trà nguyên chất</h4>
						  		</div>
								<div class="list-item">
									<div class="img-item">
										<img src="https://media.foody.vn/res/g71/703601/s120x120/20171218142844-tra-den-mat-ong.jpg" alt="">
									</div>
									<div class="name-item">
										<h4>Trà đen mật ong</h4>
										<p>Order <strong style="color: black">232</strong> lần</p>
									</div>
									<div class="price-item">
										<span>35.000đ</span><a href="#" title=""><i class="fa fa-plus-square" aria-hidden="true" style="color: #CF2127;font-size: 25px"></i></a>
									</div>
									<div class="clear"></div>
								</div>
								<div class="list-item">
									<div class="img-item">
										<img src="https://media.foody.vn/res/g71/703601/s120x120/20171218142844-tra-den-mat-ong.jpg" alt="">
									</div>
									<div class="name-item">
										<h4>Trà bí đao</h4>
										<p>Order <strong style="color: black">921</strong> lần</p>
									</div>
									<div class="price-item">
										<span>49.000đ</span>
										<a href="#" title=""><i class="fa fa-plus-square" aria-hidden="true" style="color: #CF2127;font-size: 25px"></i></a>
									</div>
									<div class="clear"></div>
								</div>	
							</div>
					  	</div>

					</div>
				</div>
			</div>
			<div style="float: right;width: 270px;height: 100%;border: 1px solid #BCE8F1;border-radius: 5px;font-size: 13px">

				<div class="giohang" style="background-color: #F9F9F9;height: 45px;">
					<img src="/templates/f2f/images/user.jpg" class="img-circle" alt="Xuân Nam" width="35px">&nbsp;<span style="font-weight: 800;color: #6D6F71;line-height: 33px">Xuân Nam</span><span style="float: right;line-height: 35px;">2 món</span>
				</div>
				<div class="giohang" style="height: 45px;">
		  			<a href="#" title=""><i class="fa fa-plus-square" aria-hidden="true" style="color: green"></i></a>
		  				<strong>1</strong>
		  			<a href="#" title=""><i class="fa fa-minus-square" aria-hidden="true" style="color: black"></i></a>
		  			<strong>Trà Ô Long</strong>
		  			<input type="text" name="" style="border: none" placeholder="Thêm ghi chú..."><span style="float: right;">180.000đ</span>

		  		</div>
		  		<div class="giohang" style="height: 45px;">
		  			<a href="#" title=""><i class="fa fa-plus-square" aria-hidden="true" style="color: green"></i></a>
		  				<strong>1</strong>
		  			<a href="#" title=""><i class="fa fa-minus-square" aria-hidden="true" style="color: black"></i></a>
		  			<strong>Ghẹ 50 kí</strong>
		  			<input type="text" name="" style="border: none" placeholder="Thêm ghi chú..."><span style="float: right;">800.000đ</span>

		  		</div>
				<div class="giohang" style="background-color: #F9F9F9;">
					<span>Cộng</span>
					<span style="float: right;">360.000đ</span>
				</div>
				<div class="giohang" style="background-color: #F9F9F9">
					<span>Phí vận chuyển (Est.)</span>
					<span style="float: right;">7.000đ/km</span>
				</div>
				<div class="giohang" style="background-color: #FBF9D8;height: 30px">
					<p style="text-align: center;"><span style="color: red">(*)</span>Nhập mã khuyến mãi ở bước hoàn tất</p>
				</div>
				<div class="giohang" style="background-color: #F9F9F9">
					<span>Tổng cộng:</span>
					<span style="font-size:15px;float: right; color: #0288D1;font-weight: 800;">1.160.000đ</span>
				</div>
				<div class="giohang">
					<button class="dat-truoc" type="submit" style=""><i class="fa fa-check-circle" aria-hidden="true" style="color: white;font-size: 16px"></i>&nbsp;<span style="color: white">Đặt trước</span></button>
				</div>
			</div>

		</div>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b4ec0a436ed7084"></script>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b4ec0a436ed7084"></script>
@endsection