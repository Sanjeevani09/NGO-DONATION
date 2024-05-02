<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

  <!--aos link-->
  <link rel="stylesheet" type="text/css" href="aos/aos.css">

  <title>WE FOR YOU - EVENTS</title>
  <!-- Favicon-->
  <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />


  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- custom add-ons -->
  <link rel="stylesheet" type="text/css" href="add.css">
  <script src="owl.carousel/owl.carousel.min.js"></script>
  <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/css/all.css">

</head>

<body>

  <!------navigation------->
  <div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg my-navbar">
      <a class="navbar-brand " href="#"><img src="./images/v4u.jpg" height="100" width='150' alt="" loading="lazy"></a>
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link " href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="aboutus.php">About us</a>
          </li>
          <li class="nav-item">
            <a href="events.php" class="nav-link active">Events</a>
          </li>
          <li class="nav-item">
            <a href="internship.php" class="nav-link">Internship</a>
          </li>
          <li class="nav-item">
            <a href="vol.php" class="nav-link ">Volunteer</a>
          </li>
          <li class="nav-item">
            <a href="projectaahar.php" class="nav-link">Project Aahar</a>
          </li>
          <li class="nav-item">
            <a href="contactus.php" class="nav-link">Contact Us</a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!------end_navigation-->
  <!---main_body-->
  <section>
    <div class="container py-4 my-4 bg-light" style="box-shadow: 5px 5px 5px 5px #777;">
      <div class="about text-center">
        <h2 class="mb-5">EVENTS
          <hr class="green-hr">
        </h2>
      </div>
      <hr>
      <!--feature event-->
      <?php
      $conn = mysqli_connect("localhost", "root", "", "ngo");

      $sql = "SELECT * FROM featureevent";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row1 = mysqli_fetch_assoc($result)) {
          $feid = $row1['id'];
          $date = date("d F, Y", strtotime($row1['date']));
          $desc = $row1['description'];
          $maxCharacters = 300;
          if (strlen($row1['description']) > $maxCharacters) {
            $shortenedValue = substr($row1['description'], 0, $maxCharacters) . '...';
          } else {
            $shortenedValue = $row1['description'];
          }

      ?>
          <div class="row justify-content-start" style="background-color:seashell">
            <div class="col-md-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
              <?php echo "<img src='" . $row1['image'] . "' class='img-fluid';>" ?>
            </div>
            <div class="col-md-7 pt-4" data-aos="fade-left">
              <h2><?php echo "$row1[name]"; ?></h2>
              <h4><b><a href="#">Uncategorized </a> / <a href="#"> By WeForYou </a></b></h4>
              <h6><b><?php echo "$date"; ?></b></h6>
              <p class="font-italic">
                <?php echo "$shortenedValue"; ?>
              </p>
              <?php echo "<a href='myfeatureevent.php?id=$feid'><button class='btn btn-primary'>Read More »</button></a>"; ?>
            </div>
          </div>
          <hr>
      <?php mysqli_close($conn);
        }
      } ?>

      <!--event-->
      <?php
      include '_dbconnect.php';
      $sql1 = "SELECT * FROM event order by date";
      $result1 = mysqli_query($conn, $sql1);

      if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
          $eid = $row['id'];
          $date = date("d F, Y", strtotime($row['date']));
          $desc1 = $row['description'];
          $maxCharacters1 = 300;
          if (strlen($row['description']) > $maxCharacters1) {
            $shortenedValue1 = substr($row['description'], 0, $maxCharacters1) . '...';
          } else {
            $shortenedValue1 = $row['description'];
          }
      ?>

          <div class="row justify-content-start">
            <div class="col-md-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
              <?php echo "<img src='" . $row['image'] . "' class='img-fluid';>" ?>
            </div>
            <div class="col-md-7 pt-4" data-aos="fade-left">
              <h2><?php echo "$row[name]"; ?></h2>
              <h4><b><a href="#">Uncategorized </a> / <a href="#"> By WeForYou </a></b></h4>
              <h6><b><?php echo "$date"; ?></b></h6>
              <p class="font-italic">
                <?php echo "$shortenedValue1"; ?>
              </p>
              <?php echo "<a href='myevent.php?id=$eid'><button class='btn btn-primary'>Read More »</button></a>"; ?>
            </div>
          </div>
          <hr>
      <?php }
      } ?>

    </div>
  </section>
  <!--main_body_end-->
  <!---------footer---------->

  <footer id="footer">
    <div class="footer-top pb-4">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact" style="height:200px">
            <img src="./images/logo.jpg" height="85%">
          </div>
          <div class="col-lg-4 col-md-6 footer-contact" style="height: 200px">
            <h3 style="color: #009970"><b>We For You</b></h3>
            <p><a href="https://goo.gl/maps/KQ1NrWw3Bs63noTP9" target="_blank" style="color: #777777;">
                Woodland Park, Block C<br>
                Siddharth Nagar, Mulund West<br>
                Mumbai, 400080</a><br><br>

              <strong>Phone:</strong> <a href="tel:+919082689552" style="color: #777777;">+919082689552</a><br>

              <strong>Email:</strong> <a href="mailto:neha71549@gmail.com" style="color: #777777;">weforyou@gmail.com</a><br>
            </p>
          </div>
          <div class="col-lg-4 pt-4 mt-2">
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
              <a href="https://twitter.com/MrRahulXR?t=begnBiAb16DhhK29Dizdaw&s=08" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/Neha%20Gupta/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/weforyou26?igshid=ZDdkNTZiNTM=" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCJs3CwS0-UIsYlDkw8TsO0g" class="google-plus" target="_blank"><i class="bx bxl-youtube"></i></a>
              <a href="https://www.linkedin.com/in/mrrahul-rajpurohit-a71123222" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <button onclick="topFunction()" id="topbtn"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>


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
  <script src="aos/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>