
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<LINK REL="SHORTCUT ICON" href="{{url('public/images/mylogo.ico')}}">
	<link rel="stylesheet" href="{{url('public/font/OpenSansCondensed-Light.ttf')}}">
	<link rel="stylesheet" href="{{url('public/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}"> 
	<link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('public/css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('public/css/slider.css')}}">
	<script type="text/javascript" src="{{url('public/js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/js/sitecripts.js')}}" ></script>
	
	
</head>
<body>
	
	<!-- Header -->
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url('/')}}"><img src="{{url('public/images/mylogo.ico')}}" alt="">
						<b>Software</b></a>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- form tìm kiếm -->
							<form action="{{url('home/search')}}" method="get" class="navbar-form navbar-left" role="search" onsubmit="return validateForm()">
								<div class="form-group">
									<input type="text" name="key" id="search" class="form-control" placeholder="Nhập tên phần mềm">
								</div>
								<button type="submit" class="btn btn-default" style="color: #4284F3"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
							<!-- Các chỉ mục -->
							<li><a href="{{url('/')}}" style="color: #5BC348"><i class="fa fa-android" aria-hidden="true"></i> Phần mềm</a></li>
							<li><a href="game" style="color: #f44336"><i class="fa fa-gamepad"></i> Trò chơi</a></li>
							<li><a href="#" style="color: #3B5998"><i class="fa fa-facebook-official" aria-hidden="true"></i> Face</a></li>
							<li class="account"><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
				
				<div class="menu-account">
					<div class="background-menu">
						<div class="logo-menu" style="margin-bottom: 10px; text-align: center;">
							<img src="{{url('public/images/mylogo.ico')}}" alt="logo">
						</div>
						<ul>
							@if (Auth::check())
								<li><i style="color: #5751D9" class="fa fa-user-o" aria-hidden="true"></i> {{ Auth::user()->name }}</li>
								<li><i style="color: #5751D9"  class="fa fa-info-circle" aria-hidden="true"></i><a href="#">   Thông tin tài khoản</a></li>
								<li><i style="color: #5751D9"   class="fa fa-sign-out" aria-hidden="true"></i><a href="{{ Auth::logout() }}"> Đăng xuất</a> </li>
							@else
								<li><i style="color: #5751D9"   class="fa fa-sign-in" aria-hidden="true"></i><a href="{{ url('login') }}"> Đăng nhập</a> </li>
								<li><i style="color: #5751D9"   class="fa fa-user-plus" aria-hidden="true"></i><a href="{{ url('register') }}"> Đăng kí</a> </li>
							@endif
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<!-- Blance -->
		<div class="blance" style="padding: 30px 0; position: static;" > </div>

		@section('content')
		@show


		<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="title-footer">
							About Us
						</div>

						<ul style="list-style: none; padding-left: 0px">
							<li><a href="#">Thông tin về chúng tôi</a></li>
							<li><a href="#">Bản quyền</a></li>
							<li><a href="#">Tin tức công ty</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="title-footer">
							Thông tin liên hệ
						</div>
						<ul style="list-style: none; padding-left: 0px">
							<li><a href="#">Email: softwareworld@ldc.com</a></li>
							<li><a href="#">SĐT: 012 444 4444</a></li>
							<li><a href="#">Facebook: software</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4">
						<div class="title-footer">
							Trang web
						</div>
						<ul style="list-style: none; padding-left: 0px">
							<li><a href="#">Báo cáo lỗi </a></li>
							<li><a href="#">Hỗ trợ</a></li>
							<li><a href="#">Hồ sơ tài khoản </a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<div class="float-button">
			<i class="fa fa-arrow-up" aria-hidden="true"></i>

		</div>

		<script type="text/javascript" src="{{url('public/js/slider.js')}}"></script>
		<script>
        var indexCurrent = 1;      
        var loop = true;  
        var showbutton =true; 
        var duration = 4000;  

        initSlider();
    </script>

</body>
</html>
