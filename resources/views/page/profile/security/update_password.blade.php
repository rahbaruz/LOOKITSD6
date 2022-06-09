@extends('theme.dashboard')

@section('content')
    <div class="container">
        <div class="d-flex flex-column align-items-center mt-5 pt-3 pb-5">
            <div class="d-flex gap-3 align-items-center">
                <svg width="24" viewBox="0 0 43 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.5 0.916656C14.2629 0.916656 8.375 6.4307 8.375 13.2083V20.5833H5.75C2.85462 20.5833 0.5 22.7885 0.5 25.5V45.1667C0.5 47.8782 2.85462 50.0833 5.75 50.0833H37.25C40.1454 50.0833 42.5 47.8782 42.5 45.1667V25.5C42.5 22.7885 40.1454 20.5833 37.25 20.5833H34.625V13.2083C34.625 6.4307 28.7371 0.916656 21.5 0.916656ZM37.25 25.5L37.2553 45.1667H5.75V25.5H37.25ZM13.625 20.5833V13.2083C13.625 9.14224 17.1583 5.83332 21.5 5.83332C25.8417 5.83332 29.375 9.14224 29.375 13.2083V20.5833H13.625Z" fill="#2C249A"/>
                </svg>

                <h1 class="text-primary font-weight-bold fs-2 fw-700 m-0">Password Reset</h1> 
            </div>
            <form action="{{route('profile.reset_password.store', $user->id)}}" method="POST" class="mt-5 w-20">
                @method('PATCH')
                @csrf

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                
                <div class="form-group m-0 mb-2 position-relative">
                    <input style="font-family: 'Poppins', sans-serif;" id="old_password" type="password" class="form-control-custom" placeholder="Old Password" name="old_password" required>
                    <div class="position-absolute top-0 right-0 p-3 h-100 d-flex justify-content-center align-items-center">
                        <svg role="button" class="eye-hidden-old-password" style="opacity: .4;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.885 14.988l3.104-3.098.011.11c0 1.654-1.346 3-3 3l-.115-.012zm8.048-8.032l-3.274 3.268c.212.554.341 1.149.341 1.776 0 2.757-2.243 5-5 5-.631 0-1.229-.13-1.785-.344l-2.377 2.372c1.276.588 2.671.972 4.177.972 7.733 0 11.985-8.449 11.985-8.449s-1.415-2.478-4.067-4.595zm1.431-3.536l-18.619 18.58-1.382-1.422 3.455-3.447c-3.022-2.45-4.818-5.58-4.818-5.58s4.446-7.551 12.015-7.551c1.825 0 3.456.426 4.886 1.075l3.081-3.075 1.382 1.42zm-13.751 10.922l1.519-1.515c-.077-.264-.132-.538-.132-.827 0-1.654 1.346-3 3-3 .291 0 .567.055.833.134l1.518-1.515c-.704-.382-1.496-.619-2.351-.619-2.757 0-5 2.243-5 5 0 .852.235 1.641.613 2.342z"/></svg>
                        <svg role="button" class="eye-show-old-password d-none" style="opacity: .4;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15 12c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm9-.449s-4.252 8.449-11.985 8.449c-7.18 0-12.015-8.449-12.015-8.449s4.446-7.551 12.015-7.551c7.694 0 11.985 7.551 11.985 7.551zm-7 .449c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5z"/></svg>
                    </div>
                </div>
                @error('old_password')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
                <div class="form-group mb-2 position-relative m-0">
                    <input type="password" required id="password" style="font-family: 'Poppins', sans-serif;" class="form-control-custom" placeholder="New Password" name="password">
                    <div class="position-absolute top-0 right-0 p-3 h-100 d-flex justify-content-center align-items-center">
                        <svg role="button" class="eye-hidden-password" style="opacity: .4;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.885 14.988l3.104-3.098.011.11c0 1.654-1.346 3-3 3l-.115-.012zm8.048-8.032l-3.274 3.268c.212.554.341 1.149.341 1.776 0 2.757-2.243 5-5 5-.631 0-1.229-.13-1.785-.344l-2.377 2.372c1.276.588 2.671.972 4.177.972 7.733 0 11.985-8.449 11.985-8.449s-1.415-2.478-4.067-4.595zm1.431-3.536l-18.619 18.58-1.382-1.422 3.455-3.447c-3.022-2.45-4.818-5.58-4.818-5.58s4.446-7.551 12.015-7.551c1.825 0 3.456.426 4.886 1.075l3.081-3.075 1.382 1.42zm-13.751 10.922l1.519-1.515c-.077-.264-.132-.538-.132-.827 0-1.654 1.346-3 3-3 .291 0 .567.055.833.134l1.518-1.515c-.704-.382-1.496-.619-2.351-.619-2.757 0-5 2.243-5 5 0 .852.235 1.641.613 2.342z"/></svg>
                        <svg role="button" class="eye-show-password d-none" style="opacity: .4;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15 12c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm9-.449s-4.252 8.449-11.985 8.449c-7.18 0-12.015-8.449-12.015-8.449s4.446-7.551 12.015-7.551c7.694 0 11.985 7.551 11.985 7.551zm-7 .449c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5z"/></svg>
                    </div>
                </div>
                @error('password')
                    <span class="text-danger mb-3">{{$message}}</span>
                @enderror
                <div class="form-group mb-2 m-0 position-relative">
                    <input type="password" required id="confirmation_password" style="font-family: 'Poppins', sans-serif;" class="form-control-custom" placeholder="Confirm New Password" name="confirm_password">
                    <div class="position-absolute top-0 right-0 p-3 h-100 d-flex justify-content-center align-items-center">
                        <svg role="button" class="eye-hidden-confirmation-password" style="opacity: .4;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.885 14.988l3.104-3.098.011.11c0 1.654-1.346 3-3 3l-.115-.012zm8.048-8.032l-3.274 3.268c.212.554.341 1.149.341 1.776 0 2.757-2.243 5-5 5-.631 0-1.229-.13-1.785-.344l-2.377 2.372c1.276.588 2.671.972 4.177.972 7.733 0 11.985-8.449 11.985-8.449s-1.415-2.478-4.067-4.595zm1.431-3.536l-18.619 18.58-1.382-1.422 3.455-3.447c-3.022-2.45-4.818-5.58-4.818-5.58s4.446-7.551 12.015-7.551c1.825 0 3.456.426 4.886 1.075l3.081-3.075 1.382 1.42zm-13.751 10.922l1.519-1.515c-.077-.264-.132-.538-.132-.827 0-1.654 1.346-3 3-3 .291 0 .567.055.833.134l1.518-1.515c-.704-.382-1.496-.619-2.351-.619-2.757 0-5 2.243-5 5 0 .852.235 1.641.613 2.342z"/></svg>
                        <svg role="button" class="eye-show-confirmation-password d-none" style="opacity: .4;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15 12c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm9-.449s-4.252 8.449-11.985 8.449c-7.18 0-12.015-8.449-12.015-8.449s4.446-7.551 12.015-7.551c7.694 0 11.985 7.551 11.985 7.551zm-7 .449c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5z"/></svg>
                    </div>
                </div>
                @error('confirm_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <input type="submit" value="RESET MY PASSWORD" class="btn btn-primary w-100 mt-3">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('custom_js')
<script>
    $('.eye-hidden-old-password').click(()=>{
        $('.eye-show-old-password').removeClass('d-none')
        $('.eye-hidden-old-password').addClass('d-none')
        $('#old_password').after(`<input type="text" id="old_password" name="password" class="form-control-custom" value="${$('#old_password').val()}">`)
        $('#old_password').remove()
    })

    $('.eye-show-old-password').click(()=>{
        $('.eye-hidden-old-password').removeClass('d-none')
        $('.eye-show-old-password').addClass('d-none')
        $('#old_password').after(`<input type="password" id="old_password" name="password" class="form-control-custom" value="${$('#old_password').val()}">`)
        $('#old_password').remove()
    })

    $('.eye-hidden-password').click(()=>{
        $('.eye-show-password').removeClass('d-none')
        $('.eye-hidden-password').addClass('d-none')
        $('#password').after(`<input type="text" id="password" name="password" class="form-control-custom" value="${$('#password').val()}">`)
        $('#password').remove()
    })

    $('.eye-show-password').click(()=>{
        $('.eye-hidden-password').removeClass('d-none')
        $('.eye-show-password').addClass('d-none')
        $('#password').after(`<input type="password" id="password" name="password" class="form-control-custom" value="${$('#password').val()}">`)
        $('#password').remove()
    })

    $('.eye-hidden-confirmation-password').click(()=>{
        $('.eye-show-confirmation-password').removeClass('d-none')
        $('.eye-hidden-confirmation-password').addClass('d-none')
        $('#confirmation_password').after(`<input type="text" id="confirmation_password" name="confirmation_password" class="form-control-custom" value="${$('#confirmation_password').val()}">`)
        $('#confirmation_password').remove()
    })

    $('.eye-show-confirmation-password').click(()=>{
        $('.eye-hidden-confirmation-password').removeClass('d-none')
        $('.eye-show-confirmation-password').addClass('d-none')
        $('#confirmation_password').after(`<input type="password" id="confirmation_password" name="confirmation_password" class="form-control-custom" value="${$('#confirmation_password').val()}">`)
        $('#confirmation_password').remove()
    })
</script>
@endsection