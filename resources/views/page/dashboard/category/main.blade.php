@extends('theme.dashboard')

@section('content')
    <div class="container mt-3 w-100">
        <h4 class="fw-700 text-center">LIST CATEGORY</h4>

        @if($user->role == "organization")
            <div class="d-flex justify-content-end">
                <a href="{{route('category.add')}}" class="btn btn-primary mt-4">Add Categories</a>
            </div>
        @endif

        <hr class="mb-4 mt-2">

        <div class="d-flex flex-wrap w-100 mt-4 gap-3">
            @foreach($categories as $category)
                <a href="{{route('category.detail', $category->id)}}" class="d-flex p-2 shadow-btn card w-10 h-10 flex-column align-items-center justify-content-between position-relative">
                    <div class="w-100 h-100 overflow-hidden d-flex border rounded flex-column align-items-center justify-content-center">
                        <img src="{{asset('storage/'.$category->icon)}}" class="object-fit-cover mx-w-100 h-100" alt="">
                    </div>
                    <div class="fs-smal mt-1 text-black">{{$category->category}}</div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
