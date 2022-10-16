<div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" name="name" id="inputName" value="{{old('name',$category->name)}}" />
</div>
<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="content" id="inputDescription">{{old('content',$category->content)}}</textarea>
</div>

