<div class="form-group">
    <label for="inputFullname">Name</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{old('name',$landing->name)}}" />
</div>

<div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{old('email',$landing->email)}}" />
</div>

<div class="form-group">
    <label for="inputContact">Contact</label>
    <input type="number" class="form-control" name="contact" id="contact"
    value="{{old('name',$landing->contact)}}" />
</div>