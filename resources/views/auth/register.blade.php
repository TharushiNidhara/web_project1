@extends('layouts.auth-master')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-5">
    <form class="register-form" method="post" action="{{ route('register.perform') }}" novalidate style="background-color:MediumSeaGreen;">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="login-header">
        <img class="logo-image" src="https://th.bing.com/th/id/R.babb3d08bb51364499b5a3f62b5b8e20?rik=Wr9We6VA5HUc4g&pid=ImgRaw&r=0" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="register-button" type="submit">Register</button>
        <div class="copy-text">
                    @include('auth.partials.copy')
                </div>
        
    </form>
</div>
</div>
</div>

    <style>
         .register-form {
        background-color: #f5f5f5;
        border-radius: 10px;
        margin:100px auto;
        padding: 25px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

.login-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-logo {
        width: 72px;
        height: 57px;
        margin-bottom: 10px;
    }

.form-input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        font-size: 16px;
        border:3px solid #66afe9;
    }

    .form-input:focus {
        border-color: #66afe9;
        box-shadow: 0 0 0 0.2rem rgba(102, 175, 233, 0.25);
    }

    .register-button {
        width: 100%;
        padding: 12px;
        font-size: 18px;
        background-color: #66afe9;
        border: none;
        border-radius: 5px;
        color: red
        cursor: pointer;
    }

    .register-button:hover {
        background-color: #4a90e2;
    }

    .copy-text {
        font-size: 14px;
        color: #999999;
        margin-top: 20px;
    }
    </style>


@endsection