<?php
//session starten
session_start();
// Dateigröße definieren für Upload
$file_size = 10; // 10MB
$anzeige_file_type = ['jpg', 'pdf', 'png'];
$file_type = ['image/jpg', 'image/jpeg', 'application/pdf', 'image/png'];


// Mailer Init
require('phpmailer/class.phpmailer.php');

//Zeitzone
date_default_timezone_set('Europe/Berlin');

// Datenbank verbinden
$db = mysqli_connect('localhost', 'root', '', 'rtg_db');
//Verbinden sont nicht!
if (mysqli_connect_errno()) {

    die('Datenbank konnte nicht verbunden werden!');
}
//Abfrage ob Datenbank UTF-8 wenn nicht dann ncht!
if (!mysqli_set_charset($db, 'utf8')) {
    die('Datenbank ist nicht UTF-8');
}


//content
if (!isset($_GET['site'])) {
    $_GET['site'] = 1;
}
