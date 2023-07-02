<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">

        <div class="navbar-nav">
            <a href="{{ route('home') }}" class="text-decoration-none mt-1"><span
                    class="navbar-brand ms-2">NexusNet</span></a>
            @if (Auth::check())
                <a class="nav-link me-3 text-decoration-none" href="{{ route('signup') }}">Timeline</a>
                <a class="nav-link me-3 text-decoration-none" href="{{ route('signup') }}">Friends</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        value="Find people">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            @endif
        </div>
        <div class="navbar-nav">
            @if (Auth::check())
                <a class="nav-link me-3 text-decoration-none" href="{{ route('signup') }}">{{ Auth::user()->getNameOrUsername() }}</a>
                <a class="nav-link me-3 text-decoration-none" href="{{ route('signup') }}">Update profile</a>
                <a class="nav-link me-3 text-decoration-none" href="{{ route('signout') }}">Sign out</a>
            @else
                <a href="{{ route('signup') }}"><button class="btn btn-outline-success me-3">Sign up</button></a>
                <a href="{{ route('signin') }}"><button class="btn btn-outline-success me-3">Sign in</button></a>
            @endif
        </div>
    </div>
</nav>
