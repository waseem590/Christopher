@extends('layout.master')
@section('title','home')
@section('main-content')


<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div class="custom__container-wrapper">
    <div class="dboard-inner">
        @include('layout.top_bar')
        <div id="layoutSidenav">
            @include('layout.menu')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container ">


                        <div class="row">
                            <div class="account-detail">
                                <div class="account-info">
                                    <div class="account-title">
                                        <h4>Account Setting</h4>
                                    </div>
                                    <div class="account-conatct-detail">
                                        <div class="account-description">
                                            <p>We use your email and phone number to communicate with you. <br> if you wan</p>
                                        </div>
                                        <div class="account-form">
                                            <form>
                                                <div class="email-feild account-feild">
                                                    <input type="text" name="" id="Email" placeholder="Username" required>
                                                    <!-- <div class="icon"><img src="img/Layer174.png" alt=""></div> -->
                                                </div>
                                                <div class="email-feild account-feild">
                                                    <input type="text" name="" id="Email" placeholder="Email" required>
                                                    <!-- <div class="icon"><img src="img/Layer175.png" alt=""></div> -->
                                                </div>
                                                <div class="email-feild account-feild phone-num-inter">
                                                    <input type="text" name="" id="Email" placeholder="+1" class="code-num" required>
                                                    <input type="text" name="" id="Email" placeholder="" class="f-num" required>
                                                </div>
                                                <div class="login-form-btn account-f-btn">
                                                    <div class="btn account-b"><a href="#">Update</a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @include('layout.footer')
            </div>
        </div>

    </div>
</div>