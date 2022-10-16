<div class="form-group">
    <label for="inputTitle">Frase</label>
    <input type="text" class="form-control" name="quote" id="inputTitle" value="{{old('quote',$quote->quote)}}" />
</div>

<div class="form-group">
    <label for="inputAuthor">Autor</label>
    <input type="text" class="form-control" name="author" id="inputAuthor" value="{{old('author',$quote->author)}}" />
</div>
