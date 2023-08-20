@extends('layouts.auth-master')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form class="login-form" method="post" action="{{ route('login.perform') }}" class="needs-validation" novalidate style="background-color:MediumSeaGreen;">
                @csrf
            <div class="login-header">
                <img class="logo-image" src="https://th.bing.com/th/id/R.babb3d08bb51364499b5a3f62b5b8e20?rik=Wr9We6VA5HUc4g&pid=ImgRaw&r=0" alt="Logo">
                    <div class="login-title">Login</div>
                    </div>

                @include('layouts.partials.messages')

                <input type="text" class="form-input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Email or Username" required autofocus>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <input type="password" class="form-input @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <button class="login-button" type="submit">Login</button>

                <div class="copy-text">
                    @include('auth.partials.copy')
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .login-form {
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

    .login-title {
        font-size: 28px;
        font-weight: bold;
        color: #333333;
        margin-bottom: 15px;
    }

    .logo-image {
    width: 50px;
    height: auto; 
    border-radius: 50%; 
    border: 2px solid #66afe9; 
    padding: 5px; 
    /* background-color: #f5f5f5;  */
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

    .login-button {
        width: 100%;
        padding: 12px;
        font-size: 18px;
        background-color: #66afe9;
        border: none;
        border-radius: 5px;
        color: red
        cursor: pointer;
    }

    .login-button:hover {
        background-color: #4a90e2;
    }

    .copy-text {
        font-size: 14px;
        color: #999999;
        margin-top: 20px;
    }
</style>
@endsection





