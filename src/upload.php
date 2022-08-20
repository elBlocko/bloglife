<?php
require('inc/config.php');
require('inc/header.php');
?>
<?php
$erfolgreich = 0;
$pwd = 'asd';

if (isset($_POST['btn_send']) && $_POST['passwort'] == $pwd) {

    /*echo '<p>Senden-Button wurde gedrückt</p>';
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';*/



    if (in_array($_FILES['uploadfile']['type'], $file_type)) {
        if ($_FILES['uploadfile']['size'] <= $max_file_size) {

            $tmp_file_name = explode('.', $_FILES['uploadfile']['name']);
            $_FILES['uploadfile']['name'] = time() . '-' . rand(1, 9999) . '.' . end($tmp_file_name);

            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], 'uploads/' . $_FILES['uploadfile']['name'])) {
                $erfolgreich = 1;

                echo '  <p>Datei wurde erfolgreich hochgeladen</p>';
                $size = getimagesize('uploads/' . $_FILES['uploadfile']['name']);

                if ($size != FALSE && ($size[0] > 0 && $size[1] > 0)) {

                    echo '   
                    <a href="/rtgphp1/uploads/' . $_FILES['uploadfile']['name'] . '" target="_blank">
                    <img src="/rtgphp1/uploads/' . $_FILES['uploadfile']['name'] . ' " alt="" height=50><br>
                    Link
                    </a>';
                } else {
                    echo ' <a href="/rtgphp1/uploads/' . $_FILES['uploadfile']['name'] . '" target="_blank">Link</a>';
                }




                $size = getimagesize('uploads/' . $_FILES['uploadfile']['name']);
            } else {
                echo '<p>Datei wurde nicht hochgeladen</p>';
            }
        } else {
            echo '<p>Datei größer' . $file_size . 'MB</p>';
        }
    } else {
        if ($_FILES['uploadfile']['error'] = 4) {
            echo '<p>Keine Datei ausgewählt</p>';
        } else {
            echo '<p>Falsche Datei-Endung</p>';
        }
    }
}



?>

<?php
if ($erfolgreich != 1) {
?>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadfile"><br><br>
        <em>Erlaubte Datei: .pdf, .jpg / max. <?php echo $file_size . 'MB'; ?></em><br><br>
        <button type="submit" name="btn_send">Datei hochladen</button>
        <input type="password" name="passwort">
    </form>

<?php
}
?>





<?php
require('inc/footer.php');
