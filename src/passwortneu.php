<?php
require('inc/config.php');
require('inc/header.php');
?>
<?php

$erfolgreich = 0;
$e_mail = '';
$error_e_mail = '';



?>

<?php
if (isset($_POST['btn_send'])) {

    function generate(int $len)
    {
        $string = "";
        $allowed = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-*+";
        for ($i = 0; $i < $len; $i++) {
            $position = rand(0, strlen($allowed) - 1);
            $string .= substr($allowed, $position, 1);
        }
        return $string;
    }
    $pwdneu = generate(10);

    $hashed = password_hash($pwdneu, PASSWORD_DEFAULT);

    if (!empty($_POST['user_email'])) {
        $e_mail = trim(strip_tags($_POST['user_email']));
    } else {
        $e_mail = '';
        $error_e_mail = 'style="border:1px solid red;"';
    }


    $sql = "SELECT * FROM `tbl_user` WHERE (`e_mail` = '$e_mail')";
    $result = mysqli_query($db, $sql);
    $counts = mysqli_num_rows($result);
    echo 'Ergebnisse: ' . $counts;
    $row = mysqli_fetch_assoc($result);
    if (isset($row['f_name'])) {
        $f_name = $row['f_name'];
    } else {
        $f_name = '';
    }
    if (isset($row['l_name'])) {
        $l_name = $row['l_name'];
    } else {
        $l_name = '';
    }

    if ($counts != 1) {
        echo 'email gibt es nicht';
    } else {


        $sql = "UPDATE `tbl_user` SET `user_pw` = '$hashed' WHERE
    (`e_mail` = '$_POST[user_email]')";
        if (!mysqli_query($db, $sql)) {
            die('DB-UPDATE nicht möglich!');
        }




        if (!empty($e_mail)) {
            //ab hier alles was passiert, wenn alles ausgefüllt wurde
            //Mail versenden
            $erfolgreich = 1;




            $von = "postmaster@localhost";
            $von_name = "El Blocko";
            $an = "elblocko@localhost";
            $betreff = "Sie haben Post";
            $kommentar = file_get_contents('tpl/mail_vorlage.html');
            $kommentar = str_replace('{{user_pw}}', $pwdneu, $kommentar);
            $kommentar = str_replace('{{f_name}}', $f_name, $kommentar);
            $kommentar = str_replace('{{l_name}}', $l_name, $kommentar);

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
                echo '<p>Neuses Passwort: ' . $pwdneu . '</p>';
            } else {
                '<p>Mail wurde nicht erfolgreich gesendet.</p>';
            }
            //else geschlossen aus count

        } else {
            echo '<p style="color:red;">FEHLER! Nicht alle Felder wurden ausgefüllt</p>';
        }
    }
}


?>









<div class="container margin backGround">
    <div class="row">
        <div class="col-md-6">
            <h3 class="headline">Passwort zurücksetzen</h3>
            <form action="passwortneu.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="eingabefeldEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input <?php echo $error_e_mail; ?> type="email" autocomplete="off" name="user_email" class="form-control" id="eingabefeldEmail" placeholder="Email" value="">
                        <?php echo (!empty($error_e_mail)) ? '<br><span>Bitte ausfüllen!</span>  ' : ''; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="btn_send" class="btn btn-default">Neues Passwort anfordern</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
require('inc/footer.php');
