<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/timetablejs.css" rel="stylesheet">
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
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login Admin</a>
						<ul class="dropdown-menu" role="menu">
							<div class="col-sm-12">
								<form role="form" method="post" action="{{ URL::to('login') }}">
									{!! csrf_field() !!}
									<div class="form-group">
										<label>Nama:</label>
										<input type="text" class="form-control" name="username">
									</div>						
									<div class="form-group">
										<label>Password:</label>
										<input type="password" class="form-control" name="password">
									</div>
									<button type="submit" class="btn btn-primary">login</button>
								</form>
							</div>
						</ul>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="{{ URL::to('reservasi') }}"> Reservasi</a>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="{{ URL::to('') }}"> Jadwal Pinjam</a>
					</li>
				</ul>
			</div>			
		</div><!-- /.container-fluid -->
	</nav>

	<div class="col-lg-12 main">
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10">
				<h1 class="page-header text-center">Jadwal</h1>
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Waktu:</div> -->
					<div class="panel-body">
						<div class="col-md-12">
							<form role="form" method="post" action="#">
								<div class="form-group">
									<label>Tanggal</label>
									<input type="date" class="form-control">
								</div>
								<button type="submit" class="btn btn-primary">Lihat</button>
							</form>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Waktu:</div> -->
					<div class="panel-body">
						<div class="col-md-12">
							<label>Calender</label>
							<div class="timetable"></div>
						</div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/timetable.min.js"></script>
	<script>
		$(function () {
			var timetable = new Timetable();
			timetable.setScope(6, 23); // optional, only whole hours between 0 and 23
			timetable.addLocations(['Ruang 101', 'Ruang 102', 'Ruang 103', 'Ruang 104','Ruang 105A','Ruang 105B','Ruang 106','Ruang 108','Aula','Studio Musik']);
			timetable.addEvent('APSI-D', 'Ruang 101', new Date(2015,7,17,10,45), new Date(2015,7,17,12,30));
			var renderer = new Timetable.Renderer(timetable);
			renderer.draw('.timetable'); // any css selector
		});
	</script>
</body>

</html>
