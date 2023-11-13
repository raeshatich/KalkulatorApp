@extends('layout.auth')
@section('auth')
     
<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-signin w-100 m-auto">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif 

      <form action="/login" method="post">
        @csrf
        
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
    
        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" autofocus required>
          <label for="username">Username</label>
          @error('username')
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            {{  $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      

      </form>
      <small class="d-block mt-3 text-center">
        Not Registered? <a href="/register">Register Now!</a>
      </small>
    </main>
  </div>
</div>

      @endsection