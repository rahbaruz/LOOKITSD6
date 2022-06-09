@extends('theme.main')

@section('content')
    <div class="container mb-5">
        <div class="d-flex flex-column align-items-center mt-5 pt-3 pb-5">
            @if($state == 'student')
                <!-- form for student -->
                <div>
                    <div class="d-flex flex-column align-items-center">
                        <h1 class="text-primary fs-2 fw-800 m-0 text-center">Create your</h1>
                        <span class="d-flex align-items-center">
                            <h1 class="fs-2 fw-800 m-0 text-center">Student</h1>
                            <h1 class="text-primary fs-2 fw-800 m-0 ml-2 text-center">Account</h1>
                        </span>
                    </div>
                    
                    <div class="text-decoration-none mt-4 d-flex flex-column align-items-center">
                        <div class="card p-3 shadow-btn w-7 h-7 d-flex align-items-center justify-content-center">
                            <svg width="60" viewBox="0 0 76 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M72.3062 12.725L39.3062 0.725031C38.4572 0.424176 37.5427 0.424176 36.6937 0.725031L3.76248 12.6875H3.69373L3.52185 12.7625L3.3156 12.875L3.07498 12.9875L2.93748 13.0625L2.73123 13.2125L2.6281 13.2875L2.42185 13.4375C2.42185 13.4574 2.41461 13.4765 2.40172 13.4906C2.38882 13.5046 2.37134 13.5125 2.3531 13.5125L2.11248 13.7375C2.11248 13.7475 2.10886 13.757 2.10241 13.764C2.09596 13.7711 2.08722 13.775 2.0781 13.775L1.83748 14.075L1.76873 14.1875C1.73283 14.2127 1.70208 14.2456 1.67842 14.2844C1.65475 14.3231 1.63869 14.3667 1.63123 14.4125L1.5281 14.525L1.42498 14.7125C1.3906 14.7875 1.35623 14.825 1.35623 14.8625L1.2531 15.0875L1.18435 15.2375L1.08123 15.575C1.05795 15.6209 1.0461 15.6726 1.04685 15.725C1.00864 15.8069 0.985294 15.896 0.978102 15.9875C0.978102 16.025 0.943728 16.1 0.943728 16.1375C0.943728 16.175 0.909353 16.325 0.909353 16.4V16.55C0.877655 16.6974 0.866072 16.849 0.874977 17V47C0.874977 48.1935 1.30957 49.3381 2.08316 50.182C2.85675 51.0259 3.90596 51.5 4.99998 51.5C6.09399 51.5 7.1432 51.0259 7.91679 50.182C8.69038 49.3381 9.12498 48.1935 9.12498 47V23.225L17.2718 26.225C14.7566 31.4814 14.0019 37.5305 15.1377 43.329C16.2736 49.1275 19.2288 54.3118 23.4937 57.9875C17.6584 60.9491 12.7034 65.6399 9.19373 71.525C8.89579 72.0199 8.69013 72.574 8.58849 73.1557C8.48684 73.7373 8.49121 74.3351 8.60133 74.9148C8.71146 75.4946 8.92518 76.0451 9.23031 76.5348C9.53544 77.0244 9.92599 77.4438 10.3797 77.7688C10.8333 78.0938 11.3413 78.3182 11.8744 78.429C12.4076 78.5399 12.9555 78.5352 13.487 78.415C14.0185 78.2949 14.523 78.0617 14.9719 77.7289C15.4208 77.396 15.8052 76.97 16.1031 76.475C18.4701 72.4894 21.7136 69.2132 25.5381 66.9449C29.3627 64.6766 33.6467 63.4884 38 63.4884C42.3532 63.4884 46.6372 64.6766 50.4618 66.9449C54.2864 69.2132 57.5299 72.4894 59.8968 76.475C60.2772 77.0991 60.7934 77.6107 61.3993 77.964C62.0051 78.3174 62.6817 78.5015 63.3687 78.5C64.1608 78.5015 64.9364 78.2541 65.6031 77.7875C66.5214 77.1288 67.1633 76.1004 67.3888 74.927C67.6142 73.7536 67.4048 72.5305 66.8062 71.525C63.2966 65.6399 58.3415 60.9491 52.5062 57.9875C56.7711 54.3118 59.7264 49.1275 60.8622 43.329C61.9981 37.5305 61.2433 31.4814 58.7281 26.225L72.3062 21.275C73.1315 20.9791 73.8501 20.4065 74.3595 19.6389C74.8689 18.8712 75.1432 17.9477 75.1432 17C75.1432 16.0523 74.8689 15.1288 74.3595 14.3612C73.8501 13.5935 73.1315 13.0209 72.3062 12.725V12.725ZM38 9.72503L57.9718 17L50.8218 19.5875L38 24.275L25.1781 19.5875L18.0281 17L38 9.72503ZM53.125 38C53.1226 40.5609 52.5739 43.086 51.5222 45.3755C50.4705 47.665 48.9448 49.656 47.0657 51.191C45.1867 52.7259 43.0059 53.7627 40.6961 54.2191C38.3862 54.6756 36.0106 54.5393 33.7574 53.821C31.5042 53.1027 29.4352 51.822 27.7141 50.0805C25.9931 48.339 24.6672 46.1843 23.8415 43.7871C23.0158 41.3899 22.7129 38.8159 22.9569 36.2689C23.2008 33.7219 23.9848 31.2718 25.2468 29.1125L36.6937 33.275C37.5427 33.5759 38.4572 33.5759 39.3062 33.275L50.7531 29.1125C52.3102 31.7648 53.1337 34.8504 53.125 38V38Z" fill="#2C249A"/>
                            </svg>
                        </div>
                    </div>

                    <form action="{{route('sign_up')}}" method="POST" class="mt-4 w-20">
                        @csrf
                        <input type="hidden" value="student" name="state">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-Mail" name="email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact Number" name="phone">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Field Of Study" name="field_of_study">                    
                            @error('field_of_study')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="SIGN ME UP !" class="btn btn-primary w-100 mt-3">
                        </div>
                    </form>
                </div>
                <!-- /form for student -->
            @else
                <!-- form for organizer -->
                <div>
                    <div class="d-flex flex-column align-items-center">
                        <h1 class="text-primary fs-2 fw-800 m-0 text-center">Create your</h1>
                        <span class="d-flex align-items-center">
                            <h1 class="fs-2 fw-800 m-0 text-center">Organization</h1>
                            <h1 class="text-primary fs-2 fw-800 m-0 ml-2 text-center">Account</h1>
                        </span>
                    </div>
                    
                    <div class="text-decoration-none mt-4 d-flex flex-column align-items-center">
                        <div class="card p-3 shadow-btn w-7 h-7 d-flex align-items-center justify-content-center">
                            <svg width="60" viewBox="0 0 63 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5312 12.5C18.5318 10.1349 19.2284 7.81853 20.5402 5.81983C21.852 3.82112 23.7252 2.22213 25.9423 1.20859C28.1593 0.195036 30.6291 -0.191484 33.065 0.0939169C35.5008 0.379318 37.8027 1.32493 39.7032 2.82092C41.6037 4.31691 43.0249 6.30189 43.8017 8.54532C44.5785 10.7888 44.6791 13.1986 44.0917 15.4949C43.5043 17.7912 42.2531 19.8798 40.4833 21.518C38.7136 23.1563 36.4979 24.277 34.0938 24.75V30H45.1639C49.0753 30 52.25 33.06 52.25 36.835V45.25C55.3989 45.8696 58.197 47.594 60.1018 50.089C62.0066 52.584 62.8824 55.6718 62.5593 58.7538C62.2363 61.8358 60.7375 64.6924 58.3535 66.7699C55.9695 68.8473 52.8701 69.9975 49.6563 69.9975C46.4424 69.9975 43.343 68.8473 40.959 66.7699C38.575 64.6924 37.0762 61.8358 36.7532 58.7538C36.4302 55.6718 37.3059 52.584 39.2107 50.089C41.1155 47.594 43.9136 45.8696 47.0625 45.25V36.835C47.0625 36.3492 46.8626 35.8832 46.5067 35.5392C46.1508 35.1953 45.6679 35.0013 45.1639 35H17.8413C17.5913 35 17.3437 35.0475 17.1128 35.1397C16.8818 35.2319 16.6719 35.3671 16.4951 35.5375C16.3183 35.7079 16.1781 35.9102 16.0824 36.1328C15.9867 36.3554 15.9375 36.594 15.9375 36.835V45.25C19.0864 45.8696 21.8845 47.594 23.7893 50.089C25.6941 52.584 26.5699 55.6718 26.2468 58.7538C25.9238 61.8358 24.425 64.6924 22.041 66.7699C19.657 68.8473 16.5576 69.9975 13.3438 69.9975C10.1299 69.9975 7.03052 68.8473 4.64651 66.7699C2.2625 64.6924 0.763692 61.8358 0.44067 58.7538C0.117649 55.6718 0.993424 52.584 2.89821 50.089C4.80299 47.594 7.60108 45.8696 10.75 45.25V36.835C10.75 33.06 13.9248 30 17.8413 30H28.9063V24.75C25.977 24.1737 23.3442 22.6396 21.4536 20.4073C19.563 18.175 18.5306 15.3816 18.5312 12.5Z" fill="#2C249A"/>
                            </svg>
                        </div>
                    </div>

                    <form action="{{route('sign_up')}}" method="POST" class="mt-4 w-20">
                        @csrf
                        <input type="hidden" value="organizer" name="state">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-Mail" name="email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Institution / Company" name="company">                    
                            @error('company')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Specialization" name="specialization">                    
                            @error('specialization')
                                <span class="text-danger">{{$message}}</span>
                            @enderror    
                        </div>
                        <div class="form-group">
                            <input type="submit" value="SIGN US UP !" class="btn btn-primary w-100 mt-3">
                        </div>
                    </form>
                </div>
                <!-- /form for organizer -->
            @endif

        </div>
    </div>
@endsection

@section('custom_js')
<script>
</script>
@endsection