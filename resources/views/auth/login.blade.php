@extends('layouts.login')
@section('content')

<form class="pt-3" method="POST" action="{{ route('login') }}">
  @csrf
  <p class="auth-description">Por favor, inicie sesion para ingresar al panel de administrador</p>
  <div class="auth-credentials m-b-xxl">

    <div class="form-group">
      <label for="signInEmail" class="form-label">Dirección de correo electrónico</label>
      <div class="input-group has-validation">
        <span class="material-icons input-group-text" id="inputGroupPrepend">email</span>
        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="inputGroupPrepend" placeholder="example@gmail.com">
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <label for="signInPassword" class="form-label">Contraseña</label>
      <div class="input-group has-validation">
        <span class="material-icons input-group-text" id="inputGroupPrepend">lock</span>
        <input id="signInPassword" type="password" name="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
        @error('password')
        <div class="valid-feedback" role="alert">
          {{ $message }}
        </div>
        @enderror
      </div>
    </div>

  </div>


  <div class="auth-submit">
    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
    <a href="#" class="auth-forgot-password float-end">¿Has olvidado tu contraseña?</a>
  </div>

</form>
@endsection