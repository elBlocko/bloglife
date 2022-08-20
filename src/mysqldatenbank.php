<?php
require('inc/config.php');
require('inc/header.php');
?>
<?php

/*$sql = "INSERT INTO `tbl_user` (`f_name`, `l_name`, `e_mail`) values
        ('Max','Mustermann','max@mustermann.de')";

if (!mysqli_query($db, $sql)) {
    die('DB-INSERT nicht möglich!');
}*/

/*$sql = "DELETE FROM `tbl_user` WHERE `lfd_id` = '14'";
if (!mysqli_query($db, $sql)) {
    die('DB-INSERT nicht möglich!');
}*/


/*$sql = "UPDATE `tbl_user` SET `f_name` = 'Maxi', `l_name` = 'Musterfrau' WHERE
(`f_name` = 'Max' AND `l_name` = 'Mustermann') ";

if (!mysqli_query($db, $sql)) {
    die('DB-UPDATE nicht möglich!');
}*/

$sql = "SELECT * FROM `tbl_user`";
$result = mysqli_query($db, $sql);
$counts = mysqli_num_rows($result);
echo 'Ergebnisse: ' . $counts;

if ($counts > 0) {


    echo '<table>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
    
<tr>
<td>' . $row['lfd_id'] . '</td>
<td>' . $row['f_name'] . '</td>
<td>' . $row['l_name'] . '</td>
<td>' . $row['e_mail'] . '</td>
</tr>';
    }
    echo '</table>';
}
?>

<?php
require('inc/footer.php');
