@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Post Information
        </div>
        <div class="card-body">
            @if ($post->image)

			<div>
				<img alt="Post image" class="img-post" src="{{asset('storage/posts_images/'.$post->image)}}">
			</div>
            @endif
            <div><strong>Titulo:</strong> {{$post->title}} </div><br>
            <div><strong>Descrição:</strong> {{$post->content}} </div><br>
            <div><strong>Categoria:</strong> {{$post->category->name}} </div><br>
	</div>
</div>
@endsection
