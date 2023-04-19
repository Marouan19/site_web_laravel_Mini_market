<?php

$errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = $_POST['email'];
        $password = $_POST['password'];
        if (!$email) {
            $errors[] = 'email is required';
        }
        if (!$password) {
            $errors[] = 'password required';
        }
        $statement = $pdo->prepare("SELECT * FROM user WHERE email='".$email."' and password='".$password."'");
        $statement->execute();
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($user)) {
             if($user[0]['user_type']==='admin'){
                header('location:admin_page.php');
             }elseif($user[0]['user_type'] === 'user'){
                header('location:user_page.php');
             }
        }
        else {
            $errors[] = 'email or password are incorrect';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>login</title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">


        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post" action="">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <?php
                if(isset($errors)){
                    foreach($errors as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>


            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" placeholder="Email address" />
              
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" placeholder="password"/>
       
            </div>

            <div class="pt-1 mb-4">
              <a href="/admin" class="btn btn-info btn-lg btn-block"><u>login</u></a>
            </div>

            

            <p>Don't have an account? <a href="/sign" class="link-info">Register here</a></p>


            <p >back to user page? <a href="/"
                    class="link-info"><u>click here</u></a></p>


          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="online-shopping-t.jpg"
          alt="Login image" class="w-100 vh-100 image-market" style="object-fit: contain; object-position: left;">
      </div>
    </div>
  </div>
</section>
</body>
</html>