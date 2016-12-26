<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-table.css')}}" rel="stylesheet">
<link href="{{asset('css/styles.css')}}" rel="stylesheet">
@yield('css-extend')
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span>Room</span>Booking</a>
				<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User</a> -->
				<ul class="user-menu">
					<li>
						<a href="admin/logout" class="dropdown-toggle" data-toggle="dropdown"> Logout</a>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="{{ URL::to('admin/user') }}">User</a>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="{{ URL::to('admin') }}"> Admin</a>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="{{ URL::to('admin/reservasi') }}"> Reservasi</a>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="{{ URL::to('admin/jadwal') }}"> Jadwal pinjam</a>
					</li>
				</ul>
			</div>			
		</div><!-- /.container-fluid -->
	</nav>
	@yield('content')
	<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('js/bootstrap-table.js')}}"></script>
	@yield('js-extend')
</body>

</html>
