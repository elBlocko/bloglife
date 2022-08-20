<?php
require('inc/config.php');
//DB abfragen
require('inc/get_content.php');


require('inc/header.php');


echo $row['html_content'];



require('inc/footer.php');
