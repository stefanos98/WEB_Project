<!DOCTYPE html>
<html lang="en">
<head>
  <title>Patras Map</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="/backend/back.js"></script>

  <!-- ########### CSS ###########-->
  <style>
      body {
          background-image: url("patras1.jpg");
          background-repeat: no-repeat;
          background-attachment: scroll;
          background-size: cover;
          font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      }
      p {
          color: burlywood;
      }
      h3{
          color:burlywood;
      }
      h1{
          color:lightsalmon;
      }
  </style>
</head>
<body>

  <!-- ########### Header ###########-->
<div class="jumbotron text-center">
  <h1>Welcome to Patras Map</h1>
  <p>Register or Login to continue</p> 
</div>
 
<!-- ########### User Login ###########-->
<div class="container">
  <div class="row">
    <form class="col-sm-4" method="POST" action="/signin">
      <h3>User Login</h3>
        <p>
          <label for="username">Username: <input name="username" id="username" type="text" placeholder="Type your username" required></label>
        </p>
        <p>
            <label for="pw1">Password:</label>
            <input name="password" id="pw1"  type="text" placeholder="Type your password" pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}" required title=" 8 characters and at least 1 Upercase,1 Symbol and 1 Number ">
        </p>
      </p>
      <p>
            <button type="submit" class="btn btn-light">Sign In</button>
      </p>
    </form>

<!-- ########### Admin Login ###########-->
    <form class="col-sm-4" method="POST" action="/login">
      <h3>Admin Login</h3>
      <p>
        <label for="username">Username: <input name="username" id="username2" type="text" placeholder="Type your username" required></label>
        <p>
            <label for="pw">Password:</label>
            <input name="password" id="pw"  type="text" placeholder="Type your password" pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}" required title=" 8 characters and at least 1 Upercase,1 Symbol and 1 Number ">
        </p>
      </p>
      <p>
          <button type="submit" class="btn btn-light">Sign In</button>
      </p>
    </form>
    
<!-- ########### Info ###########-->
    <div class="col-sm-4">
            <h3>Contact Us</h3>        
            <p>
                <label>Visit our page <a href="https://www.ceid.upatras.gr">University of Patras</a></label>
            </p>
            <p>
                <label>Email us at 105436510543111054314@upatras.gr</label>
            </p>
    </div>
  </div>
</div>

</body>
</html>