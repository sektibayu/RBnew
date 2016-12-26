	@extends('pages.admin.layout')

	@section('title','User')
	
	@section('content')
	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table User</div>
					<div class="panel-body">

						<table data-toggle="table" data-show-refresh="true" data-show-toggle="false" data-show-columns="false" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-sortable="true">NRP/NIP</th>
						        <th data-sortable="true">Nama</th>
						    </tr>
						    </thead>
						    <tbody>
						    @foreach($users as $user)
						    <tr>
						        <td>{{$user->nrp_nip}}</td>
						        <td>{{$user->name}}</td>
						    </tr>
						    @endforeach	
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		@endsection