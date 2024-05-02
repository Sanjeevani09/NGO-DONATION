<!DOCTYPE html>
<html lang="en">

<head>
    <!--meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!--page Title-->
    <title>WE FOR YOU - CONTACT US</title>
    <!-- Favicon-->
    <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />


    <!--stylesheet link-->
    <link rel="stylesheet" type="text/css" href="style.css">


    <!--animation (AOS - Animation on scroll) link-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- custom add-ons -->
    <link rel="stylesheet" type="text/css" href="add.css">
    <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">

</head>


<body>


    <!--navigation bar-->
    <div class="container-fluid menu">
        <nav class="navbar navbar-expand-lg my-navbar">
            <a class="navbar-brand " href="#"><img src="./images/v4u.jpg" height="100" width="150" alt="" loading="lazy"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./aboutus.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="./events.php" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="./internship.php" class="nav-link">Internship</a>
                    </li>
                    <li class="nav-item">
                        <a href="./vol.php" class="nav-link ">Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a href="./projectaahar.php" class="nav-link">Project Aahar</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contactus.php" class="nav-link active">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--nav bar end-->

    <!--form and details section-->
    <section>
        <div class="container mt-5 pt-4 pb-2">
            <div class="row">
                <!--details section-->
                <div class="col-sm-5 col-md-6 contact border-right" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <h2>Get in touch
                        <hr class="contact-green-hr">
                    </h2>
                    <div class="col pt-5">
                        <h4 class="contact-h4">Address</h4>
                        <p><a href="https://goo.gl/maps/KQ1NrWw3Bs63noTP9" target="_blank">Woodland Park, Block C, Siddharth Nagar, Mulund West, Mumbai, 400080</a></p>
                        <hr class="line">
                    </div>
                    <div class="col pt-2">
                        <h4 class="contact-h4">Phone</h4>
                        <p><a href="tel:+919082689552">+91 9082689552</a></p>
                        <hr class="line">
                    </div>
                    <div class="col pt-2">
                        <h4 class="contact-h4">Email</h4>
                        <p><a href="mailto:neha71549@gmail.com">weforyou@gmail.com</a></p>
                        <hr class="line">
                    </div>
                </div>
                <!--form section-->
                <div class="col-sm-5  col-md-6 offset-md-0 contact" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <h2>Contact us
                        <hr class="contact-green-hr">
                    </h2>
                    <form action="contactus.php" name='contactform' method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name='name' pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters." placeholder="Your Name..." required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" name="email" placeholder="Your Email..." required>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="tel" id="phone" name="phone" maxlength="10" pattern="[0-9]{10}" title="Only 10 Numbers are allowed." name='phone' class="form-control" placeholder="Your Phone Number..." required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" rows="3" name='message' placeholder="Write your message here..." required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-outline-success mt-2 ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <hr style="border: 2px solid #000; background-color: grey; width:70% ; border-radius: 2px;" data-aos="flip-left" data-aos-easing="ease-in-sine" data-aos-delay="100">
    </section>
    <!--form and details section end-->


    <!--locate us and contact us section-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6 contact border-right" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <h2>Locate us
                        <hr class="contact-green-hr">
                    </h2>
                    <div class="row px-2 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.518426018385!2d77.10499531508286!3d28.644191982413233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04983db1c4af%3A0xadc3041188bae602!2sTHE%20RISING%20PEOPLE%20WELFARE%20SOCIETY!5e0!3m2!1sen!2sin!4v1603814708795!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:1px solid #000;" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-sm-5  col-md-6 offset-md-0 contact" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="100">
                    <h2>Connect with us
                        <hr class="contact-green-hr">
                    </h2>
                    <div class="row pt-4 px-4 social-icon ">
                        <a class="sm-bttn" target='_blank' href="https://www.facebook.com/Neha%20Gupta"><i class="fab fa-facebook-f"></i></a>

                        <a class="sm-bttn" target='_blank' href="https://twitter.com/nehaa_2602_?t=ODUJLtg2wcFehM0gqk-E1w&s=08"><i class="fab fa-twitter"></i></a>

                        <a class="sm-bttn" target='_blank' href="https://www.linkedin.com/company/the-rising-people-welfare-society/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>

                        <a class="sm-bttn" target='_blank' href="https://instagram.com/weforyou26?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>

                        <a class="sm-bttn" target='_blank' href="https://www.youtube.com/channel/UCJs3CwS0-UIsYlDkw8TsO0g"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--locate us and contact us section end-->


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
                                Siddharth Nagar, Mulund West <br>
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


</body>

</html>


<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'ngo';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "INSERT INTO contact_form(name, email, phone, message) values ('$name', '$email', '$phone', '$message')";

    mysqli_query($conn, $sql);

    echo '<script>alert("Your Form has been Submitted..")</script>';
}

?>