@extends('layouts/main')

@section('content')


<div class="container">
	<hr>
	<h1>Posts</h1>
	<hr>

	@if(count($post)>0)
	@foreach($post as $p)
	<div class="card">
		<div class="card-body"> 
			<center>
			<table>
				<tr>
					<td>
						<h1>{{$p->title}}</h1>
						<a href="#">Read more...</a>
						<p>Post created at: <small>{{$p->created_at}}</small></p>
					</td>
					<td>
						<img height="100px;" src="https://cdn.pixabay.com/photo/2012/04/24/14/31/cassette-40268__340.png">
					</td>
				</tr>
			</table>
			</center>
		</div>
	</div>

	@endforeach
	@endif

</div>
@endsection