<?php
require('inc/config.php');
require('inc/header.php');
?>

<?php

$error = 0;


if (isset($_COOKIE['login_check']) && $_COOKIE['login_check'] == 1) {
    header('Location: http://localhost/rtg/dashboard.php');
    header('Connection close');
    die();
}




if (isset($_POST['btn_send'])) {

    //echo '<p>Senden-Button wurde gedrückt</p>';
    //echo '<pre>';
    //print_r($_POST);
    //echo '</pre>';




    $sql = "SELECT * FROM `tbl_user` WHERE `e_mail` = '$_POST[user_email]'";
    $result = mysqli_query($db, $sql);
    $counts = mysqli_num_rows($result);
    //echo 'Ergebnisse: ' . $counts . '<br>';
    //echo 'SQL: ' . $sql . '<br>';
    if ($counts > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_pw'] . '<br>';
            if ((password_verify($_POST['user_pw'], $row['user_pw'])) && ($row['e_mail'] == $_POST['user_email'])) {

                setcookie('login_success', '2', 0, '/');

                if (isset($_POST['user_check']) && $_POST['user_check'] == 1) {
                    setcookie('login_check', '1', time() + (3600 * 24), '/');
                }
                header('Location: http://localhost/rtg/dashboard.php');
                header('Connection close');
                die();
            }
        }
    } else {
        $error = 1;
        //echo 'Hallo Welt!';
    }
}


?>




<div class="container margin backGround">
    <div class="row">
        <div class="col-md-6">
            <h3 class="headline">Login</h3>
            <?php
            if ($error == 1) {
                echo '<div class="alert alert-danger" role="alert">Einloggen war nicht erfolgreich</div>';
            }

            ?>
            <form action="login.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="eingabefeldEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" autocomplete="off" name="user_email" class="form-control" id="eingabefeldEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="eingabefeldPasswort3" class="col-sm-2 control-label">Passwort</label>
                    <div class="col-sm-10">
                        <input type="password" autocomplete="off" name="user_pw" class="form-control" id="eingabefeldPasswort3" placeholder="Passwort">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="user_check" value="1"> Anmeldung speichern
                            </label>
                            <a class="btn btn-primary" href="anmelden.php" role="button">Anmelden</a>
                            <a href="passwortneu.php" class="btn btn-danger" role="button">Passwort vergessen</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="btn_send" class="btn btn-default">Einloggen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





<?php
require('inc/footer.php');
