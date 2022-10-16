@extends ('layout.auth')
@section ('title', 'Login')
@section ('image')
{{asset('img/risen-wang-20jX9b35r_M-unsplash.jpg')}}
@endsection
@section('content')
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Registar</h1>
            <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
              @csrf
            	<div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="nome" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Insira o seu nome">
                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Insira o seu email">

                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password"
                value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Password">

                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>


              <div class="form-group mb-4">
                <label for="password_confirmation">Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation" autofocus placeholder="Confirme a Password">

                 @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

            <div class="form-group mb-4">
                <label for="birthdate">Data de Nascimento</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus placeholder="escreve a tua birthdate">

                 @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>


            <div class="form-group mb-4">
                <label for="nif">NIF</label>
                <input type="number" name="nif" id="nif" class="form-control @error('nif') is-invalid @enderror" name="nif"
                value="{{ old('nif') }}" required autocomplete="nif" autofocus placeholder="Insira o seu NIF">

                 @error('nif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>


              <div class="form-group mb-4">
                <label for="contact">Contacto</label>
                <input type="number" name="contact" id="contact" class="form-control @error('contact') is-invalid @enderror" name="contact"
                value="{{ old('contact') }}" required autocomplete="contact" autofocus placeholder="Contacto">

                 @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-group mb-4">
                <div class="form-check">
                    <input type="radio" name="gender" id="genderM" value="M" class="form-check-input @error('gender') is-invalid @enderror" name="gender"
                    value="{{ old('gender') }}" required autocomplete="gender" autofocus placeholder="escreve a tua gender">
                    <label class="form-check-label" for="genderM">Masculino</label>
                    <br/>
                    <input type="radio" name="gender" id="genderF" value="x" class="form-check-input @error('gender') is-invalid @enderror" name="gender"
                    value="{{ old('gender') }}" required autocomplete="gender" autofocus placeholder="escreve a tua gender">
                    <label class="form-check-label" for="genderF">Feminino</label>
                </div>


                 @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>


              <div class="form-group mb-4">
                <label for="image">Imagem</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


              <input name="login" id="login" class="btn btn-block btn-danger" type="submit" value="Registar">
              <br>
              <p>Já tem conta? <a href="{{route('login')}}" class="text-reset">Dê login</a></p>
            </form>


          </div>
          @endsection
