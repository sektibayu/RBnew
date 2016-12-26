	@extends('pages.admin.layout')

	@section('title','Reservasi')
	
	@section('content')
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
	@endsection

	@section('js-extend')
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
	@endsection