@extends('layouts.main')

@section('content')

    <div class="row justify-content-center form-signin">
        <div class="col-md-4">

            @if (session()->has('LoginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('LoginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            
            <main class="form-sign shadow">
                <form action="/login" method="POST">
                @csrf
                  <h1 class="h3 mb-5 fw-normal text-center">LOGIN</h1>
              
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" @error('email') is-invalid @enderror id="email" name="email" autofocus required value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback d-block">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <label for="password">Password</label>
                  </div>
                  <button class="btn w-100 py-2 mt-5" type="submit">Login</button>
                </form>
              </main>
        </div>
    </div>

@endsection