<div class="form-group">
    <label for="inputPhoto">Foto</label>
    <input type="file" class="form-control-file" name="photo" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Please upload a valid file image. Size of image should not be
        more than 2MB </small>
</div>

<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{old('name',$user->name)}}" />
</div>

<div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{old('email',$user->email)}}" />
</div>

<div class="form-group">
    <label for="inputNif">Nif</label>
    <input type="number" class="form-control" name="nif" id="nif"
    value="{{old('name',$user->nif)}}" />
</div>

<div class="form-group">
    <label for="inputContact">Contacto</label>
    <input type="number" class="form-control" name="contact" id="contact"
    value="{{old('name',$user->contact)}}" />
</div>

<div class="form-group">
    <label for="inputGender">Genero</label>
    <input type="text" class="form-control" name="gender" id="gender"
    value="{{old('name',$user->gender)}}" />
</div>

<div class="form-group">
    <label for="inputBirthdate">Data de Nascimento</label>
    <input type="text" class="form-control" name="birthdate" id="birthdate"
    value="{{old('name',$user->birthdate)}}" />
</div>
<div class="form-group">
    <label for="inputRole">Role</label>
    <select name="role" id="inputRole" class="form-control">
        <option {{(request()->get('role')=='C')?"selected":""}} value="C">Cliente</option>
        <option {{(request()->get('role')=='A')?"selected":""}}value="A">Admin</option>
        <option {{(request()->get('role')=='N')?"selected":""}}value="N">Nutri</option>
        <option {{(request()->get('role')=='P')?"selected":""}}value="P">PT</option>

    </select>
</div>
