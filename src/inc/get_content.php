<?php

$site_id = $_GET['site'];
$sql = "SELECT * FROM `tbl_mett` WHERE `lfd_id` = '$site_id'";
$result = mysqli_query($db, $sql);
$counts = mysqli_num_rows($result);
//echo 'Ergebnisse: ' . $counts;

if ($counts > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    $sql = "SELECT * FROM `tbl_mett` WHERE `lfd_id` = '10'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
}
