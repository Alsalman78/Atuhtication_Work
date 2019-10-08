<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

 <link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }}">

</head>
<body  id="LoginForm">   
	
 <div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login"  method="post" 
 action="{{ URL::to('loginStore')}}"> {{  csrf_field() }}

        <div class="form-group">
            <input type="email" name="email" class="form-control"  placeholder="Email Address">

        </div>

        <div class="form-group">

            <input type="password" name="password" class="form-control"  placeholder="Password">

        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
</div></div></div>




 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</body>
</html>