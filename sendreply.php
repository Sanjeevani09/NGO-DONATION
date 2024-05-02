<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no minimum-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--stylesheet link-->
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" type="text/css" href="add.css">
  <script src="owl.carousel/owl.carousel.min.js"></script>
  <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fontawesome/css/all.css">

  <title>SEND MAIL</title>

</head>

<body>
  <div class="container py-4 my-4 bg-light" style="box-shadow: 2px 2px 2px 2px #777;">
    <section style="background-color: aliceblue;">
      <div class="container">
        <div class="row ">
          <div class="col"></div>
          <div class="col signup" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-delay="200"><br>
            <h2>Send Mail
              <hr class="internship-green-hr">
            </h2>
            <div class="form-group">
              <?php
              $conn = mysqli_connect("localhost", "root", "", "ngo");
              if (isset($_GET['id'])) {
                $iid = $_GET['id'];
                $sql = "SELECT * FROM contact_form where id= $iid";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $vid = $row['id']; ?>
                    <form action="mail.php" name='sendmail' method="post">
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name='name' pattern="[A-Za-z A-Za-z]+" title="Name should contain only letters." placeholder="Your Name..." value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9-]+\.[a-z]{2,3}" name="email" placeholder="Your Email..." value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name='subject' class="form-control" placeholder="Your Subject..." required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" rows="3" name='message' placeholder="Write your message here..." required></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-outline-success mt-2 ">Submit</button>
            </form>
      <?php }
                }
              } ?>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </section>
  </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>