<?php

include '_dbconnect.php';
if (isset($_GET['id']))
{
    $feid = $_GET['id'];
    $delete = "DELETE * From featureevent where id = '$feid'";
    mysqli_query($conn, $delete);
    echo "<script>alert('Event Deleted');</script>";
    header("location : managefeatureevent.php");
}
