<?php
require('inc/config.php');
require('inc/header.php');
?>
<?php

$erfolgreich = 0;
$l_name = '';
$f_name = '';
$e_mail = '';
$pw1 = '';
$pw2 = '';
$error_e_mail = '';
$error_f_name = '';
$error_l_name = '';
$error_pw1 = '';
$error_pw2 = '';


?>

<?php
if (isset($_POST['btn_send'])) {

    if (!empty($_POST['user_f_name'])) {
        $f_name = trim(strip_tags($_POST['user_f_name']));
    } else {
        $f_name = '';
        $error_f_name = 'style="border:1px solid red;"';
    }


    if (!empty($_POST['user_l_name'])) {
        $l_name = trim(strip_tags($_POST['user_l_name']));
    } else {
        $l_name = '';
        $error_l_name = 'style="border:1px solid red;"';
    }


    if (!empty($_POST['user_email'])) {
        $e_mail = trim(strip_tags($_POST['user_email']));
    } else {
        $e_mail = '';
        $error_e_mail = 'style="border:1px solid red;"';
    }


    if (!empty($_POST['user_pw1'])) {
        $pw1 = trim(strip_tags($_POST['user_pw1']));
    } else {
        $pw1 = '';
        $error_pw1 = 'style="border:1px solid red;"';
    }


    if (!empty($_POST['user_pw2'])) {
        $pw2 = trim(strip_tags($_POST['user_pw2']));
    } else {
        $pw2 = '';
        $error_pw2 = 'style="border:1px solid red;"';
    }

    if ($pw1 == $pw2) {
        echo 'Passwörter sind gleich!';
    } else {
        $pw1 = '';
        $error_pw1 = 'style="border:1px solid red;"';
        $pw2 = '';
        $error_pw2 = 'style="border:1px solid red;"';
    }




    if (
        !empty($l_name) &&
        !empty($e_mail) &&
        !empty($f_name) &&
        !empty($pw1) &&
        !empty($pw2)
    ) {

        //ab hier alles was passiert, wenn alles ausgefüllt wurde
        //Mail versenden
        $erfolgreich = 1;
        //eingabe Mail an datenbank
        $sql = "SELECT * FROM `tbl_user` WHERE (`e_mail` = '$e_mail')";
        $result = mysqli_query($db, $sql);
        $counts = mysqli_num_rows($result);
        //echo 'Ergebnisse: ' . $counts;

        if ($counts > 0) {
            echo ('<br><p>mail-bereits registriert</p>');
            echo ('<br>mail- nicht verschickt');
            $erfolgreich = 0;
        } else {

            $hashed = password_hash($pw1, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `tbl_user` (`f_name`, `l_name`, `e_mail`, `user_pw`) values
        ('$f_name','$l_name','$e_mail','$hashed')";
            if (!mysqli_query($db, $sql)) {
                die('DB-INSERT nicht möglich!');
            }



            $sql = "SELECT * FROM `tbl_user`";
            $result = mysqli_query($db, $sql);
            $counts = mysqli_num_rows($result);
            //echo 'Ergebnisse: ' . $counts;

            if ($counts > 0) {


                echo '<table>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
            
        <tr>
        <td>' . $row['lfd_id'] . '</td>
        <td>' . $row['f_name'] . '</td>
        <td>' . $row['l_name'] . '</td>
        <td>' . $row['e_mail'] . '</td>
        <td>' . $row['user_pw'] . '</td>
       
        </tr>';
                }
                echo '</table>';
            }


            $von = "postmaster@localhost";
            $von_name = "El Blocko";
            $an = "elblocko@localhost";
            $betreff = "Sie haben Post";
            $kommentar = file_get_contents('tpl/mail_vorlage.html');
            $kommentar = str_replace('{{f_name}}', $f_name, $kommentar);
            $kommentar = str_replace('{{l_name}}', $l_name, $kommentar);
            $kommentar = str_replace('{{e_mail}}', $e_mail, $kommentar);
            $kommentar = str_replace('{{user_pw}}', $e_mail, $kommentar);
            /*
        $kommentar = '
              <!Doctype html>
        <html lang="de">
        <head>
        <meta charset="UTF-8">
        <title>Post von mir</title>
        </head>
        <body>
        <table border="0" align="center" width="600" bgcolor="red">
        <tr><td colspan="2"><a href="http://localhost/rtgphp/formular.php"><img src="http://localhost/rtgphp/img/logo.png" height="50" alt=""</td></tr>
        <tr><td>Vorname:&nbsp</td><td>' . $f_name . '</td></tr>
        <tr><td>Name:&nbsp</td><td>' . $l_name . '</td></tr>
        <tr><td>email:&nbsp</td><td>' . $e_mail . '</td></tr>
        </table>
        </body>
        </html> ';
        */
            $mail = new PHPMailer();
            $mail->From = ($von);
            $mail->Fromname = ($an);
            $mail->AddAddress($an);
            $mail->AddReplyTo($von);
            $mail->Subject = ($betreff);
            $mail->IsHTML(true);
            $mail->Body = $kommentar;
            $mail->CharSet = "UTF-8";
            $mail->AddAttachment('img/cat.jpg', 'muahaha.jpg');
            $mail->AddAttachment('pdf/pdf.pdf', 'muahaha2.pdf');
            if ($mail->Send()) {
                echo '<p>Mail wurde erfolgreich gesendet.</p>';
            } else {
                '<p>Mail wurde nicht erfolgreich gesendet.</p>';
            }
            //else geschlossen aus count
        }
    } else {
        echo '<p style="color:red;">FEHLER! Nicht alle Felder wurden ausgefüllt</p>';
    }
}


?>







<?php
if ($erfolgreich != 1) {
?>

    <div class="container margin bgcont">
        <div class="row">
            <div class="col-md-6">
                <h3 class="headline">Anmeldung</h3>

                <form action="anmelden.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="eingabefeldEmail3" class="col-sm-2 control-label">Vorname</label>
                        <div class="col-sm-10">
                            <input <?php echo $error_f_name; ?> type="text" autocomplete="off" name="user_f_name" class="form-control" id="eingabefeldVorname" placeholder="Vorname" value="">
                            <?php echo (!empty($error_f_name)) ? '<br><span>Bitte ausfüllen!</span>  ' : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="eingabefeldEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input <?php echo $error_l_name; ?> type="text" autocomplete="off" name="user_l_name" class="form-control" id="eingabefeldName" placeholder="Name" value="">
                            <?php echo (!empty($error_l_name)) ? '<br><span>Bitte ausfüllen!</span>  ' : ''; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="eingabefeldEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input <?php echo $error_e_mail; ?> type="email" autocomplete="off" name="user_email" class="form-control" id="eingabefeldEmail" placeholder="Email" value="">
                            <?php echo (!empty($error_f_name)) ? '<br><span>Bitte ausfüllen!</span>  ' : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="eingabefeldPasswort3" class="col-sm-2 control-label">Passwort</label>
                        <div class="col-sm-10">
                            <input <?php echo $error_pw1; ?> type="password" autocomplete="off" name="user_pw1" class="form-control" id="eingabefeldPasswort1" placeholder="Passwort" value="">
                            <?php echo (!empty($error_pw1)) ? '<br><span>Bitte ausfüllen!</span>  ' : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="eingabefeldPasswort3" class="col-sm-2 control-label">Passwort wiederholen</label>
                        <div class="col-sm-10">
                            <input <?php echo $error_pw2; ?> type="password" autocomplete="off" name="user_pw2" class="form-control" id="eingabefeldPasswort2" placeholder="Passwort" value="">
                            <?php echo (!empty($error_pw2)) ? '<br><span>Bitte ausfüllen!</span>  ' : ''; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="btn_send" class="btn btn-default">Anmelden</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
}
?>


<?php
require('inc/footer.php');
