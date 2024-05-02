<!DOCTYPE html>
<html>

<head>
    <title>Certificate</title>
    <style type='text/css'>
        body,
        html {
            margin: 20px;
            padding: 15px;
        }

        body {
            color: black;
            display: table;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }

        .container {
            border: 20px solid tan;
            width: 750px;
            height: 563px;
            display: table-cell;
            vertical-align: middle;
        }

        .logo {
            color: black;
            font-size: 30px;
        }

        .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
        }

        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }

        .reason {
            margin: 20px;
        }

        .date {
            margin-left: 15px;
            text-align: left;
        }

        @media print {
            a[href]:after {
                content: none !important;
            }
        }

        @media print {
            #printbtn {
                display: none !important;
            }

            .main-heading {
                font-size: 30px !important;
            }

            .underline {
                line-height: 27px !important;
                text-decoration-style: dotted !important;
            }
        }
    </style>
</head>

<body>

    <?php
    session_start();
    include '_dbconnect.php';
    $username = $_SESSION['username'];

    if (!isset($username)) {
        header('location:login.php');
    }
    $username = $_SESSION['username'];
    $query = "SELECT name FROM users WHERE username ='$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];

    $sql = "SELECT * FROM donation_form JOIN users ON donation_form.name=users.name WHERE users.name='$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    //$date = $row['date'];
    //$packets = $row['packets'];
    if (mysqli_num_rows($result) > 0) { ?>

        <div class="container">
            <div class="logo">
                We For You
            </div>

            <div class="marquee">
                Certificate of Thank You
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
                <?php echo $name; ?>
            </div>

            <div class="reason">
                For your generous donation to the <br />
                Project Aahar Seva
            </div>

            <!--div class="date">
                Date : <?php echo $date; ?> <br/>
                
            </!--div>-->
            <button type="button" style="color:brown" class='btn btn-outline-success mt-2 ' id="printbtn" onclick="window.print()">Print</button>
        </div>
</body>

</html>

<?php

    }

?>