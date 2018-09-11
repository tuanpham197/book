@extends('pages.trangchu')

@section('noidung')
<div class="container">
	<header>
		<h1>Home Page</h1>
	</header>
	<div id="content">
		<article>
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Stt</th>
						<th>Title</th>
						<th>Description</th>
						<th>Author</th>
						<th>Img</th>
						@if(Auth::check())
						<th>Delete</th>
						<th>Edit</th>
						@endif
					</tr>
				</thead>
				<tbody>
					@foreach($book as $bk)
					<tr>
						<td>{{$bk->id}}</td>
						<td>{{$bk->title}}</td>
						<td>{{$bk->description}}</td>
						<td>{{$bk->author}}</td>
						<td><img style="width: 200px;height: 300px;" src="upload/img/{{$bk->img}}" alt=""></td>
						@if(Auth::check())
							@if(Auth::user()->id == $bk->id_user && Auth::user()->level != 1)
								<td>
									<button class="btn btn-danger" data-catid={{$bk->id}} data-toggle="modal" data-target="#delete">Delete</button>

									@include('pages.modaledit')
								</td>
								<td class="center">
									<button type="button" class="btn btn-primary" data-catid={{$bk->id}} data-mytitle="{{$bk->title}}" data-desc="{{$bk->description}}" data-author="{{$bk->author}}" data-img="{{$bk->img}}" data- data-toggle="modal" data-target="#edit">
										Edit
									</button>
									@include('pages.modaldelete')
								</td>
							
							@endif
						@endif
					</tr>
					@endforeach
				</tbody>
			</table>
		</article>
	</div>
	<footer>

	</footer>
</div>
@endsection