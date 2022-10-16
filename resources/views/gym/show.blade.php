@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Ginásio
        </div>
        <div class="card-body">
            @if ($gym->photo)

			<div>
				<img alt="Gym photo" class="img-post" src="{{asset('storage/gym_images/'.$gym->photo)}}">
			</div>
            @endif
            <div><strong>Titulo:</strong> {{$gym->title}} </div><br>
            <div><strong>Descrição:</strong> {{$gym->content}} </div><br>
            <div><strong>Categoria:</strong> {{$gym->category}} </div><br>
	</div>
</div>
@endsection
