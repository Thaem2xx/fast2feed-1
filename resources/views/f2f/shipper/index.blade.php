@extends('templates.f2f.master')
@section('title')
	Trang chủ shipper
@endsection
@section('content')
	<div class="row" style="margin-top: 20px">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>

			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			     <img src="/templates/f2f/images/slide/slide6.jpg" alt="" style="width: 1169px;height: 300px">
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <img src="/templates/f2f/images/slide/slide7.jpg" alt="" style="width: 1169px;height: 300px">
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <img src="/templates/f2f/images/slide/slide8.jpg" alt="" style="width: 1169px;height: 300px">
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
		<div class="order_panel order_panel_info">
			<div class="order">
				<h1 class="order_title mb-4 text-center" style="font-size: 20px">Hóa đơn đã nhận</h1>
				<div class="order_table">Hiện tại bạn chưa nhận hóa đơn nào
					<div class="order_list">
						<div class="order_list_heading order_table_row">
							<div class="order_table_cell order_list_row_col1">
							</div>
							<div class="order_table_cell order_list_row_col2">
							</div>
							<div class="order_table_cell order_list_row_col3">
							</div>
							<div class="order_table_cell order_list_row_col4">
							</div>
							<div class="order_table_cell order_list_row_col5">
							</div>
							<div class="order_table_cell order_list_row_col6">
							</div>
							<div class="order_table_cell order_list_row_col7">
							</div>
							<div class="order_table_cell order_list_row_col8">
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
		</div>
	 	
	<div id="map" style="width:1100px;height:370px;margin: 20px 0px;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.12085798816!2d108.20519251494086!3d16.059216988887126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b15a13c381%3A0x2a8f705f1bfbf085!2zMjU0IE5ndXnhu4VuIFbEg24gTGluaCwgVGjhuqFjIEdpw6FuLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1540132844754"
				width="1135" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
@endsection
