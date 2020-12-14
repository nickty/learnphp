<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register</title>

    <style>
    .login-form {
        width: 340px;
        margin: 50px auto;
        font-size: 15px;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    </style>

  </head>
  <body>
  
  
  <div class="login-form">
 
        <form action="reg_data.php" method="post">
            <h2 class="text-center">Register</h2>       
            <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <input type="number" name="age" class="form-control" placeholder="Age">
            </div>
            <div class="form-group">
                <input type="number" name="phone" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="address" placeholder="Write your address"></textarea>
            </div>
            <div class="form-group">
                <input type="number" name="zip_code" class="form-control" placeholder="Zip Code">
            </div>
            <div class="form-group">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
            <div class="form-group">
                <input type="text" name="country" class="form-control" placeholder="Country">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Register Now</button>
            </div>
                   
        </form>
    <p class="text-center"><a href="index.php">I already have an account!</a></p>
    </div>
  
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>