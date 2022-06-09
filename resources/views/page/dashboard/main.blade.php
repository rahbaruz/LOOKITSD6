@extends('theme.dashboard')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-between header-title">
            <div>
                <h2 class="fw-700">Welcome aboard !</h2>
                <h2 class="text-primary fw-700">{{$user->name}}</h2>
            </div>

            <div class="card p-2 w-4 h-4 d-flex align-items-center justify-content-center">
                <svg width="60" viewBox="0 0 76 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M72.3062 12.725L39.3062 0.725031C38.4572 0.424176 37.5427 0.424176 36.6937 0.725031L3.76248 12.6875H3.69373L3.52185 12.7625L3.3156 12.875L3.07498 12.9875L2.93748 13.0625L2.73123 13.2125L2.6281 13.2875L2.42185 13.4375C2.42185 13.4574 2.41461 13.4765 2.40172 13.4906C2.38882 13.5046 2.37134 13.5125 2.3531 13.5125L2.11248 13.7375C2.11248 13.7475 2.10886 13.757 2.10241 13.764C2.09596 13.7711 2.08722 13.775 2.0781 13.775L1.83748 14.075L1.76873 14.1875C1.73283 14.2127 1.70208 14.2456 1.67842 14.2844C1.65475 14.3231 1.63869 14.3667 1.63123 14.4125L1.5281 14.525L1.42498 14.7125C1.3906 14.7875 1.35623 14.825 1.35623 14.8625L1.2531 15.0875L1.18435 15.2375L1.08123 15.575C1.05795 15.6209 1.0461 15.6726 1.04685 15.725C1.00864 15.8069 0.985294 15.896 0.978102 15.9875C0.978102 16.025 0.943728 16.1 0.943728 16.1375C0.943728 16.175 0.909353 16.325 0.909353 16.4V16.55C0.877655 16.6974 0.866072 16.849 0.874977 17V47C0.874977 48.1935 1.30957 49.3381 2.08316 50.182C2.85675 51.0259 3.90596 51.5 4.99998 51.5C6.09399 51.5 7.1432 51.0259 7.91679 50.182C8.69038 49.3381 9.12498 48.1935 9.12498 47V23.225L17.2718 26.225C14.7566 31.4814 14.0019 37.5305 15.1377 43.329C16.2736 49.1275 19.2288 54.3118 23.4937 57.9875C17.6584 60.9491 12.7034 65.6399 9.19373 71.525C8.89579 72.0199 8.69013 72.574 8.58849 73.1557C8.48684 73.7373 8.49121 74.3351 8.60133 74.9148C8.71146 75.4946 8.92518 76.0451 9.23031 76.5348C9.53544 77.0244 9.92599 77.4438 10.3797 77.7688C10.8333 78.0938 11.3413 78.3182 11.8744 78.429C12.4076 78.5399 12.9555 78.5352 13.487 78.415C14.0185 78.2949 14.523 78.0617 14.9719 77.7289C15.4208 77.396 15.8052 76.97 16.1031 76.475C18.4701 72.4894 21.7136 69.2132 25.5381 66.9449C29.3627 64.6766 33.6467 63.4884 38 63.4884C42.3532 63.4884 46.6372 64.6766 50.4618 66.9449C54.2864 69.2132 57.5299 72.4894 59.8968 76.475C60.2772 77.0991 60.7934 77.6107 61.3993 77.964C62.0051 78.3174 62.6817 78.5015 63.3687 78.5C64.1608 78.5015 64.9364 78.2541 65.6031 77.7875C66.5214 77.1288 67.1633 76.1004 67.3888 74.927C67.6142 73.7536 67.4048 72.5305 66.8062 71.525C63.2966 65.6399 58.3415 60.9491 52.5062 57.9875C56.7711 54.3118 59.7264 49.1275 60.8622 43.329C61.9981 37.5305 61.2433 31.4814 58.7281 26.225L72.3062 21.275C73.1315 20.9791 73.8501 20.4065 74.3595 19.6389C74.8689 18.8712 75.1432 17.9477 75.1432 17C75.1432 16.0523 74.8689 15.1288 74.3595 14.3612C73.8501 13.5935 73.1315 13.0209 72.3062 12.725V12.725ZM38 9.72503L57.9718 17L50.8218 19.5875L38 24.275L25.1781 19.5875L18.0281 17L38 9.72503ZM53.125 38C53.1226 40.5609 52.5739 43.086 51.5222 45.3755C50.4705 47.665 48.9448 49.656 47.0657 51.191C45.1867 52.7259 43.0059 53.7627 40.6961 54.2191C38.3862 54.6756 36.0106 54.5393 33.7574 53.821C31.5042 53.1027 29.4352 51.822 27.7141 50.0805C25.9931 48.339 24.6672 46.1843 23.8415 43.7871C23.0158 41.3899 22.7129 38.8159 22.9569 36.2689C23.2008 33.7219 23.9848 31.2718 25.2468 29.1125L36.6937 33.275C37.5427 33.5759 38.4572 33.5759 39.3062 33.275L50.7531 29.1125C52.3102 31.7648 53.1337 34.8504 53.125 38V38Z" fill="#2C249A"/>
                </svg>
            </div>
        </div>
        
        <div class="w-100 mt-5">
            <h4 class="fw-700 text-center">KATEGORI</h4>

            <div class="d-flex justify-content-center gap-3 mt-4 list-categories">
                @foreach($categories as $category)
                <a href="{{route('category.detail', $category->id)}}" class="card p-2 hover-btn shadow-btn w-6 h-6 d-flex flex-column align-items-center justify-content-between">
                    <img src="{{asset('storage/'.$category->icon)}}" class="object-fit-cover mx-w-100 h-100" alt="">
                    <span class="fs-smal">{{$category->category}}</span>
                </a>
                @endforeach
                
                <a href="{{route('category')}}" class="card p-2 hover-btn shadow-btn w-6 h-6 d-flex flex-column align-items-center justify-content-between">                                
                    <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.5125 3.58333C11.6261 3.58333 3.59946 11.61 3.59946 21.4964C3.59946 31.381 11.6261 39.4077 21.5125 39.4077C31.399 39.4077 39.4256 31.381 39.4256 21.4964C39.4256 11.61 31.399 3.58333 21.5125 3.58333V3.58333ZM24.2412 14.7096C24.2412 14.7096 26.9323 17.406 30.0731 20.5486C30.3365 20.812 30.4673 21.156 30.4673 21.5C30.4673 21.844 30.3365 22.1862 30.0731 22.4496C26.9323 25.5922 24.243 28.2868 24.243 28.2868C23.9832 28.5466 23.6428 28.6756 23.3006 28.6756C22.9566 28.6738 22.6126 28.543 22.3492 28.2797C21.8261 27.7547 21.8225 26.9072 22.3439 26.3859L25.886 22.8437H13.8944C13.1526 22.8437 12.5506 22.2417 12.5506 21.5C12.5506 20.7582 13.1526 20.1562 13.8944 20.1562H25.886L22.3421 16.6105C21.8225 16.0927 21.8279 15.2453 22.3528 14.7221C22.6162 14.4587 22.9602 14.3262 23.3024 14.3244C23.6428 14.3244 23.9832 14.4516 24.2412 14.7096V14.7096Z" fill="#382EB4"/>
                    </svg>
                    <span class="fs-smal">Show All</span>
                </a>

            </div>
        </div>

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

        <div class="w-100 mt-5 header-title">
            <div class="d-flex justify-content-between w-100 align-items-center ">
                <h4 class="m-0">EXPLORE</h4>
                <a href="{{route('event.all')}}" class="text-decoration-underline">See all</a>
            </div>

            <div class="d-flex gap-2 flex-wrap mt-3">
                @foreach($events as $event)
                <a href="{{route('event.detail', $event->id)}}" class="w-14 h-10 position-relative shadow-btn hover-btn overflow-hidden d-flex justify-content-center align-items-center border rounded item-event">
                    <img src="{{asset(asset('storage/'.($event->images->first->image->image == null ? 'events/event.png' : $event->images->first->image->image)))}}" class="mx-w-100 h-100 object-fit-cover" alt="">
                    <span class="position-absolute bottom-0 left-0 p-2 fs-1 w-100 fw-700 bg-light">
                        <span>{{$event->name}}</span>
                    </span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
