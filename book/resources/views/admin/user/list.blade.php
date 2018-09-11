@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User
					<small>List</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Username</th>
						<th>Level</th>
						<th>Email</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($user as $us)
					<tr class="odd gradeX" align="center">
						<td>{{$us->id}}</td>
						<td>{{$us->name}}</td>
						<td>
							@if($us->level == 1)
								{{'Admin'}}
							@else
								{{'Member'}}
							@endif
						</td>
						<td>{{$us->email}}</td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection