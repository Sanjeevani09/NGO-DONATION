<?php
include '_dbconnect.php';
if (isset($_GET['id']))
{
    $eid = $_GET['id'];
    $delete = "DELETE FROM event WHERE id = '$eid'";
    mysqli_query($conn, $delete);
    echo "<script>alert('Event Deleted');</script>";
    header("location : manageevents.php");
}
