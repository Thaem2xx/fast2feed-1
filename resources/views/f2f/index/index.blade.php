@extends('templates.f2f.master')
@section('title')
	Trang chủ
@endsection
@section('content')
	<div class="row" style="margin-top: 20px">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <a href="{{ route('trangNhaHang') }}" title=""><img src="/templates/f2f/images/slide/slide1.jpg" alt="" style="width: 1169px;height: 300px"></a>
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <a href="{{ route('trangNhaHang') }}" title=""><img src="/templates/f2f/images/slide/slide2.jpg" alt="" style="width: 1169px;height: 300px"></a>
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <a href="{{ route('trangNhaHang') }}" title=""><img src="/templates/f2f/images/slide/slide3.jpg" alt="" style="width: 1169px;height: 300px"></a>
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <a href="{{ route('trangNhaHang') }}" title=""><img src="/templates/f2f/images/slide/slide4.jpg" alt="" style="width: 1169px;height: 300px"></a>
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <a href="{{ route('trangNhaHang') }}" title=""><img src="/templates/f2f/images/slide/slide5.jpg" alt="" style="width: 1169px;height: 300px"></a>
			      <div class="carousel-caption">
			      </div>
			    </div>
			  </div>
	
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		   </div>
		</div>
			<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding" style="margin-top: 15px;">
				@include('templates.f2f.leftbar')
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 clearpaddingr">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
						<div class="panel panel-info">
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
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g71/703601/prof/s/foody-mobile-1sa-jpg.jpg" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>EZI Coffee</span></p>
										<p style="color: gray;font-size: 13px; border-bottom: 1px solid gray">30 Ông ích khiêm, quận Hải Ch..</p>
										<p style="color: black;font-size: 14px;">CAFÉ/DESSERT-MÓN VIỆT</p>
						  			</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href="{{ route('trangNhaHang') }}"><img src="https://media.foody.vn/res/g70/695173/prof/s/foody-mobile-cha-jpg.jpg" alt="" class=""></a>
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
								<!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 re-padding">
						  			<div class="product_item">
						  				<div class="product-image">
						  					<a href=""><img src="/templates/f2f/images/product/somi.png" alt="" class=""></a>
						  				</div>
										<p><span class='price text-right'>200.000 VNĐ</span> <del class="product-discount">250.000 VNĐ</del></p>
										<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true" title="Số lượt xem"></span> 190 <span class="glyphicon glyphicon-star-empty" aria-hidden="true" title="Số lượng đặt mua">9</p>
										<a href=""><button class='btn btn-info'><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Thêm giỏ hàng</button></a>
						  			</div>
								</div> -->
					  		</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	 	<a href="{{ route('trangDanhMuc') }}" title="Xem thêm sản phẩm">
	 		<div style="border: 1px solid #BCE8F1;width: 1135px;height: 50px;margin: 20px 0px;color: black">
	 			<p style="text-align: center;line-height: 50px">Xem thêm &nbsp;<span class="glyphicon">&#xe092;</span></p>
	 		</div>
	 	</a>
	<div id="map" style="width:500px;height:370px;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.12085798816!2d108.20519251494086!3d16.059216988887126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b15a13c381%3A0x2a8f705f1bfbf085!2zMjU0IE5ndXnhu4VuIFbEg24gTGluaCwgVGjhuqFjIEdpw6FuLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1540132844754"
				width="1135" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
@endsection
