<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>PROJECT AAHARS SEVA</title>
    <!-- Favicon-->
    <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />

    <!--stylesheet link-->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- custom add-ons -->
    <link rel="stylesheet" type="text/css" href="add.css">
    <script src="owl.carousel/owl.carousel.min.js"></script>
    <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!--aos link-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!------navigation----->
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
                        <a href="events.php" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="internship.php" class="nav-link">Internship</a>
                    </li>
                    <li class="nav-item">
                        <a href="vol.php" class="nav-link ">Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a href="projectaahar.php" class="nav-link active">Project Aahar</a>
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


    <?php
    include '_dbconnect.php';
    $sql = "SELECT * FROM featureevent ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $eid = $row['id'];
            $date = date("M d, Y", strtotime($row['date']));
    ?>
            <!--------------------------------nav bar end--------------------------------------------------------->
            <!-- Heading -->
            <section class="pt-5 pb-0">
                <div class="container">
                    <div class="about text-center">
                        <h2><?php echo "$row[name]"; ?>
                            <hr class="green-hr">
                        </h2>
                    </div>
                </div>
            </section>

            <!--DONATION content -->
            <section class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="section-title p-4">
                            <h2>DONATE</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <img src="images\events_images\projectahaar\projectahaar.jpeg" alt="Project AAHAR SEVA" width="450px" height="250px" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="100">
                        </div>
                        <div class="col-lg-6 justify-content-center" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            <p><?php echo "$row[description]"; ?></p>
                            <h4 class="pb-2" style='font-weight: bold; font-variant: small-caps; text-shadow: 1px 1px 1px #777777;'>Click here to donate <i class="fa fa-arrow-down" aria-hidden="true"></i></h4>
                            <a href="donateform.php" target="_blank" class="btn btn-outline-success donate-btn">DONATE NOW </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our project-->
            <section class="py-2">
                <!-- Our project images-->
                <div class="container">
                    <div class="row">
                        <div class="section-title p-4 pb-0">
                            <h2>OUR PROJECT</h2>
                        </div>
                    </div>
                    <div class="row portfolio-container  px-4 py-2">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap ">
                                <img src="images\projectaahar_images\2.jpg" class="img-fluid shadow" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="images\projectaahar_images\4.webp" class="img-fluid shadow" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="images\projectaahar_images\3.webp" class="img-fluid shadow" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-light">
                <!-- our project content -->
                <div class="container-fluid padding  bg-light" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <div class="row  mx-md-5 px-md-5 m-2  ">
                        <div class="col-12 shadow">
                            <h5>
                                <?php echo "$row[details]"; ?></h5>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-title" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="100">
                                <h2>CONTRIBUTION</h2>
                            </div>
                        </div>
                        <div class="col-lg-8 justify-content-center" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                            <p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                Together, we can alleviate the distress that hunger has caused in our society. We at WeForYou, ensure you 100% transparency with your contribution. We’ll share with you the picture of the donated packets marked with your name on it for you deserve to know when, where and how your donations are bringing a change in who’s life.
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
    <?php }
    }
    ?>
    <!---------footer---------->

    <!--footer-->
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>