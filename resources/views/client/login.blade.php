@extends('client.layouts.master')

@section('client-content')
<section class="login-area pt-100 pb-100" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login" id="loginForm">>
                    <h3 class="text-center mb-60">Signup From Here</h3>
                    <form action="#">
                        <label for="name">Username <span>**</span></label>
                        <input id="name" type="text" placeholder="Enter Username">
                        <label for="email-id">Email Address <span>**</span></label>
                        <input id="email-id" type="text" placeholder="Email address...">
                        <label for="pass">Password <span>**</span></label>
                        <input id="pass" type="password" placeholder="Enter password...">
                        <div class="mt-10"></div>
                        <button class="os-btn w-100">Register Now</button>
                        <div class="or-divide"><span>or</span></div>
                        <p onclick="swichForm()" class="os-btn os-btn-black w-100">login Now</p>
                    </form>
                </div>
                <div class="basic-login" id="signUpForm">
                    <h3 class="text-center mb-60">Login From Here</h3>
                    <form action="#">
                        <label for="name">Email Address <span>**</span></label>
                        <input id="name" type="text" placeholder="Email address...">
                        <label for="pass">Password <span>**</span></label>
                        <input id="pass" type="password" placeholder="Enter password...">
                        <div class="login-action mb-20 fix">
                            <span class="log-rem f-left">
                                <input id="remember" type="checkbox">
                                <label for="remember">Remember me!</label>
                            </span>
                            <span class="forgot-login f-right">
                                <a href="#">Lost your password?</a>
                            </span>
                        </div>
                        <button class="os-btn w-100">Login Now</button>
                        <div class="or-divide"><span>or</span></div>
                        <p onclick="swichForm()" class="os-btn os-btn-black w-100">Register Now</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var sw =  {{$loginForm ? 'true':'false'}}
    swichForm = () =>{
        console.log(sw);
        document.querySelector("#loginForm").style.display = sw ? 'none' : ''
        document.querySelector("#signUpForm").style.display = !sw ? 'none' : ''
        sw = !sw
    }
    swichForm()
</script>
@endsection