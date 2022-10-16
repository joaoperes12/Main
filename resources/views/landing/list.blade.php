@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2">Inscrição</h1>

  <div class="card shadow mb-4">
    <div class="card-body">
      @if(count($landing))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Contacto</th>
                <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($landing as $landing)
            <tr>
                <td>{{$landing->name}}</td>
                <td>{{$landing->email}}</td>
                <td>{{$landing->contact}}</td>

                <td nowrap>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('landing.show',$landing)}}"><i class="fas fa-eye fa-xs"></i></a>
                <form method="POST" action="{{route('landing.destroy',$landing)}}" role="form" class="inline" onsubmit="return confirm('Tens acerteza que queres eliminar isto?');">
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
 <h6>Não há pessoas inscritas</h6>
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
