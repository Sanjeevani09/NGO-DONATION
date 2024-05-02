<?php include 'change_password_process.php'; ?>
<!doctype html>
<html lang="en">

<head>ss
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

  <title>Reset Password</title>

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
            <h2>Create New Password
              <hr class="internship-green-hr">
            </h2>
            <div class="form-group">
              <form action="change_password_process.php" method="post">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" placeholder="Your Email..." required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="new_password" placeholder="Your Password..." required>
              <span>
                <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
              </span>
            </div>
            <button type="submit" class="btn btn-outline-success  mt-2 " name="change">Update Password</button>
            </form>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </section>
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