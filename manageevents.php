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
            <a class="nav-link" href="./adminpage.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Events </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="nav-link" href="managefeatureevent.php">Featured Event</a>
              <a class="nav-link active" href="manageevents.php">Events</a>
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
    <div class="container py-4 my-4 bg-light" style="box-shadow: 2px 2px 2px 2px #777;">
      <?php

      include "_dbconnect.php";

      $sql = "SELECT * FROM event";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
      ?>
        <h2 style="text-align : center; font-weight: bold;">Event :
          <hr class="internship-green-hr">
        </h2><br>
        <div class="container" style="text-align:center">
          <a href="addevent.php">
            <buttton class="btn btn-primary">Add Event</buttton>
          </a>
        </div><br>
        <table class="table table-hover">
          <thead class="thead-light">
            <?php echo "<tr><th>Event Name</th><th>Event Date</th><th>Event Image</th><th>Event Description</th><th>Edit</th><th>Delete</th></tr>"; ?></thread>
            <?php while ($row = mysqli_fetch_assoc($result)) {
              $eid = $row["id"];
              $date = date("d F, Y", strtotime($row['date']));
              $desc = $row['description'];
              $maxCharacters = 200;
              if (strlen($row['description']) > $maxCharacters) {
                $shortenedValue = substr($row['description'], 0, $maxCharacters) . '...';
              } else {
                $shortenedValue = $row['description'];
              }
              echo "<tr><td>" . $row["name"] . "</td><td>" . $date . "</td><td>" . "<img src='" . $row['image'] . "'height='100px'; width='200px';>" . "</td><td>" . $shortenedValue . "</td><td><a href='editevent.php?id=$eid'><button class='btn btn-primary'>Edit</button></a></td><td><a href='deleteevent.php?id=$eid'><button class='btn btn-danger'>Delete</button></a></td></tr>";
            }
            echo "</table>";
          } else { ?>
            <div class="container" style="text-align:center">
            <?php
            echo "<b>No Events Found...</b><br><br>";
            echo "<a href='addevent.php'><button class='btn btn-primary'>Add Events</button></a>";
          }
          mysqli_close($conn);
            ?>
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