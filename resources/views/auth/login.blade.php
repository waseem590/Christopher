@include('layout.master')

<body>
    <div class="login-section">

        <div class="container">

            <div class="logo-top">
                <img src="{{asset('image/login-logo.png')}}" alt="">
            </div>
            <div class="login-page">
                <div class="login-info">

                    <div class="login-title">
                        <h1>Login</h1>
                    </div>
                    <div class="logoin-logo"><img src="{{asset('image/login-icon.png')}}" alt="Login icon"></div>
                    <div class="login-form">
                            @if (session()->has('error'))
                                <div class="bg-red-500 p-4 rounded-lg mb-6 text-center alert">
                                    <b>{{ session()->get('error') }}</b>
                                </div>
                            @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="email-feild">
                                <input type="text" name="email" id="Email" placeholder="Username" required>
                                <div class="icon"><img src="{{asset('image/Layer174.png')}}" alt=""></div>
                            </div>
                            <div class="email-feild">
                                <input type="password" name="password"  placeholder="Password" required>
                                <div class="icon"><img src="{{asset('image/Layer175.png')}}" alt=""></div>
                            </div>
                            <div class="form-btn">
                                <button class="btn" type="submit"><a>Sign In</a></button>
                                <div class="forget"><a href="">Forgot Password?</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer">
            <div class="container">
                <div class="footer-description">
                    <p class="uper">2022 © All rights reserved by yourwebsite
                    </p>
                    <p class="lower">Designed and Developed by <a href=" http://www.leadconcept.com " target="_blank">LEADconcept</a></p>
                </div>
            </div>
        </div>
    </div>
</body>