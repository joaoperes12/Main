@extends('layout.admin')

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Frase
        </div>
        <div class="card-body">

		<form method="POST" action="{{route('landing.update',$landing)}}" class="form-group"
			enctype="multipart/form-data">
			@csrf
			@method("PUT")
			@include('landing.partials.add-edit')
			<div class="form-group">
				<button type="submit" class="btn btn-danger" name="ok">Gravar</button>
				<a href="{{route('landing.index')}}" class="btn btn-danger">Cancelar</a>
			</div>
		</form>

		</div>
	</div>
</div>


@endsection
