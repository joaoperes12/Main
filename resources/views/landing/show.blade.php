@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação de Inscrição
        </div>
        <div class="card-body">
            <div><strong>Nome:</strong> {{$landing->name}} </div><br>
            <div><strong>Email:</strong> {{$landing->email}} </div><br>
            <div><strong>Contacto:</strong> {{$landing->contact}} </div><br>
	</div>
</div>
@endsection
