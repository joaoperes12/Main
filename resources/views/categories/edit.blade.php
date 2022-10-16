@extends('layout.admin')

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Categoria
        </div>
        <div class="card-body">

			<form method="POST" action="{{route('categories.update',$category)}}" class="form-group">
				@csrf
				@method("PUT")
				@include('categories.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-danger" name="ok">Guardar</button>

					<a href="{{route('categories.index')}}" class="btn btn-danger">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection
