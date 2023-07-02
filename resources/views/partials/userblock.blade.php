<div class="media">
    <a href="#" class="pull-left">
        <img class="media-object" alt="image" src="">
    </a>
    <div class="media-body">
        <h5 class="media-heading"><a href="#">{{ $user->getNameOrUsername() }}</a></h5>
        @if ($user->location)
            <p>{{ $user->location }}</p>            
        @endif
    </div>
</div>
