<!DOCTYPE html>
<html lang="en">

<head>
  <!--meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!--page Title-->
  <title>WE FOR YOU - ADMIN LOGIN</title>
  <!-- Favicon-->
  <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />

  <!--stylesheet link-->
  <link rel="stylesheet" type="text/css" href="style.css">


  <!--animation (AOS - Animation on scroll) link-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <!-- custom add-ons -->
  <link rel="stylesheet" type="text/css" href="add.css">
  <script src="owl.carousel/owl.carousel.min.js"></script>
  <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/css/all.css">

  <style>
    span {
      position: absolute;
      right: 25px;
      transform: translate(0, -50%);
      top: 61%;
      cursor: pointer;
    }

    .fa {
      font-size: 15px;
      color: #7a797e;
    }
  </style>


</head>


<body>
  <section>
    <div class="container py-4 my-4 bg-light" style="box-shadow: 2px 2px 2px 2px #777;">
      <section style="background-color: aliceblue;">
        <div class="container ">
          <div class="row">
            <div class="col"></div>
            <div class="col login" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-delay="200"><br>
              <h2>Admin Login
                <hr class="internship-green-hr">
              </h2>
              <form action="adminlogin.php" method="post" id="adminloginform" name="adminloginform">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Your Username.." aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                  <label for="password">Password</label><br>
                  <input type="password" class="form-control" id="password" placeholder="Your Password.." name="password">
                  <span>
                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                  </span>
                </div>
                <button type="submit" class="btn btn-outline-success  mt-2 " name="adminlogin">Login</button>
                <hr>
              </form>
              <a href="index.php"><button class="btn btn-outline-success  mt-2 ">Home</button></a>
            </div>
            <div class="col"></div>
          </div>
        </div>
      </section>
    </div>
  </section>
  <?php
  $adminusername = "admin";
  $adminpassword = "123";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ausername = $_POST['username'];
    $apassword = $_POST['password'];
    if ($ausername == $adminusername && $apassword == $adminpassword) {
      header("location: adminpage.php");
    } else {
      echo '<script>alert("Invalid Username or Password..")</script>';
      header("adminloginpage.php");
    }
  }
  ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </div>

  <button onclick="topFunction()" id="topbtn"><i class="fa fa-arrow-up" aria-hidden="true"></i></button><!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <!-- navbar animation -->
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(window).scrollTop() > 60) {
          $('.my-navbar').addClass('navbar-scroll');
        } else {
          $('.my-navbar').removeClass('navbar-scroll');
        }
      });
    });
  </script>
  <!--back to top btn-->
  <script type="text/javascript">
    myButton = document.getElementById("topbtn");
    window.onscroll = function() {
      scrollfunction()
    };

    function scrollfunction() {
      if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        myButton.style.display = "Block";
      } else {
        myButton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!--Animation on scroll (Aos) link and script-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

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


</body>



</html>