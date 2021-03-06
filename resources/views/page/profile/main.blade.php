@extends('theme.dashboard')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-between header-title">
            <div>
                <h2 class="fw-700">Your Profile</h2>
                <h2 class="text-primary fw-700">{{$user->name}}</h2>
            </div>

            <div class="card p-2 w-4 h-4 d-flex align-items-center justify-content-center">
                <svg width="60" viewBox="0 0 76 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M72.3062 12.725L39.3062 0.725031C38.4572 0.424176 37.5427 0.424176 36.6937 0.725031L3.76248 12.6875H3.69373L3.52185 12.7625L3.3156 12.875L3.07498 12.9875L2.93748 13.0625L2.73123 13.2125L2.6281 13.2875L2.42185 13.4375C2.42185 13.4574 2.41461 13.4765 2.40172 13.4906C2.38882 13.5046 2.37134 13.5125 2.3531 13.5125L2.11248 13.7375C2.11248 13.7475 2.10886 13.757 2.10241 13.764C2.09596 13.7711 2.08722 13.775 2.0781 13.775L1.83748 14.075L1.76873 14.1875C1.73283 14.2127 1.70208 14.2456 1.67842 14.2844C1.65475 14.3231 1.63869 14.3667 1.63123 14.4125L1.5281 14.525L1.42498 14.7125C1.3906 14.7875 1.35623 14.825 1.35623 14.8625L1.2531 15.0875L1.18435 15.2375L1.08123 15.575C1.05795 15.6209 1.0461 15.6726 1.04685 15.725C1.00864 15.8069 0.985294 15.896 0.978102 15.9875C0.978102 16.025 0.943728 16.1 0.943728 16.1375C0.943728 16.175 0.909353 16.325 0.909353 16.4V16.55C0.877655 16.6974 0.866072 16.849 0.874977 17V47C0.874977 48.1935 1.30957 49.3381 2.08316 50.182C2.85675 51.0259 3.90596 51.5 4.99998 51.5C6.09399 51.5 7.1432 51.0259 7.91679 50.182C8.69038 49.3381 9.12498 48.1935 9.12498 47V23.225L17.2718 26.225C14.7566 31.4814 14.0019 37.5305 15.1377 43.329C16.2736 49.1275 19.2288 54.3118 23.4937 57.9875C17.6584 60.9491 12.7034 65.6399 9.19373 71.525C8.89579 72.0199 8.69013 72.574 8.58849 73.1557C8.48684 73.7373 8.49121 74.3351 8.60133 74.9148C8.71146 75.4946 8.92518 76.0451 9.23031 76.5348C9.53544 77.0244 9.92599 77.4438 10.3797 77.7688C10.8333 78.0938 11.3413 78.3182 11.8744 78.429C12.4076 78.5399 12.9555 78.5352 13.487 78.415C14.0185 78.2949 14.523 78.0617 14.9719 77.7289C15.4208 77.396 15.8052 76.97 16.1031 76.475C18.4701 72.4894 21.7136 69.2132 25.5381 66.9449C29.3627 64.6766 33.6467 63.4884 38 63.4884C42.3532 63.4884 46.6372 64.6766 50.4618 66.9449C54.2864 69.2132 57.5299 72.4894 59.8968 76.475C60.2772 77.0991 60.7934 77.6107 61.3993 77.964C62.0051 78.3174 62.6817 78.5015 63.3687 78.5C64.1608 78.5015 64.9364 78.2541 65.6031 77.7875C66.5214 77.1288 67.1633 76.1004 67.3888 74.927C67.6142 73.7536 67.4048 72.5305 66.8062 71.525C63.2966 65.6399 58.3415 60.9491 52.5062 57.9875C56.7711 54.3118 59.7264 49.1275 60.8622 43.329C61.9981 37.5305 61.2433 31.4814 58.7281 26.225L72.3062 21.275C73.1315 20.9791 73.8501 20.4065 74.3595 19.6389C74.8689 18.8712 75.1432 17.9477 75.1432 17C75.1432 16.0523 74.8689 15.1288 74.3595 14.3612C73.8501 13.5935 73.1315 13.0209 72.3062 12.725V12.725ZM38 9.72503L57.9718 17L50.8218 19.5875L38 24.275L25.1781 19.5875L18.0281 17L38 9.72503ZM53.125 38C53.1226 40.5609 52.5739 43.086 51.5222 45.3755C50.4705 47.665 48.9448 49.656 47.0657 51.191C45.1867 52.7259 43.0059 53.7627 40.6961 54.2191C38.3862 54.6756 36.0106 54.5393 33.7574 53.821C31.5042 53.1027 29.4352 51.822 27.7141 50.0805C25.9931 48.339 24.6672 46.1843 23.8415 43.7871C23.0158 41.3899 22.7129 38.8159 22.9569 36.2689C23.2008 33.7219 23.9848 31.2718 25.2468 29.1125L36.6937 33.275C37.5427 33.5759 38.4572 33.5759 39.3062 33.275L50.7531 29.1125C52.3102 31.7648 53.1337 34.8504 53.125 38V38Z" fill="#2C249A"/>
                </svg>
            </div>
        </div>

        <div class="d-flex gap-2 mt-4 list-form-profile">
            <div>
                <div class="border rounded h-10 w-16 overflow-hidden d-flex align-items-center justify-content-center">
                    <img src="{{asset('storage/'.$user->avatar)}}" id="avatar_user" alt="" class="max-w-100 h-100 object-fit-cover">
                </div>
                <div class="">
                    <a href="{{route('profile.edit')}}" class="btn mt-3  btn-primary w-100 d-flex justify-content-center align-items-center gap-1 p-1 py-2">
                        <svg width="16"viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.1298 1.87738C16.3947 1.59921 16.7092 1.37856 17.0553 1.22802C17.4015 1.07748 17.7725 1 18.1471 1C18.5217 1 18.8927 1.07748 19.2389 1.22802C19.585 1.37856 19.8995 1.59921 20.1644 1.87738C20.4293 2.15554 20.6395 2.48576 20.7828 2.8492C20.9262 3.21264 21 3.60217 21 3.99555C21 4.38893 20.9262 4.77846 20.7828 5.14189C20.6395 5.50533 20.4293 5.83556 20.1644 6.11372L6.54759 20.4114L1 22L2.51298 16.175L16.1298 1.87738Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
    
                        <span>Edit Profile</span>
                    </a>

                    <div class="d-flex align-items-center mt-2 gap-1" id="container-btn">
                        <a href="{{route('profile.reset_password')}}" class="btn  btn-primary w-100 d-flex justify-content-center align-items-center gap-1 p-1 py-2">
                            <svg width="16" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_11_169)">
                            <path d="M15 2.33333C11.5538 2.33333 8.75 4.95017 8.75 8.16667V11.6667H7.5C6.12125 11.6667 5 12.7132 5 14V23.3333C5 24.6202 6.12125 25.6667 7.5 25.6667H22.5C23.8788 25.6667 25 24.6202 25 23.3333V14C25 12.7132 23.8788 11.6667 22.5 11.6667H21.25V8.16667C21.25 4.95017 18.4462 2.33333 15 2.33333ZM22.5 14L22.5025 23.3333H7.5V14H22.5ZM11.25 11.6667V8.16667C11.25 6.237 12.9325 4.66667 15 4.66667C17.0675 4.66667 18.75 6.237 18.75 8.16667V11.6667H11.25Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_11_169">
                            <rect width="30" height="28" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
    
                            <span>Reset Password</span>
                        </a>
                        <button type="button" class="btn btn-outline-primary btn-sm hover-btn" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="It is reccomended to change your passwordevery 2-3 months to prevent security breacheson your account">
                            <svg width="30" viewBox="0 0 49 48" fill="#2C249A" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.4583 18H26.5416V14H22.4583V18ZM24.4999 40C15.4962 40 8.16659 32.82 8.16659 24C8.16659 15.18 15.4962 8 24.4999 8C33.5037 8 40.8333 15.18 40.8333 24C40.8333 32.82 33.5037 40 24.4999 40ZM24.4999 4C21.8188 4 19.1639 4.51732 16.6868 5.52241C14.2097 6.5275 11.959 8.00069 10.0632 9.85786C6.23429 13.6086 4.08325 18.6957 4.08325 24C4.08325 29.3043 6.23429 34.3914 10.0632 38.1421C11.959 39.9993 14.2097 41.4725 16.6868 42.4776C19.1639 43.4827 21.8188 44 24.4999 44C29.9148 44 35.1078 41.8929 38.9367 38.1421C42.7656 34.3914 44.9166 29.3043 44.9166 24C44.9166 21.3736 44.3885 18.7728 43.3625 16.3463C42.3364 13.9198 40.8325 11.715 38.9367 9.85786C37.0408 8.00069 34.7901 6.5275 32.313 5.52241C29.836 4.51732 27.1811 4 24.4999 4V4ZM22.4583 34H26.5416V22H22.4583V34Z"/>
                            </svg>
                        </button>                     

                    </div>

                </div>
            </div>
            <div class="w-100 d-flex flex-column gap-2">
                <div class="">
                    <div class="d-flex">
                        <span class="col-4 font-weight-bold p-0">Name</span>
                        <span>{{$user->name}}</span>
                    </div>
                    <hr class="my-2">
                    <div class="d-flex mt-3">
                        <span class="col-4 font-weight-bold p-0">E-Mail</span>
                        <span>{{$user->email}}</span>
                    </div>
                    <hr class="my-2">
                    <div class="d-flex mt-3">
                        <span class="col-4 font-weight-bold p-0">Contact number</span>
                        <span style="font-family: 'Poppins', sans-serif;">{{$user->phone}}</span>
                    </div>
                    <hr class="my-2">
                    @if($user->role == 'organization')
                        <div class="d-flex mt-3">
                            <span class="col-4 font-weight-bold p-0">Company</span>
                            <span>{{$user->company}}</span>
                        </div>
                        <hr class="my-2">
                        <div class="d-flex mt-3">
                            <span class="col-4 font-weight-bold p-0">Specialization</span>
                            <span>{{$user->specialization}}</span>
                        </div>
                        <hr class="my-2">
                    @else
                        <div class="d-flex mt-3">
                            <span class="col-4 font-weight-bold p-0">Field Of Study</span>
                            <span>{{$user->field_of_study}}</span>
                        </div>
                        <hr class="my-2">
                    @endif
                    <div class="d-flex mt-3">
                        <span class="col-4 p-0 font-weight-bold">Description</span>
                        <span>{{$user->desc}}</span>
                    </div>
                    <hr class="my-2">

                </div>
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
