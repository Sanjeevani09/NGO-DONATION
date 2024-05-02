<!DOCTYPE html>
<html lang="en">

<head>
    <!--meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--aos link-->
    <link rel="stylesheet" type="text/css" href="aos/aos.css">

    <!--page Title-->
    <title>WE FOR YOU </title>

    <!-- Favicon-->
    <link rel="icon" type="image" href="images/website-favicon.png" sizes="192x192" />

    <!--stylesheet link-->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--animation (AOS - Animation on scroll) link-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- custom add-ons -->
    <link rel="stylesheet" type="text/css" href="add.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="owl.carousel/owl.carousel.min.js"></script>
    <link href="boxicons/css/boxicons.min.css" rel="stylesheet">

</head>

<body>

    <!--navigation bar-->
    <div class="container-fluid menu">
        <nav class="navbar navbar-expand-lg my-navbar">
            <a class="navbar-brand " href="#"><img src="images/v4u.jpg" height="100" width='150' alt="" loading="lazy"></a>
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
    <!--nav bar end-->

    <?php
    include '_dbconnect.php';
    if (isset($_GET['id'])) {
        $feid = $_GET['id'];
        $sql = "SELECT * FROM featureevent where id = '$feid'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $date = date("d F, Y", strtotime($row['date']));
    ?>

                <section>
                    <div class="container bg-light py-4 my-4" style="box-shadow:10px 10px 10px 10px #777;">
                        <section>
                            <div class="ml-4">
                                <h2 style="color: #009970; font-weight: bold;"><?php echo "$row[name]"; ?></h2>
                                <span style="font-weight: bolder;"><?php echo "$date"; ?> / By WeForYou</span>
                            </div>
                        </section>
                        <div class="row">
                            <div class="col-lg-5 text-center">
                                <?php echo "<img src='" . $row['image'] . "' alt='project ahaar' data-aos='fade-right' data-aos-easing='ease-in-sine' data-aos-delay='100' class='img-fluid' width='500' >"; ?>
                            </div>
                            <div class="col-lg-7 justify-content-center text-left" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                                <p class="pt-2 mt-2 mx-2"><?php echo "$row[description]"; ?></p>
                            </div>
                        </div>
                        <div class="row" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            <p class="text-left p-2 m-2"><?php echo "$row[details]"; ?></p>
                            <br>
                            <div class="col-lg-12  text-center">
                                <h4 class="pt-2" style='font-weight: bold; font-variant: small-caps; text-shadow: 1px 1px 1px #777777;'>Click here to donate <i class="fa fa-arrow-down" aria-hidden="true"></i></h4><br>
                                <a href="donateform.php" target="_blank" class="btn btn-outline-success donate-btn">DONATE NOW </a>
                            </div>

                        </div>
                        <div class="row mt-4 pt-4 justify-content-left">
                            <a class='ml-4' href="events.php"><button class="btn btn-outline-success mt-2">Go Back </button></a>
                        </div>
                    </div>

                </section>
    <?php }
        }
    } ?>
    <!--footer-->
    <footer id="footer">
        <div class="footer-top pb-4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact" style="height:200px">
                        <img src="images/logo.jpg" height="85%">
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
                            <a href="https://twitter.com/nehaa_2602_?t=ODUJLtg2wcFehM0gqk-E1w&s=08" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
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
    <!--bottom to top button-->
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

    </script>
</body>

</html>