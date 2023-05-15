<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Butak-Panderman</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets/colorlibLogin/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/colorlibLogin/css/style.css')}}">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="https://th.bing.com/th/id/R.bca4ebe55c89a94b65187aced759642c?rik=DU%2fDFh729P83hA&riu=http%3a%2f%2fgetdrawings.com%2fvectors%2fcolorado-mountains-vector-33.jpg&ehk=9FAYkuy3ezyNqChb3jw71PmvgGuTpvu39SQuFDlQ0z0%3d&risl=&pid=ImgRaw&r=0" alt="sing up image"></figure>
                        <a href="register" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" action="{{ url('/login') }}" class="register-form" id="login-form">
                          @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('assets/colorlibLogin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/colorlibLoginjs/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>