	@extends('pages.admin.layout')

	@section('title','Form User')
	
	@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah User</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-10">
				<div class="panel panel-default">
					<div class="panel-heading text-center">Tambah User</div>
					<div class="panel-body">
						<form role="form" method="post" action="{{URL::to('form')}}">
							
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label>NRP/NIP</label>
								<input type="text" name="nrp_nip" class="form-control">
							</div>
							<div class="alert alert-success js-alert hidden" role="alert">
        						Penambahan user berhasil!
  							</div>
  							<div class="alert alert-danger js-alert hidden" role="alert">
        						User sudah terdaftar!
  							</div>
							
							{{csrf_field()}}										
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	@endsection

	@section('js-extend')
	<script type="text/javascript">
		$('form').on('submit', function( event ) {
	  	var $form = $( this );

	  	event.preventDefault();
	  	$('.js-alert').addClass('hidden');
	  	$('.js-btn').button('loading');

	  	$.ajax({
	    	url: 'form',
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