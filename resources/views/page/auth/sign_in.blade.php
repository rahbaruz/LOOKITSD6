@extends('theme.main')

@section('content')
    <div class="container mb-5">
        <div class="d-flex flex-column align-items-center mt-5 pt-3 pb-5">
            <div id="sign_in">
                <img src="{{asset('img/flat-icon/hello-login.png')}}" class="img-flat-login" alt="">

                <h1 class="text-primary font-weight-bold fs-4 fw-700 m-0 text-center">Hello!</h1>
                <p class="fs-1 text-primary font-weight-bold text-center">Please Enter Your Credentials</p>

                
                @if(session()->has('failed'))
                    <div class="alert alert-danger">
                        {{session()->get('failed')}}, <strong>Check you'r email or password</strong>
                    </div>
                @endif
                <form action="{{route('sign_in')}}", method="POST">
                    @csrf
                    <div class="position-relative w-26 rounded overflow-hidden">
                        <input type="email" class="form-control ps-6" name="email">
                        <span class="position-absolute bg-primary text-light left-0 top-0 h-100 mw-6 d-flex align-items-center justify-content-center">
                            E-Mail
                        </span>
                    </div>
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="position-relative w-26 rounded overflow-hidden mt-3">
                        <input type="password" class="form-control ps-6" name="password">
                        <span class="position-absolute bg-primary text-light left-0 top-0 h-100 mw-6 d-flex align-items-center justify-content-center">
                            Password
                        </span>
                    </div>
                    @error('password')
                        <span class="text-danger mb-3">{{$message}}</span>
                    @enderror

                    <div>
                        <a href="{{route('forget.password.get')}}" class="font-weight-bold mt-5">Forget Password?</a>
                    </div>

                    
                    <input type="submit" value="Sign In" class="btn btn-primary shadow-btn w-100 mt-3">
                </form>

                <div class="d-flex align-items-center mt-4">
                    <span>Don't have an account?</span>
                    <a href="{{route('sign_up')}}" class="btn btn-primary btn-sm ml-3">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
<script>
</script>
@endsection