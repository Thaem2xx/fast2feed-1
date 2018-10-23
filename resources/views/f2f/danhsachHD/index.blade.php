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
				<h1 class="order_title mb-4 text-center" style="font-size: 20px">Danh sách hóa đơn</h1>
				<div class="order_table">
					<div class="order_list">
						<div class="order_list_heading order_table_row">
							<div class="order_table_cell order_list_row_col1">STT
							</div>
							<div class="order_table_cell order_list_row_col2">Nơi nhận hàng
							</div>
							<div class="order_table_cell order_list_row_col3">Nơi giao hàng
							</div>
							<div class="order_table_cell order_list_row_col4">Tiền nhận hàng
							</div>
							<div class="order_table_cell order_list_row_col5">Tiền giao hàng
							</div>
							<div class="order_table_cell order_list_row_col6">Trạng thái
							</div>
							<div class="order_table_cell order_list_row_col7">
							</div>
							<div class="order_table_cell order_list_row_col8">
							</div>
						</div>
						<div class="order_table_row">
							<div class="order_table_cell order_list_row_col1">01
							</div>
							<div class="order_table_cell order_list_row_col2">134 Hoàng Diệu, P.2, Q. Hải Châu, TP.Đà Nẵng
							</div>
							<div class="order_table_cell order_list_row_col3">148 Tiểu La, P.3, Q. Hải Châu, TP.Đà Nẵng
							</div>
							<div class="order_table_cell order_list_row_col4">74.000đ
							</div>
							<div class="order_table_cell order_list_row_col5">90.000đ
							</div>
							<div class="order_table_cell order_list_row_col6">Còn 5 phút
							</div>
							<div class="order_table_cell order_list_row_col7">
								<button title="Nhấn vào để xem chi tiết" class="font_weight_bold order_table_status gray pointer" id="myBtn">Xem</button>
								
								<div id="myModal" class="modal">

								<!-- Modal content -->
									<div class="modal-content">
										<span class="close">&times;</span>
										<p style="font-size:25px; text-align: center;">Chi tiết hóa đơn</p>
									</div>

								</div>
							</div>
							<div class="order_table_cell order_list_row_col8">
								<button title="Nhấn vào để nhận đơn hàng" class="font_weight_bold order_table_status gray pointer">nhận</button>
							</div>
						</div>
						<div class="order_table_row">
							<div class="order_table_cell order_list_row_col1">02
							</div>
							<div class="order_table_cell order_list_row_col2">210 Núi Thành, P.1, Q. Hải Châu, TP.Đà Nẵng
							</div>
							<div class="order_table_cell order_list_row_col3">121 Lê Đình Lý, P.4, Q. Hải Châu, TP.Đà Nẵng
							</div>
							<div class="order_table_cell order_list_row_col4">105.000đ
							</div>
							<div class="order_table_cell order_list_row_col5">140.000đ
							</div>
							<div class="order_table_cell order_list_row_col6">Đã hủy
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
	
	<div class="row">
		<div id="map" style="width:1100px;height:370px;margin: 20px 0px;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.12085798816!2d108.20519251494086!3d16.059216988887126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b15a13c381%3A0x2a8f705f1bfbf085!2zMjU0IE5ndXnhu4VuIFbEg24gTGluaCwgVGjhuqFjIEdpw6FuLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1540132844754"
				width="1169" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div> 	
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
@endsection
