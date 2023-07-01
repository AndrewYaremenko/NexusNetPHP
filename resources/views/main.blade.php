@extends('layouts.main')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <p>@include('partials.alerts')</p>
                <h1 class="fw-light">NexusNet</h1>
                <p class="lead text-body-secondary">Discover the power of NexusNet, a simple and intuitive social network
                    designed to connect people worldwide. Share your thoughts, ideas, and experiences with a vibrant
                    community. Stay informed, make new friends, and explore a world of possibilities.</p>
                    <a class="btn btn-primary w-25 py-2" href="{{ route('signup') }}">Let's go!</a>
            </div>
        </div>
    </section>
@endsection
