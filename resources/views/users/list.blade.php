@extends('layout.admin')

@section("content")
<div class="main">
	<!-- Page Heading -->
	<h1 class="h3 mb-2">Utilizadores</h1>


	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a class="btn btn-danger" href="{{route('users.create')}}">
				<i class="fas fa-plus"></i> Adicionar Utilizador
			</a>
		</div>
		<div class="card-body">
			@if(count($users))


			<div class="row">
				<div class="col-md-2">
					<form method="GET" action="{{route('users.index')}}" class="form-group">


						<div class="form-group">
							<label for="inputName">Nome</label>
							<input type="text" class="form-control" name="name" id="inputName"
							value="{{request()->get('name')}}" />
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" name="email" id="inputEmail"
							value="{{request()->get('email')}}" />
						</div>

                        <div class="form-group">
							<label for="inputNif">Nif</label>
							<input type="number" class="form-control" name="nif" id="nif"
							value="{{request()->get('nif')}}" />
						</div>

                        <div class="form-group">
							<label for="inputContact">Contacto</label>
							<input type="number" class="form-control" name="contact" id="contact"
							value="{{request()->get('contact')}}" />
						</div>

                        <div class="form-group">
							<label for="inputGender">Género</label>
							<input type="text" class="form-control" name="gender" id="gender"
							value="{{request()->get('gender')}}" />
						</div>

                        <div class="form-group">
							<label for="inputBirthdate">Data de Nascimento</label>
							<input type="text" class="form-control" name="birthdate" id="birthdate"
							value="{{request()->get('birthdate')}}" />
						</div>

						<label for="inputRole">Tipo</label>
						<select name="role" id="inputRole" class="form-control">
							<option value="">All</option>
							<option {{(request()->get('role')=='C')?"selected":""}} value="C">Cliente</option>
							<option {{(request()->get('role')=='A')?"selected":""}}value="A">Admin</option>
                            <option {{(request()->get('role')=='N')?"selected":""}}value="N">Nutri</option>
                            <option {{(request()->get('role')=='P')?"selected":""}}value="P">PT</option>
						</select>

						<br>
						<div class="form-group">
							<button type="submit" class="btn btn-danger">Procurar</button>
						</div>

					</form>
				</div>
				<div class="col-md-10">


					<div class="table-responsive " >
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead class="bg-dark text-white">
								<tr>
									<th scope="col">Foto</th>
									<th scope="col">Nome</th>
									<th scope="col">Email</th>
                                    <th scope="col">NIF</th>
                                    <th scope="col">Contacto</th>
                                    <th scope="col">Género</th>
                                    <th scope="col">Data Nascimento</th>
                                    <th scope="col">Cargo</th>
									<th scope="col">Ações</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td>
										@if($user->photo)
										<img src="{{asset('storage/users_photos/'.$user->photo)}}" class="img-post" alt="User photo">
										@else
										<img src="{{asset('img/default_user.jpg')}}" class="img-post" alt="User photo">
										@endif
									</td>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
                                    <td>{{$user->nif}}</td>
                                    <td>{{$user->contact}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->birthdate}}</td>
									<td>{{$user->roleToStr()}}</td>
									<td nowrap>
										<a class="btn btn-xs btn-danger btn-p" href="{{route('users.show',$user)}}"><i class="fas fa-eye fa-xs"></i></a>
										<a class="btn btn-xs btn-danger btn-p" href="{{route('users.edit',$user)}}"><i class="fas fa-pen fa-xs"></i></a>
										<form method="POST" action="{{route('users.destroy',$user)}}" role="form" class="inline" onsubmit="return confirm('Are you sure you wante to delete this record?');">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
										</form>
									</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>


				</div>
			</div>
			@else
			<h6>Não há utilizadores registados</h6>
			@endif
		</div>
	</div>
</div>

@endsection

@section("moreScripts")
<script>

	$('#dataTable').dataTable( {
		destroy: true,
		"bFilter": false,
		"order": [[ 1, 'asc' ]],
		"columns": [
		{ "orderable": false },
		null,
		null,
		null,
		{ "orderable": false }
		]
	} );

</script>
@endsection
