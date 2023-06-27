<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Butak-Panderman</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets/colorlibLogin/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/colorlibLogin/css/style.css')}}">
</head>
<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="{{ url('/register') }}" method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_confirmation" id="password" class="form-control @error('password_confirmed') is-invalid @enderror" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <h2 class="center-align">Butak</h2>
                        <h2>Panderman</h2>
                        <figure><img src="https://th.bing.com/th/id/R.bca4ebe55c89a94b65187aced759642c?rik=DU%2fDFh729P83hA&riu=http%3a%2f%2fgetdrawings.com%2fvectors%2fcolorado-mountains-vector-33.jpg&ehk=9FAYkuy3ezyNqChb3jw71PmvgGuTpvu39SQuFDlQ0z0%3d&risl=&pid=ImgRaw&r=0" alt="sing up image"></figure>
                        <a href="login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>