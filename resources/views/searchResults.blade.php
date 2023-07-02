@extends('layouts.main')
@section('content')
    <div class="mt-4">
        <h4>Your search for "{{ Request::input('query') }}"</h4>

        @if (!$users->count())
            <p>No results found, sorry :(</p>
        @endif

        <div class="row">
            <div class="col-lg-12">

                @foreach ($users as $user)
                    @include('partials.userblock')
                @endforeach


            </div>
        </div>
    </div>
@endsection
