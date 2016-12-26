	@extends('pages.admin.layout')

	@section('title','User')
	
	@section('content')
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
	@endsection