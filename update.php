<?php
session_start();
include '_dbconnect.php';
$loguser = $_SESSION['username'];
if (!isset($username)) {
    header('location:login.php');
}
?>

<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Update Profile</title>
    <!-- Favicon-->
    <link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- custom add-ons for nav bar and footer -->
    <link rel="stylesheet" type="text/css" href="add.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="styleshhet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            margin-top: 20px;
            background-color: #f2f6fc;
            color: #69707a;
        }

        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }

        .card .card-header {
            font-weight: 500;
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }

        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }

        span {
            position: absolute;
            right: 25px;
            transform: translate(0, -50%);
            top: 65%;
            cursor: pointer;
        }

        .fa {
            font-size: 15px;
            color: #7a797e;
        }
    </style>


</head>

<body>
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
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
                            <a href="./login.php" class="nav-link ">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <?php
        include '_dbconnect.php';
        $username = $_SESSION['username'];
        $users = "SELECT * FROM users where username='$username'";
        $users_run = mysqli_query($conn, $users);
        if (mysqli_num_rows($users_run) > 0) {
            while ($row = mysqli_fetch_assoc($users_run)) {
                $uid = $row['id']; ?>
                <form action="update.php" method="post" enctype="multipart/form-data">
                    <hr class="mt-0 mb-4">
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Picture</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <img class="img-account-profile mb-2" src='<?php echo $row['image']; ?>' alt="User Image">

                                    <div class="form-group">
                                        <input type="file" name="image" id="update-btn" class="form-control" style="overflow: hidden;">
                                    </div>
                                    <!-- Profile picture upload button-->
                                    <label for="update-btn"><i class="fa fa-upload " aria-hidden="true" style="color: #009970;"></i> Update Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Account details card-->
                            <div class="card mb-4">
                                <div class="card-header">Account Details</div>
                                <div class="card-body">

                                    <div class="mb-3">
                                        <label class="small mb-1" for="name">Name </label>
                                        <input class="form-control" id="name" name="name" pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters." type="text" placeholder="Enter your Name" value="<?php echo $row['name']; ?>">
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="phone">Phone</label>
                                            <input class="form-control" id="phone" name="phone" type="tel" maxlength="10" pattern="[0-9]{10}" title="Only 10 Numbers are allowed." placeholder="Enter your Phone No." value="<?php echo $row['phone']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="small mb-1" for="email">Email address</label>
                                        <input class="form-control" id="email" name="email" type="email" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" placeholder="Enter your email address" value="<?php echo $row['email']; ?>">
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input class="form-control" name="username" id="username" type="text" placeholder="Enter your Username " value="<?php echo $row['username']; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="password">Password</label>
                                            <input class="form-control" name="password" id="password" type="password" placeholder="Enter your password" value="<?php echo $row['password']; ?>">
                                            <span>
                                                <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                                            </span>
                                        </div>

                                        <div class="col-md-3">
                                            <button class="btn btn-primary" name="update-btn" type="submit">Save changes</button>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="donorprofile.php"><button class="btn btn-primary" name="back" type="button">Back</button></a>
                                        </div>
                </form>
        <?php }
        } ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <?php

    if (isset($_POST['update-btn'])) {

        $folder = "users/";
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $file_name_array = explode(".", $filename);
        $newimagename = $filename;

        if ($tempname != "") {

            $stmt = mysqli_query($conn, "SELECT image FROM  users WHERE username='$username'");
            $row = mysqli_fetch_array($stmt);
            $deleteimage = $row['image'];
            unlink($deleteimage);
            move_uploaded_file($tempname, $folder . $newimagename);

            $final_image = $folder . $newimagename;
            $q = "UPDATE users SET image='$final_image' WHERE id='$uid'";
            mysqli_query($conn, $q);

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $loguser = $_SESSION['username'];

            $sql = "UPDATE users SET name= '$name', email= '$email', phone='$phone', username='$username',  password='$password' WHERE id= $uid";
            mysqli_query($conn, $sql);

            echo "<script>alert('Profile Updated Successfully')</script>";

            echo "<script>window.location.href ='donorprofile.php'</script>";
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $loguser = $_SESSION['username'];

            $sql = "UPDATE users SET name= '$name', email= '$email', phone='$phone', username='$username',  password='$password' WHERE id= $uid";
            mysqli_query($conn, $sql);

            echo "<script>alert('Profile Updated Successfully')</script>";
            echo "<script>window.location.href ='donorprofile.php'</script>";
        }

    }
    mysqli_close($conn);
    ?>

    <script>
        var updateBtn = document.getElementById('update-btn');
        updateBtn.addEventListener('click', function() {
            document.getElementById('update-form').style.display = 'block';
        });
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