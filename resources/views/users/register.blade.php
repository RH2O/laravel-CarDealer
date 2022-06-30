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
            
      <div class="container right-panel-active" id="container" style="margin-top: 100px;">

        <!-- sign up form  -->

        <div class="form-container sign-up-container">
            <form action="/register" method="POST">
                @csrf
                <h1>Create Account</h1>
               
                <input type="text" name="name" placeholder="Name"  value="{{old('name')}}"/>
                @error('name')
                    <span class="text-danger text-left">{{$message}}</span>
                @enderror
                <input type="email" name="email" placeholder="Email"  value="{{old('email')}}" />
                @error('email')
                <span class="text-danger text-left">{{$message}}</span>
                @enderror
                <input type="password" name="password" placeholder="Password"  value="{{old('password')}}"/> 
                @error('password')
                <span class=" text-danger ">{{$message}}</span>
                 @enderror
                 <br>
                <button>Sign Up</button>
            </form>
        </div>


        <!-- sign in form  -->

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p style="color:white;">To keep connected with us please login with your personal info</p>
                   <a href="/login"><button class="ghost" id="signIn">Sign In</button></a>
                </div>
            </div>
        </div>
    </div>
    
<!-- *****form Area Ends ***** -->


</body>

</html>