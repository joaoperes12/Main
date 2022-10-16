<div class="form-group">
    <label for="inputTitle">Titulo</label>
    <input type="text" class="form-control" name="title" id="inputTitle" value="{{old('title',$post->title)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="content" id="inputDescription">{{old('content',$post->content)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Faça upload de um arquivo de imagem válido. O tamanho da imagem não deve ser
        mais de 2 MB </small>
</div>

<div class="form-group">
    <label for="inputCategory">Categoria</label>
    <select name="category" id="inputCategory" class="form-control">
       @foreach ($categories as $category)
        <option {{ old('category_id', $post->category_id) == $category->id ? "selected":""}} value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
</div>
