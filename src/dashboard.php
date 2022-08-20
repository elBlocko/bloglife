<?php
require('inc/config.php');
require('inc/header.php');
?>

<?php



if (!isset($_COOKIE['login_check'])) {


    if (!isset($_COOKIE['login_success'])) {
        header('Location: http://localhost/rtg/login.php');
        header('Connection close');
        die();
    }
}



?>

<?php

//Wenn der Button gedrückt wurde, schreibe in die datenbank, wenns keine techn. Probleme gibt in die Spalten, die Arrays ein, ansonsten end skript
if (isset($_POST['btn_send'])) {


    $sql = "INSERT INTO `tbl_mett` (`title_name`, `desc_content`, `html_content`) values
        ('$_POST[title_name]','$_POST[desc_content]','$_POST[html_content]')";

    if (!mysqli_query($db, $sql)) {
        die('DB-INSERT nicht möglich!');
    }
}

?>

<div class="container backGround">
    <h2>Neue Html Seite erstellen</h2>

    <form action="dashboard.php" method="post">
        <div class="container dashInput">
            <div class="row">
                <div class="col-md-6">Titel <input type="text" class="dash" name="title_name" placeholder="title_name"></div>
            </div>
            <div class="row">
                <div class="col-md-6">Seiten Beschreibung<input type="text" class="dash" name="desc_content" placeholder="desc_content"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><textarea rows="3" class="dash" name="html_content" placeholder="html_content"></textarea></div>
            </div>
        </div>
        <div class="container dashInput">
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" name="btn_send" class="btn btn-primary btn-lg">In die Datenbank eintragen</button>
                </div>
            </div>
        </div>
    </form>
</div>




<?php
require('inc/footer.php');
