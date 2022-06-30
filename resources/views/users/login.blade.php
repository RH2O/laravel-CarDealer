<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" href="css/form.css">


</head>
<body>

      <!-- ***** form Area Starts ***** -->
            
      <div class="container" id="container" style="margin-top: 100px;">


        <!-- sign in form  -->


        <div class="form-container sign-in-container">
            <form action="/login" method="POST">
                @csrf
                <h1>Sign in</h1>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}"/>
                @error('email')
                <span class="text-danger text-left">{{$message}}</span>
                @enderror
                <input type="password"  name="password" placeholder="Password"  value="{{old('password')}}"/>
                @error('password')
                <span class=" text-danger ">{{$message}}</span>
                 @enderror
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p  style="color:white;">Enter your personal details and start journey with us</p>
                    <a href="/register"><button class="ghost" id="signUp">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>
    
<!-- *****form Area Ends ***** -->



</body>

</html>