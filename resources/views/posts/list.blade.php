@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2">Blog</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-danger" href="{{route('posts.create')}}">
        <i class="fas fa-plus"></i> Adicionar Artigo
      </a>
    </div>
    <div class="card-body">
      @if(count($posts))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Imagem</th>
              <th>Titulo</th>
              <th>Descrição</th>
              <th>Categoria</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td>
                @if ($post->image)
                <img style="width:100px;height:auto;" src="{{ asset('storage/posts_images/'.$post->image) }}" alt="Imagem de {{ $post->title }}">

                @else
                <img src="{{asset('img/no-image.png')}}" class="img-post" alt="Post image">
                @endif
                </td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td> @foreach ($categories as $category)
                    @if($category->id==$post->category_id) {{ $category->name }} @endif
                    @endforeach
                  </td>

                <td nowrap>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('posts.show',$post)}}"><i class="fas fa-eye fa-xs"></i></a>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('posts.edit',$post)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('posts.destroy',$post)}}" role="form" class="inline" onsubmit="return confirm('Tens acerteza que queres eliminar isto?');">
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
 <h6>Não há artigos registados</h6>
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
