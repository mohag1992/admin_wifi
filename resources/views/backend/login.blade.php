
<html>
  <head>

 <!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
 <link href="/assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="/css/custom.css" rel="stylesheet">
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" action="/backend/user/dologin" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">


            <input type="email" class="form-control" name = "email" id="inputEmail" placeholder="Email Address">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name ="password" id="inputPassword" placeholder="Password">

        </div>
        <div class="forgot">
       
</div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
<p class="botto-text"> </p>
</div></div></div>


</body>
</html>
