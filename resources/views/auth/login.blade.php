@extends('front.layouts.app')

@section('content')
  <!-- content page -->
    <section class="bgwhite p-b-60 mt-75">
        <div class="container">
            <div class="row justify-center m-b-20">

                <div class="col-md-12">
                    <ul class="nav nav-pills pills-dark mb-3 justify-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <p class="f-bold text-center"> Already have an account .</p>
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login

                            </a>

                        </li>
                        <li class="nav-item">
                            <p class="f-bold text-center"> Don't have an account yet ?</p>
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Register</a>

                        </li>

                    </ul>
                </div>

            </div>

            <div class="row ">
                <div class="tab-content col-md-12" id="pills-tabContent">
                    <div class="  tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row  ">

                <!-- login form  -->
                            <div class="col-lg-3"> </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 p-b-30 bo-r">

                                <form class="leave-comment" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <label> Username or Email</label>
                                    <div class="bo4 of-hidden size15 m-b-20">
                                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" value="{{ old('login') }}" name="login">
                                    </div>

                                    <label> Password</label>
                                    <div class="bo4 of-hidden size15 m-b-20">
                                        <input class="sizefull s-text7 p-l-22 p-r-22" type="Password" name="password">
                                    </div>

                                    <label class="container-checkmark ">
                                        Keep me signed in
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>

                                    <div class="">
                                        <!-- Button -->
                                        <button class="flex-c-m size2 bg1 bo-rad-3 hov1  trans-0-4 btn-primary m-b-10">
                                            Sign In
                                        </button>

                                        <a class="text-primary Forgot-pw f-bold" href="{{route('password.request')}}">Forgot your password? <span> click here</span></a>
                                    </div>

                                </form>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 p-b-30  ">
                                <form class="leave-comment">


                                    <div class="login-box">
                                        <a href="{{ route('login_google', ['status' => 'login']) }}" class="social-button" id="google-connect"> <span>Connect with Google</span></a>
                                        <a href="#" class="social-button" id="twitter-connect"> <span>Connect with Twitter </span></a>
                                        <a href="{{ route('login_face',['status'=>'login']) }}" class="social-button" id="facebook-connect"> <span>Connect with Facebook</span></a>

                                    </div>

                                </form>
                            </div>
                            <div class="col-lg-3"> </div>

                        </div>
                    </div>
            <!-- register form -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row ">
                            <div class="col-md-3"> </div>
                            <div class="col-md-3 p-b-30 bo-r">
                                <form class="leave-comment" method="post" action="{{ route('register') }}">
                                    @csrf

                                    <label> Name </label>
                                    <div class="bo4 of-hidden size15 m-b-20">
                                        <input class="sizefull s-text7 p-l-22 p-r-22" value="{{ old('name') }}" type="text" name="name">
                                    </div>

                                    <label> User Name </label>
                                    <div class="bo4 of-hidden size15 m-b-20">
                                        <input id="username" class="sizefull s-text7 p-l-22 p-r-22" value="{{ old('user_name') }}" type="text" name="user_name">
                                    </div>

                                    <label>Email </label>
                                    <div class="bo4 of-hidden size15 m-b-20">
                                        <input class="sizefull s-text7 p-l-22 p-r-22"value="{{ old('email') }}"  type="email" name="email">
                                    </div>

                                    <label>Password </label>
                                    <div class="bo4 of-hidden size15 m-b-20">
                                        <input id="password" class="sizefull s-text7 p-l-22 p-r-22" type="Password" name="password">
                                    </div>

                                    <label>Confirm Password </label>
                                    <div class="bo4 of-hidden size15 m-b-20">
                                        <input id="password_confirmation" class="sizefull s-text7 p-l-22 p-r-22" type="Password" name="password_confirmation">
                                    </div>

                                    <p class="text-danger p-b-20 font-14"> it appears that you already have an account with us . Please <a href="{{route('login')}}" class="text-primary hover-me font-16"> Sign in</a> instead </p>
                                    <div class="">
                                        <!-- Button -->
                                        <button class="flex-c-m size2 bg1 bo-rad-3 hov1  trans-0-4 btn-primary">
                                            Sign Up
                                        </button>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-3 p-b-30 ">
                                <form class="leave-comment">

                                    <div class="login-box">
                                        <a href="#" class="social-button" id="twitter-connect"> <span>Connect with Twitter </span></a>
                                        <a href="{{ route('login_face', ['status' => 'register']) }}" class="social-button" id="facebook-connect"> <span>Connect with Facebook</span></a>
                                        <a href="{{ route('login_google', ['status' => 'register']) }}" class="social-button" id="google-connect"> <span>Connect with Google</span></a>

                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

    <script type="text/javascript">
        $("#username").focusout(function(){
            let action      =  "{{route('check_username')}}";
            let username      =  $(this).val();
            console.log($(this).val())
            $.ajax({
                url:  action,
                type: 'get',
                dataType: 'JSON',
                data: { username: username},
                success: function(data, status){
                    if(data.status=="success"){
                        toastr['success'](""+data.message)
                    }else{
                        toastr['error'](""+data.message)
                    } 
                
                }
            });
        });
    </script>

    <script type="text/javascript">
       $("#password_confirmation").focusout(function(){
            let password_confirmation =  $(this).val();
            let password              =  $("#password").val();
            console.log(password_confirmation)
            console.log(password)
            if(password_confirmation != password){
                toastr['error']("password dosn't match")
            }
        });
    </script>

@endsection
