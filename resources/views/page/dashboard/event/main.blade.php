@extends('theme.dashboard')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-between header-title">
            <div>
                <h2 class="fw-700">Welcome aboard !</h2>
                <h2 class="text-primary fw-700">{{$user->name}}</h2>
            </div>

            <div class="card p-2 w-4 h-4 d-flex align-items-center justify-content-center">
                <svg width="60" viewBox="0 0 63 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5312 12.5C18.5318 10.1349 19.2284 7.81853 20.5402 5.81983C21.852 3.82112 23.7252 2.22213 25.9423 1.20859C28.1593 0.195036 30.6291 -0.191484 33.065 0.0939169C35.5008 0.379318 37.8027 1.32493 39.7032 2.82092C41.6037 4.31691 43.0249 6.30189 43.8017 8.54532C44.5785 10.7888 44.6791 13.1986 44.0917 15.4949C43.5043 17.7912 42.2531 19.8798 40.4833 21.518C38.7136 23.1563 36.4979 24.277 34.0938 24.75V30H45.1639C49.0753 30 52.25 33.06 52.25 36.835V45.25C55.3989 45.8696 58.197 47.594 60.1018 50.089C62.0066 52.584 62.8824 55.6718 62.5593 58.7538C62.2363 61.8358 60.7375 64.6924 58.3535 66.7699C55.9695 68.8473 52.8701 69.9975 49.6563 69.9975C46.4424 69.9975 43.343 68.8473 40.959 66.7699C38.575 64.6924 37.0762 61.8358 36.7532 58.7538C36.4302 55.6718 37.3059 52.584 39.2107 50.089C41.1155 47.594 43.9136 45.8696 47.0625 45.25V36.835C47.0625 36.3492 46.8626 35.8832 46.5067 35.5392C46.1508 35.1953 45.6679 35.0013 45.1639 35H17.8413C17.5913 35 17.3437 35.0475 17.1128 35.1397C16.8818 35.2319 16.6719 35.3671 16.4951 35.5375C16.3183 35.7079 16.1781 35.9102 16.0824 36.1328C15.9867 36.3554 15.9375 36.594 15.9375 36.835V45.25C19.0864 45.8696 21.8845 47.594 23.7893 50.089C25.6941 52.584 26.5699 55.6718 26.2468 58.7538C25.9238 61.8358 24.425 64.6924 22.041 66.7699C19.657 68.8473 16.5576 69.9975 13.3438 69.9975C10.1299 69.9975 7.03052 68.8473 4.64651 66.7699C2.2625 64.6924 0.763692 61.8358 0.44067 58.7538C0.117649 55.6718 0.993424 52.584 2.89821 50.089C4.80299 47.594 7.60108 45.8696 10.75 45.25V36.835C10.75 33.06 13.9248 30 17.8413 30H28.9063V24.75C25.977 24.1737 23.3442 22.6396 21.4536 20.4073C19.563 18.175 18.5306 15.3816 18.5312 12.5Z" fill="#2C249A"/>
                </svg>
            </div>
        </div>
        
        <div class="w-100 mt-5 header-title">
            <h4 class="fw-700 text-center">MY EVENT</h4>

        </div>
        <div class="w-100 mt-4 header-title">
            <a href="{{route('event.add')}}" class="btn btn-primary w-100 d-flex align-items-center gap-1 justify-content-center">
                <span>ADD EVENT</span>
                <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="13" viewBox="0 0 24 24"><path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/></svg>
            </a>
        </div>
        
        <div class="w-100 mt-3 header-title">
            <div class="d-flex align-items-center justify-content-between">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Ongoing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Past</a>
                    </li>
                </ul>

                <a href="" class="text-decoration-underline">See All</a>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <!-- ongoing -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    
                    @foreach($events as $event)
                        @if($event->active < 2)
                        <div class="card shadow-btn mt-3 p-3 w-100 d-flex flex-row gap-4 card-item">
                            <div class="border rounded w-10 h-7 overflow-hidden d-flex align-items-center justify-content-center col-lg-3 card-img">
                                <img src="{{asset(asset('storage/'.($event->images->first->image->image == null ? 'events/event.png' : $event->images->first->image->image)))}}" alt="image event" id="event-image" class="max-w-100 h-100 object-fit-cover">
                            </div>

                            <div class="col-lg-8 d-flex flex-column">
                                <div class="w-100">
                                    <h4 class="text-center">{{$event->name}}</h4>
                                </div>
                                <div>
                                    <hr class="my-1 border border-dark ">
                                </div>
                                <div class="h-100 d-flex">
                                    <div class="col-6">
                                        <p class="text-primary text-center w-100 mb-1" style="font-family: 'Poppins', sans-serif;">{{$event->start_event}}</p>
                                        <div class="d-flex justify-content-center gap-3">
                                            <a href="{{route('event.detail', $event->id)}}" class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.125 5.54167H8.70833V3.95833H7.125V5.54167ZM7.91667 14.25C4.42542 14.25 1.58333 11.4079 1.58333 7.91667C1.58333 4.42542 4.42542 1.58333 7.91667 1.58333C11.4079 1.58333 14.25 4.42542 14.25 7.91667C14.25 11.4079 11.4079 14.25 7.91667 14.25ZM7.91667 0C6.87704 0 5.84758 0.204771 4.88709 0.60262C3.9266 1.00047 3.05387 1.58361 2.31874 2.31874C0.834075 3.8034 0 5.81704 0 7.91667C0 10.0163 0.834075 12.0299 2.31874 13.5146C3.05387 14.2497 3.9266 14.8329 4.88709 15.2307C5.84758 15.6286 6.87704 15.8333 7.91667 15.8333C10.0163 15.8333 12.0299 14.9993 13.5146 13.5146C14.9993 12.0299 15.8333 10.0163 15.8333 7.91667C15.8333 6.87704 15.6286 5.84758 15.2307 4.88709C14.8329 3.9266 14.2497 3.05387 13.5146 2.31874C12.7795 1.58361 11.9067 1.00047 10.9462 0.60262C9.98575 0.204771 8.9563 0 7.91667 0V0ZM7.125 11.875H8.70833V7.125H7.125V11.875Z" fill="#2C2C2C" fill-opacity="0.81"/>
                                                </svg>
                                            </a>
                                            <form action="{{route('event.finished', $event->id)}}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">                                        
                                                    <svg width="16" height="16" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.6684 0.382584C12.9276 0.13448 13.2725 -0.00268272 13.6304 3.97663e-05C13.9883 0.00276225 14.3311 0.145157 14.5865 0.397177C14.842 0.649196 14.9901 0.991129 14.9995 1.35082C15.009 1.71052 14.8791 2.05984 14.6372 2.32508L7.29535 11.5565C7.16911 11.6933 7.01674 11.803 6.84735 11.8791C6.67797 11.9553 6.49505 11.9963 6.30954 11.9998C6.12402 12.0032 5.93972 11.969 5.76764 11.8992C5.59557 11.8294 5.43927 11.7255 5.30807 11.5935L0.439241 6.69846C0.303652 6.57144 0.194899 6.41826 0.119471 6.24806C0.0440431 6.07786 0.00348419 5.89413 0.000214773 5.70783C-0.00305464 5.52153 0.0310325 5.33648 0.100442 5.16371C0.169851 4.99094 0.273161 4.834 0.404209 4.70225C0.535257 4.57049 0.691357 4.46663 0.863198 4.39684C1.03504 4.32706 1.2191 4.29279 1.4044 4.29608C1.5897 4.29936 1.77245 4.34014 1.94173 4.41598C2.11102 4.49181 2.26337 4.60115 2.38972 4.73747L6.24283 8.60951L12.6334 0.423284C12.6449 0.409041 12.6572 0.395453 12.6702 0.382584H12.6684Z" fill="black" fill-opacity="0.67"/>
                                                    </svg>
                                                </button>
                                            </form>
                                            <form action="{{route('event.delete', $event->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">                                        
                                                    <svg width="16" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7.3V10.8M2.5 3.8H14.5L13.315 13.754C13.2744 14.0966 13.0998 14.4131 12.8247 14.643C12.5496 14.8729 12.1933 15 11.824 15H5.176C4.80673 15 4.45042 14.8729 4.17531 14.643C3.9002 14.4131 3.72562 14.0966 3.685 13.754L2.5 3.8ZM5.00875 1.8029C5.13006 1.56278 5.32203 1.3598 5.56225 1.21764C5.80248 1.07548 6.08106 0.999997 6.3655 1H10.6345C10.9191 0.999864 11.1978 1.07528 11.4382 1.21745C11.6785 1.35962 11.8706 1.56267 11.992 1.8029L13 3.8H4L5.00875 1.8029V1.8029ZM1 3.8H16H1ZM7 7.3V10.8V7.3Z" stroke="black" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="separate"></div>
                                    <div class="col-6">
                                    <p class="text-primary text-center w-100 mb-1 text-decoration-underline">{{$event->categories->first->category->category}}</p>
                                    <h5 class="text-primary fw-700 text-weight-bold {{$event->active == 0 ? 'text-danger' : 'text-success'}} text-center w-100 mb-1">{{$event->active == 0 ? 'NOT YET STARTED' : 'ON GOING'}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach

                    <!-- <div class="card shadow-btn mt-3 p-3 w-100 d-flex flex-row gap-4 card-item">
                        <div class="border rounded w-10 h-7 overflow-hidden col-lg-3 card-img">
                        </div>

                        <div class="col-lg-8 d-flex flex-column">
                            <div class="w-100">
                                <h4 class="text-center">PLACEHOLDER EVENT NAME / TITLE</h4>
                            </div>
                            <div>
                                <hr class="my-1 border border-dark ">
                            </div>
                            <div class="h-100 d-flex">
                                <div class="col-6">
                                    <p class="text-primary text-center w-100 mb-1" style="font-family: 'Poppins', sans-serif;">dd mm yyyy</p>
                                    <div class="d-flex justify-content-center gap-3">
                                        <button class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.125 5.54167H8.70833V3.95833H7.125V5.54167ZM7.91667 14.25C4.42542 14.25 1.58333 11.4079 1.58333 7.91667C1.58333 4.42542 4.42542 1.58333 7.91667 1.58333C11.4079 1.58333 14.25 4.42542 14.25 7.91667C14.25 11.4079 11.4079 14.25 7.91667 14.25ZM7.91667 0C6.87704 0 5.84758 0.204771 4.88709 0.60262C3.9266 1.00047 3.05387 1.58361 2.31874 2.31874C0.834075 3.8034 0 5.81704 0 7.91667C0 10.0163 0.834075 12.0299 2.31874 13.5146C3.05387 14.2497 3.9266 14.8329 4.88709 15.2307C5.84758 15.6286 6.87704 15.8333 7.91667 15.8333C10.0163 15.8333 12.0299 14.9993 13.5146 13.5146C14.9993 12.0299 15.8333 10.0163 15.8333 7.91667C15.8333 6.87704 15.6286 5.84758 15.2307 4.88709C14.8329 3.9266 14.2497 3.05387 13.5146 2.31874C12.7795 1.58361 11.9067 1.00047 10.9462 0.60262C9.98575 0.204771 8.9563 0 7.91667 0V0ZM7.125 11.875H8.70833V7.125H7.125V11.875Z" fill="#2C2C2C" fill-opacity="0.81"/>
                                            </svg>
                                        </button>
                                        <button class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">                                        
                                            <svg width="16" height="16" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6684 0.382584C12.9276 0.13448 13.2725 -0.00268272 13.6304 3.97663e-05C13.9883 0.00276225 14.3311 0.145157 14.5865 0.397177C14.842 0.649196 14.9901 0.991129 14.9995 1.35082C15.009 1.71052 14.8791 2.05984 14.6372 2.32508L7.29535 11.5565C7.16911 11.6933 7.01674 11.803 6.84735 11.8791C6.67797 11.9553 6.49505 11.9963 6.30954 11.9998C6.12402 12.0032 5.93972 11.969 5.76764 11.8992C5.59557 11.8294 5.43927 11.7255 5.30807 11.5935L0.439241 6.69846C0.303652 6.57144 0.194899 6.41826 0.119471 6.24806C0.0440431 6.07786 0.00348419 5.89413 0.000214773 5.70783C-0.00305464 5.52153 0.0310325 5.33648 0.100442 5.16371C0.169851 4.99094 0.273161 4.834 0.404209 4.70225C0.535257 4.57049 0.691357 4.46663 0.863198 4.39684C1.03504 4.32706 1.2191 4.29279 1.4044 4.29608C1.5897 4.29936 1.77245 4.34014 1.94173 4.41598C2.11102 4.49181 2.26337 4.60115 2.38972 4.73747L6.24283 8.60951L12.6334 0.423284C12.6449 0.409041 12.6572 0.395453 12.6702 0.382584H12.6684Z" fill="black" fill-opacity="0.67"/>
                                            </svg>
                                        </button>
                                        <button class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">                                        
                                            <svg width="16" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 7.3V10.8M2.5 3.8H14.5L13.315 13.754C13.2744 14.0966 13.0998 14.4131 12.8247 14.643C12.5496 14.8729 12.1933 15 11.824 15H5.176C4.80673 15 4.45042 14.8729 4.17531 14.643C3.9002 14.4131 3.72562 14.0966 3.685 13.754L2.5 3.8ZM5.00875 1.8029C5.13006 1.56278 5.32203 1.3598 5.56225 1.21764C5.80248 1.07548 6.08106 0.999997 6.3655 1H10.6345C10.9191 0.999864 11.1978 1.07528 11.4382 1.21745C11.6785 1.35962 11.8706 1.56267 11.992 1.8029L13 3.8H4L5.00875 1.8029V1.8029ZM1 3.8H16H1ZM7 7.3V10.8V7.3Z" stroke="black" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="separate"></div>
                                <div class="col-6">
                                <p class="text-primary text-center w-100 mb-1 text-decoration-underline">Seminar</p>
                                <h5 class="text-primary fw-700 text-weight-bold text-danger text-center w-100 mb-1">NOT YET STARTED</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow-btn mt-3 p-3 w-100 d-flex flex-row gap-4 card-item">
                        <div class="border rounded w-10 h-7 overflow-hidden col-lg-3 card-img">
                        </div>

                        <div class="col-lg-8 d-flex flex-column">
                            <div class="w-100">
                                <h4 class="text-center">PLACEHOLDER EVENT NAME / TITLE</h4>
                            </div>
                            <div>
                                <hr class="my-1 border border-dark ">
                            </div>
                            <div class="h-100 d-flex">
                                <div class="col-6">
                                    <p class="text-primary text-center w-100 mb-1" style="font-family: 'Poppins', sans-serif;">dd mm yyyy</p>
                                    <div class="d-flex justify-content-center gap-3">
                                        <button class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.125 5.54167H8.70833V3.95833H7.125V5.54167ZM7.91667 14.25C4.42542 14.25 1.58333 11.4079 1.58333 7.91667C1.58333 4.42542 4.42542 1.58333 7.91667 1.58333C11.4079 1.58333 14.25 4.42542 14.25 7.91667C14.25 11.4079 11.4079 14.25 7.91667 14.25ZM7.91667 0C6.87704 0 5.84758 0.204771 4.88709 0.60262C3.9266 1.00047 3.05387 1.58361 2.31874 2.31874C0.834075 3.8034 0 5.81704 0 7.91667C0 10.0163 0.834075 12.0299 2.31874 13.5146C3.05387 14.2497 3.9266 14.8329 4.88709 15.2307C5.84758 15.6286 6.87704 15.8333 7.91667 15.8333C10.0163 15.8333 12.0299 14.9993 13.5146 13.5146C14.9993 12.0299 15.8333 10.0163 15.8333 7.91667C15.8333 6.87704 15.6286 5.84758 15.2307 4.88709C14.8329 3.9266 14.2497 3.05387 13.5146 2.31874C12.7795 1.58361 11.9067 1.00047 10.9462 0.60262C9.98575 0.204771 8.9563 0 7.91667 0V0ZM7.125 11.875H8.70833V7.125H7.125V11.875Z" fill="#2C2C2C" fill-opacity="0.81"/>
                                            </svg>
                                        </button>
                                        <button class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">                                        
                                            <svg width="16" height="16" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6684 0.382584C12.9276 0.13448 13.2725 -0.00268272 13.6304 3.97663e-05C13.9883 0.00276225 14.3311 0.145157 14.5865 0.397177C14.842 0.649196 14.9901 0.991129 14.9995 1.35082C15.009 1.71052 14.8791 2.05984 14.6372 2.32508L7.29535 11.5565C7.16911 11.6933 7.01674 11.803 6.84735 11.8791C6.67797 11.9553 6.49505 11.9963 6.30954 11.9998C6.12402 12.0032 5.93972 11.969 5.76764 11.8992C5.59557 11.8294 5.43927 11.7255 5.30807 11.5935L0.439241 6.69846C0.303652 6.57144 0.194899 6.41826 0.119471 6.24806C0.0440431 6.07786 0.00348419 5.89413 0.000214773 5.70783C-0.00305464 5.52153 0.0310325 5.33648 0.100442 5.16371C0.169851 4.99094 0.273161 4.834 0.404209 4.70225C0.535257 4.57049 0.691357 4.46663 0.863198 4.39684C1.03504 4.32706 1.2191 4.29279 1.4044 4.29608C1.5897 4.29936 1.77245 4.34014 1.94173 4.41598C2.11102 4.49181 2.26337 4.60115 2.38972 4.73747L6.24283 8.60951L12.6334 0.423284C12.6449 0.409041 12.6572 0.395453 12.6702 0.382584H12.6684Z" fill="black" fill-opacity="0.67"/>
                                            </svg>
                                        </button>
                                        <button class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">                                        
                                            <svg width="16" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 7.3V10.8M2.5 3.8H14.5L13.315 13.754C13.2744 14.0966 13.0998 14.4131 12.8247 14.643C12.5496 14.8729 12.1933 15 11.824 15H5.176C4.80673 15 4.45042 14.8729 4.17531 14.643C3.9002 14.4131 3.72562 14.0966 3.685 13.754L2.5 3.8ZM5.00875 1.8029C5.13006 1.56278 5.32203 1.3598 5.56225 1.21764C5.80248 1.07548 6.08106 0.999997 6.3655 1H10.6345C10.9191 0.999864 11.1978 1.07528 11.4382 1.21745C11.6785 1.35962 11.8706 1.56267 11.992 1.8029L13 3.8H4L5.00875 1.8029V1.8029ZM1 3.8H16H1ZM7 7.3V10.8V7.3Z" stroke="black" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="separate"></div>
                                <div class="col-6">
                                <p class="text-primary text-center w-100 mb-1 text-decoration-underline">Theatrics</p>
                                <h5 class="text-primary fw-700 text-weight-bold text-danger text-center w-100 mb-1">NOT YET STARTED</h5>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
                <!-- /ongoing -->
                

                <!-- past -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @foreach($events as $event)
                        @if($event->active == 2)
                    <div class="card shadow-btn mt-3 p-3 w-100 d-flex flex-row gap-4 card-item">
                        <div class="border rounded w-10 h-7 overflow-hidden d-flex align-items-center justify-content-center col-lg-3 card-img">
                            <img src="{{asset(asset('storage/'.($event->images->first->image->image == null ? 'events/event.png' : $event->images->first->image->image)))}}" alt="image event" id="event-image" class="max-w-100 h-100 object-fit-cover">
                        </div>

                        <div class="col-lg-8 d-flex flex-column">
                            <div class="w-100">
                                <h4 class="text-center">{{$event->name}}</h4>
                            </div>
                            <div>
                                <hr class="my-1 border border-dark ">
                            </div>
                            <div class="h-100 d-flex">
                                <div class="col-6">
                                    <p class="text-primary text-center w-100 mb-1" style="font-family: 'Poppins', sans-serif;">{{$event->start_event}}</p>
                                    <div class="d-flex justify-content-center gap-3">
                                        <a href="{{route('event.detail', $event->id)}}" class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.125 5.54167H8.70833V3.95833H7.125V5.54167ZM7.91667 14.25C4.42542 14.25 1.58333 11.4079 1.58333 7.91667C1.58333 4.42542 4.42542 1.58333 7.91667 1.58333C11.4079 1.58333 14.25 4.42542 14.25 7.91667C14.25 11.4079 11.4079 14.25 7.91667 14.25ZM7.91667 0C6.87704 0 5.84758 0.204771 4.88709 0.60262C3.9266 1.00047 3.05387 1.58361 2.31874 2.31874C0.834075 3.8034 0 5.81704 0 7.91667C0 10.0163 0.834075 12.0299 2.31874 13.5146C3.05387 14.2497 3.9266 14.8329 4.88709 15.2307C5.84758 15.6286 6.87704 15.8333 7.91667 15.8333C10.0163 15.8333 12.0299 14.9993 13.5146 13.5146C14.9993 12.0299 15.8333 10.0163 15.8333 7.91667C15.8333 6.87704 15.6286 5.84758 15.2307 4.88709C14.8329 3.9266 14.2497 3.05387 13.5146 2.31874C12.7795 1.58361 11.9067 1.00047 10.9462 0.60262C9.98575 0.204771 8.9563 0 7.91667 0V0ZM7.125 11.875H8.70833V7.125H7.125V11.875Z" fill="#2C2C2C" fill-opacity="0.81"/>
                                            </svg>
                                        </a>
                                        <form action="{{route('event.finished', $event->id)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">                                        
                                                <svg width="16" height="16" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6684 0.382584C12.9276 0.13448 13.2725 -0.00268272 13.6304 3.97663e-05C13.9883 0.00276225 14.3311 0.145157 14.5865 0.397177C14.842 0.649196 14.9901 0.991129 14.9995 1.35082C15.009 1.71052 14.8791 2.05984 14.6372 2.32508L7.29535 11.5565C7.16911 11.6933 7.01674 11.803 6.84735 11.8791C6.67797 11.9553 6.49505 11.9963 6.30954 11.9998C6.12402 12.0032 5.93972 11.969 5.76764 11.8992C5.59557 11.8294 5.43927 11.7255 5.30807 11.5935L0.439241 6.69846C0.303652 6.57144 0.194899 6.41826 0.119471 6.24806C0.0440431 6.07786 0.00348419 5.89413 0.000214773 5.70783C-0.00305464 5.52153 0.0310325 5.33648 0.100442 5.16371C0.169851 4.99094 0.273161 4.834 0.404209 4.70225C0.535257 4.57049 0.691357 4.46663 0.863198 4.39684C1.03504 4.32706 1.2191 4.29279 1.4044 4.29608C1.5897 4.29936 1.77245 4.34014 1.94173 4.41598C2.11102 4.49181 2.26337 4.60115 2.38972 4.73747L6.24283 8.60951L12.6334 0.423284C12.6449 0.409041 12.6572 0.395453 12.6702 0.382584H12.6684Z" fill="black" fill-opacity="0.67"/>
                                                </svg>
                                            </button>
                                        </form>

                                        <form action="{{route('event.delete', $event->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="h-2 w-2 border-none shadow-sm hover-btn d-flex justify-content-center align-items-center rounded-circle" style="background-color: #e1e1e1;">                                        
                                                <svg width="16" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 7.3V10.8M2.5 3.8H14.5L13.315 13.754C13.2744 14.0966 13.0998 14.4131 12.8247 14.643C12.5496 14.8729 12.1933 15 11.824 15H5.176C4.80673 15 4.45042 14.8729 4.17531 14.643C3.9002 14.4131 3.72562 14.0966 3.685 13.754L2.5 3.8ZM5.00875 1.8029C5.13006 1.56278 5.32203 1.3598 5.56225 1.21764C5.80248 1.07548 6.08106 0.999997 6.3655 1H10.6345C10.9191 0.999864 11.1978 1.07528 11.4382 1.21745C11.6785 1.35962 11.8706 1.56267 11.992 1.8029L13 3.8H4L5.00875 1.8029V1.8029ZM1 3.8H16H1ZM7 7.3V10.8V7.3Z" stroke="black" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="separate"></div>
                                <div class="col-6">
                                <p class="text-primary text-center w-100 mb-1 text-decoration-underline">{{$event->categories->first->category->category}}</p>
                                <h5 class="fw-700 text-weight-bold text-danger text-center w-100 mb-1">FINISHED</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
                <!-- past -->

            </div>
        </div>
    </div>
@endsection
