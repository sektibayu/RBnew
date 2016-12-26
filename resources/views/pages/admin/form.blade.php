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
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<form role="form">
							
							<div class="form-group">
								<label>Nama</label>
								<input class="form-control">
							</div>
							<div class="form-group">
								<label>NRP/NIP</label>
								<input class="form-control">
							</div>
							<div class="form-group">
								<label>No. Handphone</label>
								<input class="form-control">
							</div>
																	
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
	@endsection