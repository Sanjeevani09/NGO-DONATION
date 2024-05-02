<?php
session_start();
include '_dbconnect.php';
$username = $_SESSION['username'];
if (!isset($username)) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>MY PROFILE</title>
    <!-- Favicon-->
    <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- custom add-ons for nav bar and footer -->
    <link rel="stylesheet" type="text/css" href="add.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <style>
        .h4 {
            text-align: center;
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
                        <a class="nav-link" href="./donorpage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./donorprofile.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="./donordonations.php" class="nav-link">My Donations</a>
                    </li>
                    <li class="nav-item">
                        <a href="./donordonateform.php" class="nav-link">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a href="./logout.php" class="nav-link ">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <section>
        <div class="container py-4 my-4 bg-light" style="box-shadow: 2px 2px 2px 2px #777;">
            <?php

            $conn = mysqli_connect("localhost", "root", "", "ngo");
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM users where username= '$username'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            ?>
                <section>
                    <h2 style="text-align : center; font-weight: bold;">MY PROFILE :
                        <hr class="internship-green-hr">
                    </h2>

                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="container" style="text-align:center">
                    <?php
                        if ($row['image'] == NULL) {
                            echo "<h4><img src='..\Project\images\user.jpg' height='300px'; width='200px';></h4>";
                        } else {
                            echo "<h4><img src='" . $row['image'] . "'height='300px'; width='200px';></h4>";
                        }
                        echo "<h4 style='font-weight : bold';>Name : " . $row['name'] . "</h4>";
                        echo "<h4 style='font-weight : bold';>Phone : " . $row['phone'] . "</h4>";
                        echo "<h4 style='font-weight : bold';>Email : " . $row['email'] . "</h4>";
                        echo "<h4 style='font-weight : bold';>Username : " . $row['username'] . "</h4>";
                        //echo "<h4 style='font-weight : bold';>Password : ".$row['password']."</h4>";

                    }
                } else {
                    echo "Something went wrong";
                }

                mysqli_close($conn);
                    ?>

                    <a href="update.php"><button id="update-btn" class="btn btn-outline-success mt-2 "> Update Profile </button></a>

                        </div>
        </div>

    </section>


    <script>
        var updateBtn = document.getElementById('update-btn');
        updateBtn.addEventListener('click', function() {
            document.getElementById('update-form').style.display = 'block';
        });
    </script>

</body>

</html>
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