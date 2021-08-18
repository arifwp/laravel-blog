@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">

    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      
      <form action="/register" method="post">
      @csrf
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="floatingName" placeholder="Name" name="name" value="{{ old('name') }}" required>
          <label for="floatingName">Nama</label>
            @error('name')
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingUsername" placeholder="Username" name="username" value="{{ old('username') }}" required>
          <label for="floatingUsername">Username</label>
            @error('username')
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
          <label for="floatingEmail">Email address</label>
            @error('email')
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required>
          <label for="floatingPassword">Password</label>
            @error('password')
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>

    <small class="d-block mt-3 text-center">Already registered? <a href="/login">Login</a></small>

    </main>

  </div>
</div>


@endsection