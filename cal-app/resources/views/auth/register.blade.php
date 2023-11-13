@extends('layout.auth')
@section('auth')
     
<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-signin w-100 m-auto">
      <form action="/register" method="POST">
        @csrf
        
        <h1 class="h3 mb-3 fw-normal text-center">Please Register First!</h1>
    
        <div class="form-floating">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required>
          <label for="name">Nama Lengkap</label>
          @error('name')
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            {{  $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" required>
          <label for="username">Username</label>
          @error('username')
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            {{  $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" >
          <label for="password">Password</label>
          @error('password')
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            {{  $message }}
          </div>
          @enderror
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        

      </form>
      <small class="d-block mt-3 text-center">
        Have registed? <a href="/login">Login Now!</a>
      </small>
    </main>
  </div>
</div>

      @endsection