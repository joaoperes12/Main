@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2">Quotes</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-danger" href="{{route('quotes.create')}}">
        <i class="fas fa-plus"></i> Adicionar Quote
      </a>
    </div>
    <div class="card-body">
      @if(count($quotes))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Quote</th>
              <th>Autor</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($quotes as $quote)
            <tr>
                <td>{{$quote->quote}}</td>

                <td>{{$quote->author}}</td>

                <td nowrap>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('quotes.show',$quote)}}"><i class="fas fa-eye fa-xs"></i></a>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('quotes.edit',$quote)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('quotes.destroy',$quote)}}" role="form" class="inline" onsubmit="return confirm('Tens acerteza que queres eliminar isto?');">
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
 <h6>Não há frases registadas</h6>
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
