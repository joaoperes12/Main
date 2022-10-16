@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Quote Information
        </div>
        <div class="card-body">
            <div><strong>Titulo:</strong> {{$quote->quote}} </div><br>
	</div>
</div>
@endsection
