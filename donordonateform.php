<?php
session_start();
include '_dbconnect.php';
$loguser = $_SESSION['username'];
if (!isset($username)) {
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


  <!--page Title-->
  <title>DONATION FORM</title>
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

</head>


<body>


  <!--navigation bar-->
  <div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg my-navbar">
      <a class="navbar-brand " href="#"><img src="./images/v4u.jpg" height="100" width='150' alt="" loading="lazy"></a>
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="./donorpage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./donorprofile.php">My Profile</a>
          </li>
          <li class="nav-item">
            <a href="./donordonations.php" class="nav-link ">My Donations</a>
          </li>
          <li class="nav-item">
            <a href="./donordonateform.php" class="nav-link active">Donate</a>
          </li>
          <li class="nav-item">
            <a href="./logout.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!--nav bar end-->

  <!--donation form text-->
  <?php
  include '_dbconnect.php';
  $username = $_SESSION['username'];
  $users = "SELECT * FROM users where username='$username'";
  $users_run = mysqli_query($conn, $users);
  if (mysqli_num_rows($users_run) > 0) {
    while ($row = mysqli_fetch_assoc($users_run)) {
      $uid = $row['id']; ?>
      <section class="bg-light donation mx-auto">
        <div class="container my-1 bg-white">
          <h4 class=" text-center pt-4">PROJECT AAHAR - DONATION FORM
            <hr class="donation-green-hr">
          </h4>
          <div class="row my-3" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-delay="200">
            <div class='col'></div>
            <div class="col ">
              <form action="bill.php" name='donationform' method="post">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input class="form-control" type="text" name='name' placeholder="Your Name..." pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters." value="<?php echo $row['name']; ?>" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" name="email" placeholder="Your Email..." value="<?php echo $row['email']; ?>" required>
                </div>
                <div class="form-group">
                  <label for="Phone">Phone</label>
                  <input type="tel" id="phone" name="phone" name='phone' maxlength="10" pattern="[0-9]{10}" title="Only 10 Numbers are allowed." class="form-control" placeholder="Your Phone Number..." value="<?php echo $row['phone']; ?>" required>
                </div>
                <div class="form-group">
                  <label for="donation-option">No. of Packets want to pay for</label>
                  <select class="form-control" name="packets" id="donation-option" onchange="setAmount()" autofocus required>
                    <option value="">--Select Option--</option>
                    <option value="1 Packet">1 Packet</option>
                    <option value="2 Packets">2 Packets</option>
                    <option value="3 Packets">3 Packets</option>
                    <option value="4 Packets">4 Packets</option>
                    <option value="5 Packets">5 Packets</option>
                    <option value="More than 5 Packets">More than 5 Packets</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input class="form-control" type="text" name="amount" id="amount" name='name' pattern=[0-9]+ title="Amount should be in numbers" required>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-success btn-lg mt-2 ">Submit</button>
              </form>
              <hr>
            </div>
            <div class='col'></div>
          </div>
          <h3 class="text-center my-4">Our each Packet cost for ₹.50, so pay in factor of ₹.50</h3>
          <div class="row text-center my-4 pb-5 ">
            <div class="col border-right" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="200">
              <p style="text-decoration: underline; font-weight: bold; font-size: larger;">Scan this to pay via Paytm</p>
              <img src="./images/donation_images/paytm-payment-gateway.jpg" class="pr-5" alt="paytm Qr code" width="350" height="250">
            </div>
            <div class="col px-auto" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="200">
              <p style="text-decoration: underline; font-weight: bold; font-size: larger;">Scan this to pay via Google Pay</p>
              <img src="./images/donation_images/google-pay-payment-gateway1.jpg" class="pr-5" alt="Googlepay Qr code" width="350" height="350">
            </div>
          </div>
        </div>
      </section>
  <?php
    }
  }
  ?>

  <!-- donation form end-->

  <button onclick="topFunction()" id="topbtn"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

  <!-- Optional JavaScript -->
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
    function setAmount() {
      var select = document.getElementById("donation-option");
      var amountInput = document.getElementById("amount");

      if (select.value == "More than 5 Packets") {
        amountInput.value = amountInput.value.trim();
        if (amountInput.value == "00" | "50" | "100" | "150" | "200" | "250") {
          amountInput.value = "1000"; // Default to 1000 if no value entered
        }
      } else {
        // Option selected, set amount based on option
        if (select.value == "1 Packet") {
          amountInput.value = "50";
        } else if (select.value == "2 Packets") {
          amountInput.value = "100";
        } else if (select.value == "3 Packets") {
          amountInput.value = "150";
        } else if (select.value == "4 Packets") {
          amountInput.value = "200";
        } else if (select.value == "5 Packets") {
          amountInput.value = "250";
        } else if (select.value == "") {
          amountInput.value = "00";
        }
      }
    }
  </script>

</body>

</html>