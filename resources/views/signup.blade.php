@extends('layouts.main')
@section('content')
    <div class="form-signin mx-auto mt-5" style="max-width: 300px;">
        <form method="POST" action=" {{ route('signup') }} ">
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

            <div class="form-floating mb-2">
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                    placeholder="email@example.com" value={{ old('email') }}>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                    name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control {{ $errors->has('firstName') ? 'is-invalid' : '' }}"
                    name="firstName" value={{ old('firstName') }}>
                <label for="floatingInput">First name</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control {{ $errors->has('lastName') ? 'is-invalid' : '' }}"
                    name="lastName" value={{ old('lastName') }}>
                <label for="floatingInput">Last name</label>
            </div>

            <input type="hidden" name="_token" value="{{ Session::token() }}">

            <button class="btn btn-primary w-100 py-2 mb-2" type="submit">Sign up</button>
            <a class="btn btn-primary w-100 py-2" href="{{ route('signin') }}">Sign in</a>
        </form>
    </div>
@endsection
