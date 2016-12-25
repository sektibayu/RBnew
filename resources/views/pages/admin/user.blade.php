<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Logout</a>
					</li>
				</ul>
				<ul class="user-menu">
					<li>
						<a href="{{ URL::to('form') }}"> Tambah User</a>
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
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table Reservasi</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="false" data-show-columns="false" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-sortable="true">NRP/NIP</th>
						        <th data-sortable="true">Nama</th>
						        <th data-sortable="true">Waktu Awal</th>
						        <th data-sortable="true">Waktu Akhir</th>
						        <th data-sortable="true">Status</th>
						        <th data-sortable="true">Action</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
</body>

</html>
