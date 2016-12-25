<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
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
	<div id="sidebar-collapse" class="col-sm-3 sidebar">
		<div class="panel panel-primary">
						<div class="panel-heading text-center">Pending Request</div>
						<div class="panel-body">
							<!-- begin request -->
							<?php $i=1;?>
							@foreach ($display as $dis)
							<div class="text-center text-bold panel-blue panel-body">Pending {{$i}}</div>
							<label>NRP/NIP: </label> {{$dis->nrp_nip}}<br>
							<label>Nama: </label> {{$dis->user->name}}<br>
							<label>Ruangan: </label> {{$dis->room->room_name}}<br>
							<label>Tanggal Mulai: </label> {{$dis->date_begin}}<br>
							<label>Waktu Mulai: </label> {{$dis->time_begin}}<br>
							<label>Tanggal Selesai: </label> {{$dis->date_finish}}<br>
							<label>Waktu Selesai: </label> {{$dis->time_finish}}<br>
							<label>Tujuan: </label> {{$dis->purpose}}<br>
							<?php $i++;?>
							@endforeach
						</div>
					</div>

	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<h1 class="page-header text-center">Reservasi</h1>
				<div class="panel panel-default">
					<div class="panel-heading text-center">Form Pesan</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form role="form" method="post" action="{{URL::to('reservasi')}}">
								<div class="alert alert-success js-alert hidden" role="alert">
        							Proses reservasi berhasil!
  								</div>
  								<div class="alert alert-danger js-alert hidden" role="alert">
        							User tidak terdaftar!
  								</div>
								<div class="form-group">
									<label for="nrp_nip">NRP/NIP</label>
									<input type="text" name="nrp_nip" class="form-control">
								</div>						
								<div class="form-group">
									<label for="name">Nama</label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="form-group">
									<label for="room_id">Ruangan</label>
									<select name="room_id" class="form-control">
										<option value="1">Ruang 101</option>
										<option value="2">Ruang 102</option>
										<option value="3">Ruang 103</option>
										<option value="4">Ruang 104</option>
										<option value="5">Ruang 105A</option>
										<option value="6">Ruang 105B</option>
										<option value="7">Ruang 106</option>
										<option value="8">Ruang 108</option>
										<option value="9">Aula</option>
										<option value="10">Studio Musik</option>
									</select>
									<!-- <input type="text" class="form-control"> -->
								</div>
								<div class="form-group">
									<label for="date_begin">Tanggal Mulai</label>
									<input type="date" name="date_begin" class="form-control">
								</div>
								<div class="form-group">
									<label for="time_begin">Waktu Mulai</label>
									<input type="text" pattern="([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}" name="time_begin" class="form-control" title="Format: hh:mm (24h)">
								</div>
								<div class="form-group">
									<label for="date_finish">Tanggal Selesai</label>
									<input type="date" name="date_finish" class="form-control">
								</div>
								<div class="form-group">
									<label for="time_finish">Waktu Selesai</label>
									<input type="text" pattern="([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}" name="time_finish" class="form-control" title="Format: hh:mm (24h)">
								</div>
								<div class="form-group">
									<label for="purpose">Tujuan Peminjaman</label>
									<input type="text" name="purpose" class="form-control">
								</div>
								{{csrf_field()}}
								<button type="submit" class="btn btn-primary">Pesan</button>
								<button type="reset" class="btn btn-default">Reset</button>

							</form>
						</div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		$('form').on('submit', function( event ) {
	  	var $form = $( this );

	  	event.preventDefault();
	  	$('.js-alert').addClass('hidden');
	  	$('.js-btn').button('loading');

	  	$.ajax({
	    	url: 'reservasi',
	    	type: 'POST',
	    	data: $form.serialize(),
	    	success: function(response){
	    		if(response==1)
	    		{
	    			$('.alert-danger').removeClass('hidden');
	        		$('.js-btn').button('reset');	
	    		}
	    		else
	    		{
	    			$('.alert-success').removeClass('hidden');
	        		$('.js-btn').button('reset');
	    		}
	    	}
	  	});
	});
	</script>
	<!-- <script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script> -->
</body>

</html>
