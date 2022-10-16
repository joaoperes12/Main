@extends('layout.admin')


@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Adicionar Artigo
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('gym.store')}}" class="form-group" enctype="multipart/form-data">
				@csrf
				@include('gym.partials.add-edit')

				<div class="form-group">
					<button type="submit" class="btn btn-danger" name="ok">Guardar</button>
					<a href="{{route('gym.index')}}" class="btn btn-danger">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
