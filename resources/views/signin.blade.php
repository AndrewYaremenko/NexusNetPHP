@extends('layouts.main')
@section('content')
    <div class="form-signin mx-auto mt-5" style="max-width: 300px;">
        <form method="POST" action=" {{ route('signin') }} ">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-2">
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                    placeholder="email@example.com" name="email" value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                    placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="mb-2 checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <input type="hidden" name="_token" value="{{ Session::token() }}">

            <button class="btn btn-primary w-100 py-2 mb-2" type="submit">Sign in</button>
            <a class="btn btn-primary w-100 py-2" href="{{ route('signup') }}">Sign up</a>
        </form>
    </div>
@endsection
