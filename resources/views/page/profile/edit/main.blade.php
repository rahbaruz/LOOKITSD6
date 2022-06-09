@extends('theme.dashboard')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-between header-title">
            <div>
                <h2 class="fw-700">Editing Your Profile</h2>
                <h2 class="text-primary fw-700">{{$user->name}}</h2>
            </div>

            <div class="card p-2 w-4 h-4 d-flex align-items-center justify-content-center">
                <svg width="60" viewBox="0 0 76 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M72.3062 12.725L39.3062 0.725031C38.4572 0.424176 37.5427 0.424176 36.6937 0.725031L3.76248 12.6875H3.69373L3.52185 12.7625L3.3156 12.875L3.07498 12.9875L2.93748 13.0625L2.73123 13.2125L2.6281 13.2875L2.42185 13.4375C2.42185 13.4574 2.41461 13.4765 2.40172 13.4906C2.38882 13.5046 2.37134 13.5125 2.3531 13.5125L2.11248 13.7375C2.11248 13.7475 2.10886 13.757 2.10241 13.764C2.09596 13.7711 2.08722 13.775 2.0781 13.775L1.83748 14.075L1.76873 14.1875C1.73283 14.2127 1.70208 14.2456 1.67842 14.2844C1.65475 14.3231 1.63869 14.3667 1.63123 14.4125L1.5281 14.525L1.42498 14.7125C1.3906 14.7875 1.35623 14.825 1.35623 14.8625L1.2531 15.0875L1.18435 15.2375L1.08123 15.575C1.05795 15.6209 1.0461 15.6726 1.04685 15.725C1.00864 15.8069 0.985294 15.896 0.978102 15.9875C0.978102 16.025 0.943728 16.1 0.943728 16.1375C0.943728 16.175 0.909353 16.325 0.909353 16.4V16.55C0.877655 16.6974 0.866072 16.849 0.874977 17V47C0.874977 48.1935 1.30957 49.3381 2.08316 50.182C2.85675 51.0259 3.90596 51.5 4.99998 51.5C6.09399 51.5 7.1432 51.0259 7.91679 50.182C8.69038 49.3381 9.12498 48.1935 9.12498 47V23.225L17.2718 26.225C14.7566 31.4814 14.0019 37.5305 15.1377 43.329C16.2736 49.1275 19.2288 54.3118 23.4937 57.9875C17.6584 60.9491 12.7034 65.6399 9.19373 71.525C8.89579 72.0199 8.69013 72.574 8.58849 73.1557C8.48684 73.7373 8.49121 74.3351 8.60133 74.9148C8.71146 75.4946 8.92518 76.0451 9.23031 76.5348C9.53544 77.0244 9.92599 77.4438 10.3797 77.7688C10.8333 78.0938 11.3413 78.3182 11.8744 78.429C12.4076 78.5399 12.9555 78.5352 13.487 78.415C14.0185 78.2949 14.523 78.0617 14.9719 77.7289C15.4208 77.396 15.8052 76.97 16.1031 76.475C18.4701 72.4894 21.7136 69.2132 25.5381 66.9449C29.3627 64.6766 33.6467 63.4884 38 63.4884C42.3532 63.4884 46.6372 64.6766 50.4618 66.9449C54.2864 69.2132 57.5299 72.4894 59.8968 76.475C60.2772 77.0991 60.7934 77.6107 61.3993 77.964C62.0051 78.3174 62.6817 78.5015 63.3687 78.5C64.1608 78.5015 64.9364 78.2541 65.6031 77.7875C66.5214 77.1288 67.1633 76.1004 67.3888 74.927C67.6142 73.7536 67.4048 72.5305 66.8062 71.525C63.2966 65.6399 58.3415 60.9491 52.5062 57.9875C56.7711 54.3118 59.7264 49.1275 60.8622 43.329C61.9981 37.5305 61.2433 31.4814 58.7281 26.225L72.3062 21.275C73.1315 20.9791 73.8501 20.4065 74.3595 19.6389C74.8689 18.8712 75.1432 17.9477 75.1432 17C75.1432 16.0523 74.8689 15.1288 74.3595 14.3612C73.8501 13.5935 73.1315 13.0209 72.3062 12.725V12.725ZM38 9.72503L57.9718 17L50.8218 19.5875L38 24.275L25.1781 19.5875L18.0281 17L38 9.72503ZM53.125 38C53.1226 40.5609 52.5739 43.086 51.5222 45.3755C50.4705 47.665 48.9448 49.656 47.0657 51.191C45.1867 52.7259 43.0059 53.7627 40.6961 54.2191C38.3862 54.6756 36.0106 54.5393 33.7574 53.821C31.5042 53.1027 29.4352 51.822 27.7141 50.0805C25.9931 48.339 24.6672 46.1843 23.8415 43.7871C23.0158 41.3899 22.7129 38.8159 22.9569 36.2689C23.2008 33.7219 23.9848 31.2718 25.2468 29.1125L36.6937 33.275C37.5427 33.5759 38.4572 33.5759 39.3062 33.275L50.7531 29.1125C52.3102 31.7648 53.1337 34.8504 53.125 38V38Z" fill="#2C249A"/>
                </svg>
            </div>
        </div>

        <form action="{{route('profile.edit.store', $user->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="state" value="{{$user->role}}">
            @method('PUT')
            @csrf
            <div class="d-flex gap-2 mt-4 list-form-profile">
                <div>
                    <div class="border rounded h-10 w-16 overflow-hidden d-flex align-items-center justify-content-center">
                        <!-- <img src="{{asset('img/avatar/avatar.png')}}" id="avatar_user" alt="" class="max-w-100 h-100 object-fit-cover"> -->
                        <img src="{{asset('storage/'.$user->avatar)}}" id="avatar_user" alt="" class="max-w-100 h-100 object-fit-cover">
                    </div>
                    <div class="d-flex align-items-center gap-1">
                        <label for="edit_avatar" class="btn mt-3 mb-0 btn-primary w-100 p-1 py-2">Edit</label>
                        <input type="file" class="d-none" id="edit_avatar" name="avatar">
                        <input type="hidden" id="edit_avatar_temp" name="avatar_temp">

                        <button id="btn-remove-avatar" type="button" class="btn mt-3  btn-primary w-100 p-1 py-2">Remove</button>                  

                    </div>
                </div>
                <div class="w-100 d-flex flex-column gap-2">
                    <div class="form-group m-0">
                        <input type="text" name="name" class="form-control-custom p-3 w-100 fs-1" placeholder="Type you'r name" value="{{$user->name}}">
                    </div>
                    <div class="form-group m-0">
                        <input type="text" class="form-control-custom p-3 w-100 fs-1" placeholder="Type you'r email" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group m-0">
                        <input type="text" class="form-control-custom p-3 w-100 fs-1" placeholder="Type you'r contact number" name="phone" style="font-family: 'Poppins', sans-serif;" value="{{$user->phone}}">
                    </div>

                    @if($user->role == 'organization')
                        <div class="form-group m-0">
                            <input type="text" class="form-control-custom p-3 w-100 fs-1" placeholder="Type you'r specialization" name="specialization" value="{{$user->specialization}}">
                        </div>
                        <div class="form-group m-0">
                            <input type="text" class="form-control-custom p-3 w-100 fs-1" placeholder="Type you'r organization" name="organization" value="{{$user->organization}}">
                        </div>
                    @else
                        <div class="form-group m-0">
                            <input type="text" class="form-control-custom p-3 w-100 fs-1" placeholder="Type you'r field of study" name="field_of_study" value="{{$user->field_of_study}}">
                        </div>
                    @endif

                    <div class="form-group m-0">
                        <textarea name="desc" id="desc" rows="5" class="form-control textarea-resize-none" placeholder="Type you'r description" name="desc">{{$user->desc}}</textarea>
                    </div>

                    <div class="form-group mt-4 w-100 d-flex justify-content-end gap-2">
                        <button type="submit" class="btn btn-primary d-flex gap-1 align-items-center justify-content-center">
                            <svg width="16" viewBox="0 0 55 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M47.98 17.472L39.2466 7.78584C38.8438 7.33906 38.3496 7.01143 37.8125 6.83271V6.67188H7.73438C6.78369 6.67188 6.01562 7.52373 6.01562 8.57812V52.4219C6.01562 53.4763 6.78369 54.3281 7.73438 54.3281H47.2656C48.2163 54.3281 48.9844 53.4763 48.9844 52.4219V20.1646C48.9844 19.1519 48.6245 18.1868 47.98 17.472ZM20.625 10.9609H34.375V17.1562H20.625V10.9609ZM45.1172 50.0391H9.88281V10.9609H17.1875V19.0625C17.1875 20.1169 17.9556 20.9688 18.9062 20.9688H36.0938C37.0444 20.9688 37.8125 20.1169 37.8125 19.0625V12.2596L45.1172 20.3611V50.0391ZM27.5 26.3301C23.23 26.3301 19.7656 30.1724 19.7656 34.9082C19.7656 39.644 23.23 43.4863 27.5 43.4863C31.77 43.4863 35.2344 39.644 35.2344 34.9082C35.2344 30.1724 31.77 26.3301 27.5 26.3301ZM27.5 39.6738C25.126 39.6738 23.2031 37.5412 23.2031 34.9082C23.2031 32.2752 25.126 30.1426 27.5 30.1426C29.874 30.1426 31.7969 32.2752 31.7969 34.9082C31.7969 37.5412 29.874 39.6738 27.5 39.6738Z" fill="white"/>
                            </svg>

                            <span>Save</span>
                        </button>
                        <button type="button" onclick="doReset()" class="btn btn-coklat d-flex gap-1 align-items-center justify-content-center">
                            <svg width="16" viewBox="0 0 48 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 6.5V17.875L12 19.5H22.5V16.25H14.937L17.76 13.1918C18.7456 12.101 19.921 11.2328 21.2184 10.6374C22.5157 10.042 23.9092 9.73125 25.3181 9.7231C26.727 9.71495 28.1234 10.0096 29.4266 10.5899C30.7297 11.1703 31.9136 12.0248 32.9099 13.1041C33.9062 14.1834 34.695 15.466 35.2307 16.8777C35.7664 18.2895 36.0384 19.8023 36.0308 21.3286C36.0233 22.8549 35.7365 24.3645 35.1869 25.7699C34.6373 27.1754 33.8359 28.4488 32.829 29.5165L17.238 46.41L19.398 48.75L34.992 31.8565C37.5631 29.0707 39.0074 25.2924 39.0072 21.353C39.0069 17.4135 37.562 13.6355 34.9905 10.8501C32.419 8.06472 28.9314 6.50007 25.2949 6.50038C21.6585 6.50068 18.1711 8.06592 15.6 10.8517L13.5 13.1267V6.5H10.5Z" fill="white"/>
                            </svg>

                            <span>Reset</span>
                        </button>
                    </div>

                </div>
            </div>

        </form>

    </div>
@endsection

@section('custom_js')

<script>
    let name = $("input[name=name]").val();
    let email = $("input[name=email]").val();
    let state = $("input[name=state]").val();
    let phone = $("input[name=phone]").val();
    let field_of_study = null
    let specialization = null
    let organization = null
    if (state == "student") {
        field_of_study = $("input[name=field_of_study]").val();
    } else {
        specialization = $("input[name=specialization]").val();
        organization = $("input[name=organization]").val();
    }
    let desc = $("input[name=desc]").val();

    $(function () {
        $('[data-toggle="popover"]').popover()
    })
    $('.popover-dismiss').popover({
        trigger: 'focus'
    })

    $("input#edit_avatar").change(function(){
        let filesAmount = this.files.length
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('#avatar_user').attr('src', e.target.result); 
        }

        reader.readAsDataURL(this.files[0]); 
    })

    $("#btn-remove-avatar").click(function(){
        $('#avatar_user').attr('src', "{{asset('img/avatar/avatar.png')}}");
        $("input#edit_avatar_temp").val("avatars/avatar.png");
    })

    function doReset(){
        $("input[name=name]").val(name);
        $("input[name=email]").val(email);
        $("input[name=state]").val(state);
        $("input[name=phone]").val(phone);
        if (state == "student") {
            $("input[name=field_of_study]").val(field_of_study);
        } else {
            $("input[name=specialization]").val(specialization);
            $("input[name=organization]").val(organization);
        }
        $("input[name=desc]").val(desc);
    }
</script>

@endsection
