<div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "ngo");
    if (isset($_GET['id'])) {
        $iid = $_GET['id'];
        $sql = "SELECT * FROM internship_form where id= $iid";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
    ?>
    <?php while ($row = mysqli_fetch_assoc($result)) {
                echo "<embed type='application/pdf' src='" . $row["resume"] . "'height='100%' width='100%'";
            }
        } else {
            echo "<h1>Error in Uploading File</h1>";
        }
    }
    mysqli_close($conn);
    ?>
</div>