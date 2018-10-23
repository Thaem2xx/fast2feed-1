<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="/templates/f2f/js/jquery-3.1.1.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/templates/f2f/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/templates/f2f/bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="/templates/f2f/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		/*DropDown Menu*/
		#bs-example-navbar-collapse-1 ul li > .sub-menu {
			display: none;
			position: absolute;
			z-index: 1000;
		}
		#bs-example-navbar-collapse-1 ul li:hover .sub-menu {
			display: block;
		}
		#bs-example-navbar-collapse-1 ul li {
			position: relative;
			list-style: none;
			-webkit-transition: all .2s linear;
		}
		.sub-menu {
			padding: 0px;
			background-color: #4C66A4;
			width: 90px;
		}
		.sub-menu li a {
			color: white;
			line-height: 30px;
			padding-left: 5px;
		}
		.sub-menu li {
			height: 30px;
		}
		.sub-menu li:hover {
			background-color: white;
			color: #0288D1;
		}
		.sub-menu li a:hover {
			
			color: #0288D1;
		}
		/*footer*/
		.app-download:hover {
			color: #0288D1;
			border-color: red;
		}
		.app-download {
			-webkit-transition: all .2s linear;
			border: 1px solid #D7D7D7;
			width: 120px;
			height: 40px;
			position: relative;
			margin-bottom: 15px;
			margin-top: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<a href="{{ route('trangChu') }}" title=""><img src="/templates/f2f/images/f2f.png" alt="" width="290px" height="145px"></a>
		<a href="#" title=""><img src="/templates/f2f/images/banner.gif" alt="" width="845px" height="110px"></a>
		<div class="row">
			<nav class="navbar navbar-info re-navbar" style="margin-top: 10px">
			  <div class="container-fluid re-container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      	<a class="navbar-brand" href="#">--- Menu ---</a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse re-navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="{{ route('trangChu') }}">Fast2Feed.vn</a></li>
			        <li><a href="{{ route('trangDanhMuc') }}">Tất cả</a></li>
			        <li><a href="{{ route('trangDanhMuc') }}">Đồ ăn</a></li>
			        <li><a href="{{ route('trangDanhMuc') }}">Thức uống</a></li>
			        <li><a href="{{ route('trangDanhSachHD') }}">Danh sách hóa đơn</a></li>
			        <li><a href="{{ route('trangShipper') }}">Hóa đơn đã nhận</a></li>
					<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-bell"><span class="badge">1</span></span><span class="caret"></span></a>
			          <ul class="dropdown-menu" style="width: 350px;">
			            <div class="table-responsive">
		                     <p style="font-size:15.5px">Hiện bạn đang có 1 hóa đơn gần khu vực của bạn</p>
		                     <a href="#" type="button" class="btn btn-danger pull-right"> Chi Tiết Hóa Đơn </a>
		                  </div>
			          </ul>
			        </li>
			        <li>
			        	<a href="#">...</a>
			        	<ul class="sub-menu">
			        		<li><a href="{{ route('trangDanhMuc') }}">Thức uống</a></li>
			        		<li><a href="{{ route('trangDanhMuc') }}">Thức uống</a></li>
			        		<li><a href="{{ route('trangDanhMuc') }}">Thức uống</a></li>
			        	</ul>
			        </li>
			       </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="#">Tải App</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"><span class="badge">1</span></span> Giỏ Hàng<span class="caret"></span></a>
			          <ul class="dropdown-menu" style="width: 350px;">
			            <div class="table-responsive">
		                     <table class="table table-hover">
		                      <thead>
		                      <tr>
		                        <th>Ảnh</th>
		                        <th>LS</th>
		                        <th>Tên <span></span></th>
		                        <th>Giá</th>
		                      </tr>
		                    </thead>
		                       <tbody>                       
		                         <tr>
		                           <td>  <img style="height: 30px;width: 40px;border-radius: 30%;" src="https://media.foody.vn/res/g19/184588/prof/s/foody-mobile-main-avatar-foody-ap.jpg" alt=""></td>
		                           <td>1</td>
		                           <td>Trà sữa</td>                           
		                           <td>30.000 VNĐ</td>
		                         </tr>                         
		                       </tbody>                       
		                     </table> 
		                     <a href="{{ route('trangGioHang') }}" type="button" class="btn btn-success"> Chi Tiết Giỏ Hàng </a>
		                     <a href="#" type="button" class="btn btn-danger pull-right"> Xóa </a>
		                  </div>
			          </ul>
			        </li>
			        <li><a href="{{ route('trangDangNhap') }}">Đăng nhập</a></li>
			        <li><a href="{{ route('trangShipper') }}">Trở thành shipper</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			    
			  </div><!-- /.container-fluid -->
			</nav>
		</div>

		<!-- Kết thúc header -->