<?php
$message = ""; 
$message2 = ""; 
?>
<?php  
require ('inc/dbconnect.php');


if(isset($_POST['submit'])){

// Variables for user submit form()
$fname = $_POST['fname'];  
$email = $_POST['email'];
$tel = $_POST['tel']; 
$quali = $_POST['quali']; 
$pass = $_POST['pass'];  
$practice = $_POST['practice'];
$address = $_POST['address'];


// Sql statements start
if(!empty($fname) && !empty($email) && !empty($quali) && !empty($address)){
// Insert data into database

$query = "INSERT INTO `doctorsprofile`(`drname`, `email`, `phone`, `qualification`, `practice`, `address`, `password`) 
VALUES ('$fname','$email','$tel','$quali','$practice','$address','$pass')";

if($query_run = mysqli_query($conn, $query)){

  $message =  "<div class=\"alert alert-success\">
  <a href=\"login.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"check\">&times;</a>
   Successfully Signed Up. <a href=\"login.php\">Click to Sign in </a></div>";

}else{
 $message =  "<div class=\"alert alert-danger\">
    <a href=\"register.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
     Kindly fill the form again</div>";
    }
  }
  else{
    $message2 =  "<div class=\"alert alert-danger\">
       <a href=\"register.php\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        Kindly fill the form again</div>";
       }
} 
 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AlignIT | Doctors Portal</title>  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page" style="background-image: url('dist/img/dentist-2.jpg'); background-size:cover">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>Doctors</b> Portal</a>
  </div>



  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Sign Up Here</p>
      <?php echo $message?>
      <?php echo $message2?>
      <form action="register.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="fname" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="tel" class="form-control" placeholder="Phone Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="quali" class="form-control" placeholder="Qualification">
          <option value="0">Qualification</option>
              <option value="Dentist">Dentist</option>
              <option value="Orthodontist">Orthodontist</option>
            </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-tel"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pass" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="practice" class="form-control" placeholder="Name of Practice">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-place"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="address" class="form-control" placeholder="Address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="login.php" class="text-center">Click here to Sign in</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
