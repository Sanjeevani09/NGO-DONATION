<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '_dbconnect.php';

  $filename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "users/" . $filename;
  move_uploaded_file($tempname, $folder);

  $image = $_POST['image'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists = false;
  if (($password == $cpassword) && $exists == false) {
    $sql = "INSERT INTO users(image, name, email, phone, username, password ) VALUES ('$folder','$name', '$email', '$phone', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
    }
  } else {
    echo "<script>alert('Password Do not match')</script>";
  }
  header("location: login.php");

  if ($showAlert) {
    echo '<script>alert("Your Form has been Submitted..")</script>';
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no minimum-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--stylesheet link-->
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" type="text/css" href="add.css">
  <script src="owl.carousel/owl.carousel.min.js"></script>
  <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/css/all.css">

  <title>SIGN UP</title>

  <style>
    span {
      position: absolute;
      right: 25px;
      transform: translate(0, -50%);
      top: 76%;
      cursor: pointer;
    }

    .fa {
      font-size: 15px;
      color: #7a797e;
    }
  </style>


</head>

<body>
  <div class="container py-4 my-4 bg-light" style="box-shadow: 2px 2px 2px 2px #777;">
    <section style="background-color: aliceblue;">
      <div class="container">
        <div class="row ">
          <div class="col"></div>
          <div class="col signup" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-delay="200"><br>
            <h2>Sign Up Form
              <hr class="internship-green-hr">
            </h2>
            <div class="form-group">
              <form action="signup.php" name='signupform' id="signupform" method="post" enctype="multipart/form-data">
            </div>
            <div class="form-group">
              <label for="resume-btn"><i class="fa fa-upload " aria-hidden="true" style="color: #009970;"></i> Upload Your Image</label>
              <input type="file" name="image" id="resume-btn" class="form-control" style="overflow: hidden;" required>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name='name' pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters." placeholder="Your Name..." required>
            </div>
            <div class="form-group">
              <label for="Phone">Phone</label>
              <input type="tel" id="phone" name="phone" class="form-control" maxlength="10" pattern="[0-9]{10}" title="Only 10 Numbers are allowed." placeholder="Your Phone Number..." required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" placeholder="Your Email..." required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input class="form-control" name="username" placeholder="Create your username..." required></input>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Your Password..." required>
              <span>
                <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
              </span>
            </div>
            <div class="form-group">
              <label for="cpassword">Confirm Password</label>
              <input type="password" class="form-control" id="cpassword" name="cpassword" required>
              <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>

            </div>
            <div style="text-align: center">
              <button type="submit" class="btn btn-outline-success  mt-2 " name="submit">Submit</button>
            </div>
            </form>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </section>
  </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<script>
  var state = false;

  function toggle() {
    if (state) {
      document.getElementById("password").setAttribute("type", "password");
      document.getElementById("eye").style.color = '#7a797e';
      state = false;
    } else {
      document.getElementById("password").setAttribute("type", "text");
      document.getElementById("eye").style.color = '#5887ef';
      state = true;
    }
  }
</script>