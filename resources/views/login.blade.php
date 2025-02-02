<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoachConnect - SportHub</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="/assets/images/PA.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/assets/js/login.js" defer></script>
</head>

<body>

</body>

</html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Page | Pedro Reves</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="/register" method="POST">
                @csrf
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email to registration</span>
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="/login" method="POST">
                @csrf
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email/password</span>
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <a href="#">Forget your Password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Choose coaching what you want and get the best price!</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Join Coach Connect's Circle</h1>
                    <p>Register with your Personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    @if (session('message'))
        <script>
            alert("{{ session('message') }}")
        </script>
    @endif
</body>

</html>
