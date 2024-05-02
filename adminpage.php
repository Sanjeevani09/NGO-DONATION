<!DOCTYPE html>
<html lang="en">

<head>
  <!--meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!--page Title-->
  <title>ADMIN</title>
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <style>
    header,
    main,
    footer {
      padding-left: 240px;
    }

    body {
      backgroud: white;
    }

    @media only screen and (max-width: 992px) {

      header,
      main,
      footer {
        padding-left: 0;
      }
    }

    #credits li,
    #credits li a {
      color: white;
    }

    #credits li a {
      font-weight: bold;
    }

    .footer-copyright .container,
    .footer-copyright .container a {
      color: #BCC2E2;
    }

    .fab-tip {
      position: fixed;
      right: 85px;
      padding: 0px 0.5rem;
      text-align: right;
      background-color: #323232;
      border-radius: 2px;
      color: #FFF;
      width: auto;
    }
  </style>

</head>

<body>
  <div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg my-navbar">
      <a class="navbar-brand " href="#"><img src="./images/v4u.jpg" height="100" width='150' alt="" loading="lazy"></a>
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link active" href="./adminpage.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Events </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="nav-link" href="managefeatureevent.php">Featured Event</a>
              <a class="nav-link" href="manageevents.php">Events</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./donations.php">View Donations</a>
          </li>
          <li class="nav-item">
            <a href="./registeredusers.php" class="nav-link ">Registered Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./viewvolunteer.php">View Volunteer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./contactqueries.php">View Queries</a>
          </li>
          <li class="nav-item">
            <a href="./adminlogin.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <section>
    <div class="container py-4 my-8 bg-light" style="box-shadow: 2px 2px 2px 2px #777;">
      <div class="row">
        <div class="col s6">
          <div style="padding: 35px;" align="center" class="card">
            <div class="row">
              <div class="left card-title">
                <b>REGISTERED DONORS</b>
              </div>
            </div>
            <div class="row">
              <a href="registeredusers.php">
                <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                  <i class="indigo-text text-lighten-1 large material-icons">person</i>
                  <span class="indigo-text text-lighten-1">
                    <h5>DONORS</h5>
                  </span>
                </div>
              </a>

              <?php
              $conn = new mysqli("localhost", "root", "", "ngo");
              $sql = "SELECT COUNT(*) as total_users FROM users";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_users = $row['total_users'];
              echo "<h5> There are total <b> $total_users </b> Registered Donors till now.</h5>";
              $conn->close();
              ?>
              <div class="col s1">&nbsp;</div>
              <div class="col s1">&nbsp;</div>
            </div>
          </div>
        </div><br>

        <div class="col s6">
          <div style="padding: 35px;" align="center" class="card">
            <div class="row">
              <div class="left card-title">
                <b>TOTAL DONATIONS</b>
              </div>
            </div>
            <div class="row">
              <a href="donations.php">
                <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                  <i class="indigo-text text-lighten-1 large material-icons">volunteer_activism</i>
                  <span class="indigo-text text-lighten-1">
                    <h5>DONATIONS</h5>
                  </span>
                </div>
              </a>
              <?php
              $conn = new mysqli("localhost", "root", "", "ngo");
              $sql = "SELECT SUM(amount) as total_donations FROM donation_form";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $total_donations = $row['total_donations'];
              echo "<h5> We have received <b> ₹$total_donations </b> donations till now.</h5>";
              $conn->close();
              ?>
              <div class="col s1">&nbsp;</div>
              <div class="col s1">&nbsp;</div>

            </div>
          </div>
        </div>
      </div><br>

      <div class="row">
        <div class="col s6">
          <div style="padding: 35px;" align="center" class="card">
            <div class="row">
              <div class="left card-title">
                <b>TOTAL INTERNSHIP APPLIERS</b>
              </div>
            </div>
            <div class="row">
              <a href="viewvolunteer.php">
                <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                  <i class="indigo-text text-lighten-1 large material-icons">work</i>
                  <span class="indigo-text text-lighten-1">
                    <h5>APPLIERS</h5>
                  </span>
                </div>
              </a>
              <?php
              $conn = new mysqli("localhost", "root", "", "ngo");
              $sql = "SELECT COUNT(*) as internship_form FROM internship_form";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $internship_form = $row['internship_form'];
              echo "<h5> There are total <b> $internship_form </b> internship appliers till now.</h5>";
              $conn->close();
              ?>
              <div class="col s1">&nbsp;</div>
              <div class="col s1">&nbsp;</div>
            </div>
          </div>
        </div><br>

        <div class="col s6">
          <div style="padding: 35px;" align="center" class="card">
            <div class="row">
              <div class="left card-title">
                <b>TOTAL QUERIES</b>
              </div>
            </div>
            <div class="row">
              <a href="contactqueries.php">
                <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                  <i class="indigo-text text-lighten-1 large material-icons">contacts</i>
                  <span class="indigo-text text-lighten-1">
                    <h5>QUERIES</h5>
                  </span>
                </div>
              </a>
              <?php

              $conn = new mysqli("localhost", "root", "", "ngo");

              $sql = "SELECT COUNT(*) as queries FROM contact_form";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $queries = $row['queries'];
              echo "<h5> We have received <b> $queries </b> Query form till now.</h5>";
              $conn->close();
              ?>
              <div class="col s1">&nbsp;</div>
              <div class="col s1">&nbsp;</div>

            </div>
          </div>


  </section>


  <button onclick="topFunction()" id="topbtn"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <!--Animation on scroll (Aos) link and script-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    $('.button-collapse').sideNav();

    $('.collapsible').collapsible();

    $('select').material_select();
  </script>

</body>

</html>