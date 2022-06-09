@extends('theme.dashboard')

@section('content')
    <div class="container mt-3">
        <div class="w-100">
            <div class="w-100 position-relative">
                <h4 class="fw-700 text-center">ADD CATEGORY</h4>
                <button type="button" class="btn btn-outline-primary position-absolute right-0 top-0 btn-sm hover-btn" data-container="body" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Recomendation size icon svg: 34x43">
                    <svg width="20" viewBox="0 0 49 48" fill="#2C249A" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.4583 18H26.5416V14H22.4583V18ZM24.4999 40C15.4962 40 8.16659 32.82 8.16659 24C8.16659 15.18 15.4962 8 24.4999 8C33.5037 8 40.8333 15.18 40.8333 24C40.8333 32.82 33.5037 40 24.4999 40ZM24.4999 4C21.8188 4 19.1639 4.51732 16.6868 5.52241C14.2097 6.5275 11.959 8.00069 10.0632 9.85786C6.23429 13.6086 4.08325 18.6957 4.08325 24C4.08325 29.3043 6.23429 34.3914 10.0632 38.1421C11.959 39.9993 14.2097 41.4725 16.6868 42.4776C19.1639 43.4827 21.8188 44 24.4999 44C29.9148 44 35.1078 41.8929 38.9367 38.1421C42.7656 34.3914 44.9166 29.3043 44.9166 24C44.9166 21.3736 44.3885 18.7728 43.3625 16.3463C42.3364 13.9198 40.8325 11.715 38.9367 9.85786C37.0408 8.00069 34.7901 6.5275 32.313 5.52241C29.836 4.51732 27.1811 4 24.4999 4V4ZM22.4583 34H26.5416V22H22.4583V34Z"/>
                    </svg>
                </button> 
            </div>
            <form action="{{route('category.add')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex mt-5 align-items-center justify-content-between">
                    <div class="d-flex gap-3 w-100">
                        <div class="form-group m-0 col-lg-9">
                            <input type="text" name="category" required class="form-control w-100">
                        </div>
                        <div class="form-group m-0">
                            <input type="file" required class="d-none" name="icon" id="input-event-image">
                            <label for="input-event-image" role="button" class="gap-1 btn btn-outline-primary m-0 d-flex align-items-center justify-content-center">
                                <span>Add Picture</span>
                            </label>
                        </div>
                    </div>
    
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>


            <div class="mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col text-center">No</th>
                            <th scope="col text-center">Name Category</th>
                            <th scope="col text-center">Image</th>
                            <th scope="col text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$category->category}}</td>
                            <td>
                                <div class="w-6 h-6 border rounded overflow-hidden d-flex align-items-center justify-content-center">
                                    <img src="{{asset('storage/'.$category->icon)}}" class="object-fit-cover mx-w-100 h-100" alt="">
                                </div>
                            </td>
                            <td class="d-flex gap-1">
                                <a href="{{route('category.delete', $category->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('custom_js')

<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    $('.popover-dismiss').popover({
        trigger: 'focus'
    })
</script>

@endsection
