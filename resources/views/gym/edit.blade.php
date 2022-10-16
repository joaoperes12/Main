@extends('layout.admin')

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Ginásio
        </div>
        <div class="card-body">

		<form method="POST" action="{{route('gym.update',$gym)}}" class="form-group"
			enctype="multipart/form-data">
			@csrf
			@method("PUT")
			@include('gym.partials.add-edit')
            @foreach($gym->photos as $photo)
                <img src="{{asset('storage/gym_images/'.$photo->filename) }}" class="img-post">
                <a href="{{ route('photodelete',$photo) }}" class="btn btn-danger">Eliminar</a>
                <a href="{{ route('photomain',$photo) }}" class="btn btn-success">Definir como Principal</a>
                @if($photo->main_photo)
                    <b>Foto Principal</b>
                @endif
            @endforeach
			<div class="form-group">
				<button type="submit" class="btn btn-danger" name="ok">Gravar</button>
				<a href="{{route('gym.index')}}" class="btn btn-danger">Cancelar</a>
			</div>
		</form>

		</div>
	</div>
</div>


@endsection
