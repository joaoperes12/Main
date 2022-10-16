@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2">Ginásio</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-danger" href="{{route('gym.create')}}">
        <i class="fas fa-plus"></i> Adicionar Ginásio
      </a>
    </div>
    <div class="card-body">
      @if(count($gym))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Imagem</th>
              <th>Titulo</th>
              <th>Endereço</th>
              <th>Descrição</th>
              <th>Categoria</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($gym as $gym)
            <tr>
              <td>
                @if (sizeof($gym->photos))
                <img src="{{asset('storage/gym_images/'.$gym->photos->first()->filename) }}" class="img-post">

                @else
                <img src="{{asset('storage/gym_images/'.$gym->photos) }}" class="img-post">
                @endif
                </td>
                <td>{{$gym->title}}</td>
                <td>{{$gym->address}}</td>
                <td>{{$gym->description}}</td>
                <td> @foreach ($categories as $category)
                  @if($category->id==$gym->category_id) {{ $category->name }} @endif
                  @endforeach
                </td>

                <td nowrap>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('gym.show',$gym)}}"><i class="fas fa-eye fa-xs"></i></a>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('gym.edit',$gym)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('gym.destroy',$gym)}}" role="form" class="inline" onsubmit="return confirm('Tens acerteza que queres eliminar isto?');">
                 @csrf
                 @method("DELETE")
                 <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
               </form>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
     </div>
      @else
 <h6>Não há Ginásios registados</h6>
 @endif
   </div>
 </div>
</div>
@endsection

@section("moreScripts")
<script>
  $('#dataTable').dataTable( {
    destroy: true,
    "order": [[ 1, 'desc' ]],
    "columns": [
    { "orderable": false },
    null,
    null,
    null,
    { "orderable": false },
    { "orderable": false }
    ]
  } );

</script>
@endsection
