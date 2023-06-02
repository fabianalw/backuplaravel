@extends('layouts.main')

@section('container')
<div class="row justify-content-center pt-5">
  <div class="col-md-4">

    

    
    {{-- FORM LOGIN --}}
    <main class="form-signin w-100 m-auto">
      <div class="text-center">
        <img class="mb-4" src="" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
      </div>
          {{-- alert success --}}
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          {{-- alert failed --}}
          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        <form action="/login" method="post">
          @csrf

          {{-- Form Email --}}
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Email Address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          {{-- Form Password --}}
          <div class="form-floating">
            <input type="password" name="password"class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>

          {{-- Tombol Login --}}
          <button class="btn btn-primary w-100 py-2" type="submit"> Login</button>

        </form>

        {{-- halaman register --}}
        <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
    </main>
  </div>
</div>
@endsection