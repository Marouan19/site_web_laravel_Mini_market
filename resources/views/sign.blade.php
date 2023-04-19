<?php 

if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];
  $user_type = $_POST['user_type'];

  $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){

     $error[] = 'user already exist!';

  }else{

     if($pass != $cpass){
        $error[] = 'password not matched!';
     }else{
        $insert = "INSERT INTO user(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
        mysqli_query($conn, $insert);
     }
  }

};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>sign up</title>
</head>
<body>
<section class="vh-100 ">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
             ?>

              <form method="post">

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name :</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" placeholder="name"/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email :</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" placeholder="email"/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password :</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password"  placeholder="password"/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Repeat your password :</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="cpassword" placeholder="password"/>
                </div>

                <br>

                <div class="d-flex justify-content-center">
                <a href="/sign" class="btn btn-info btn-lg btn-block"><u>register</u></a>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

                    <p class="text-center text-muted mt-5 mb-0">back to user page? <a href="/"
                    class="fw-bold text-body"><u>click here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>