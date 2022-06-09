@extends('theme.dashboard')

@section('content')
    <div class="container mt-3 w-100">
        <div class="w-100 header-title">
            <h4 class="fw-700 text-center mb-3">LIST EVENT</h4>

            <!-- search -->
            <div class="w-100 mt-5 header-title">
                <form action="{{route('event.search')}}" method="GET" class="gap-2 w-100 d-flex align-items-center">
                    <div class="form-group m-0 w-100">
                        <input type="text" name="search" placeholder="What are you looking for?" class="form-control" >
                    </div>
                    <input type="submit" value="Search" class="btn btn-primary">
                </form>
            </div>
            <!-- search -->

            <div class="d-flex gap-2 flex-wrap mt-5">
                @if(count($events) > 0)
                    @foreach($events as $event)
                    <a href="{{route('event.detail', $event->id)}}" class="w-14 h-10 position-relative shadow-btn hover-btn overflow-hidden d-flex justify-content-center align-items-center border rounded item-event">
                        <img src="{{asset(asset('storage/'.($event->images->first->image->image == null ? 'events/event.png' : $event->images->first->image->image)))}}" class="mx-w-100 h-100 object-fit-cover" alt="">
                        <span class="position-absolute bottom-0 left-0 p-2 fs-1 w-100 fw-700 bg-light">
                            <span>{{$event->name}}</span>
                        </span>
                    </a>
                    @endforeach
                @else
                    <div class="w-100 pt-5 mt-5">
                        <h4 class="fw-500 text-center text-secondary mt-5">Event Not Found</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection