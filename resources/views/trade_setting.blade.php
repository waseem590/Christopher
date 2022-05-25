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
                                        <h4>Trade Setting</h4>
                                    </div>
                                    <div class="trade-conatct-detail">
                                        <div class='faq'>
                                            <input id='faq-a' type='checkbox'>
                                            <label for='faq-a'>
                                                <p class="faq-heading">Apply Pay</p>
                                                <div class='faq-arrow'></div>
                                                <div class="account-form">
                                                    <form class="trading-form">
                                                        <div class="email-feild trade-feild">
                                                            <input type="text" name="" id="Email" placeholder="Email Address" required>
                                                            <!-- <div class="icon"><img src="img/Layer174.png" alt=""></div> -->
                                                        </div>
                                                        <div class="email-feild trade-feild">
                                                            <input type="text" name="" id="Email" placeholder="Mobile Number" required>
                                                            <!-- <div class="icon"><img src="img/Layer175.png" alt=""></div> -->
                                                        </div>

                                                    </form>
                                                </div>
                                            </label>
                                            <input id='faq-b' type='checkbox'>
                                            <label for='faq-b'>
                                                <p class="faq-heading">Chime</p>
                                                <div class='faq-arrow'></div>
                                                <form class="trading-form">
                                                    <div class="email-feild trade-feild">
                                                        <input type="text" name="" id="Email" placeholder="Email Address" required>
                                                        <!-- <div class="icon"><img src="img/Layer174.png" alt=""></div> -->
                                                    </div>
                                                    <div class="email-feild trade-feild">
                                                        <input type="text" name="" id="Email" placeholder="Mobile Number" required>
                                                        <!-- <div class="icon"><img src="img/Layer174.png" alt=""></div> -->
                                                    </div>

                                                </form>
                                            </label>
                                            <input id='faq-c' type='checkbox'>
                                            <label for='faq-c'>
                                                <p class="faq-heading">Venmo</p>
                                                <div class='faq-arrow'></div>
                                                <form class="trading-form">
                                                    <div class="email-feild trade-feild">
                                                        <input type="text" name="" id="Email" placeholder="Email Address" required>
                                                        <!-- <div class="icon"><img src="img/Layer174.png" alt=""></div> -->
                                                    </div>
                                                    <div class="email-feild trade-feild">
                                                        <input type="text" name="" id="Email" placeholder="Mobile Number" required>
                                                        <!-- <div class="icon"><img src="img/Layer175.png" alt=""></div> -->
                                                    </div>

                                                </form>
                                            </label>
                                            <input id='faq-d' type='checkbox'>
                                            <label for='faq-d'>
                                                <p class="faq-heading">Square Cash</p>
                                                <div class='faq-arrow'></div>
                                                <form class="trading-form">
                                                    <div class="email-feild trade-feild">
                                                        <input type="text" name="" id="Email" placeholder="Email Address" required>
                                                        <!-- <div class="icon"><img src="img/Layer174.png" alt=""></div> -->
                                                    </div>
                                                    <div class="email-feild trade-feild">
                                                        <input type="text" name="" id="Email" placeholder="Mobile Number" required>
                                                        <!-- <div class="icon"><img src="img/Layer175.png" alt=""></div> -->
                                                    </div>

                                                </form>
                                            </label>
                                            <input id='faq-e' type='checkbox'>
                                            <label for='faq-e'>
                                                <p class="faq-heading">PayPal</p>
                                                <div class='faq-arrow'></div>
                                                <form class="trading-form">
                                                    <div class="email-feild trade-feild">
                                                        <input type="text" name="" id="Email" placeholder="Email Address" required>
                                                        <!-- <div class="icon"><img src="img/Layer174.png" alt=""></div> -->
                                                    </div>
                                                    <div class="email-feild trade-feild">
                                                        <input type="text" name="" id="Email" placeholder="Mobile Number" required>
                                                        <!-- <div class="icon"><img src="img/Layer175.png" alt=""></div> -->
                                                    </div>

                                                </form>
                                            </label>

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