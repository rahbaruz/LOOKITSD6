<header class="px-16rem d-flex justify-content-between align-items-center py-4 bg-primary z-20">
    <h2 class="fw-800 m-0 text-light">LookITS</h2>

    @auth()
    <div class="d-flex gap-4 align-items-center">
        <div class="d-flex gap-4 align-items-center">
            <a href="{{route('my')}}" class="text-light">Home</a>
            <a href="{{route('profile')}}" class="text-light">Profile</a>
            <a href="{{route('event.all')}}" class="text-light">Events</a>
            <a href="{{route('event')}}" class="text-light" id="my_events_nav">My Events</a>
            <a href="{{route('category')}}" class="text-light">Categories</a>
        </div>
        
        <a href="{{route('sign_out')}}" class="text-light ml-5">Sign Out</a>
    </div>
    @endauth
</header>