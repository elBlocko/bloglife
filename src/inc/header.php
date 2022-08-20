<!DOCTYPE html>
<html lang="de">

<head>
    <?php echo '<meta charset="UTF-8">'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <?php
    if (!empty($row['title_name'])) {
        echo '<title>' . $row['title_name'] . '</title>';
    }
    if (!empty($row['desc_name'])) {
        echo '<meta name="description" content="' . $row['desc_name'] . '">';
    }
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/k-style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/tabicon.png">
</head>

<body>
    <div class="container margin">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Navigation ein-/ausblenden</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img class="logo" src="img/navlogo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php?site=5">Sortiment<span class="sr-only">(aktuell)</span></a></li>
                    <li><a href="index.php?site=6">Team</a></li>
                    <li class="font2">FIRMEN NAME ! Slogan Text hier . . .</li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?site=4">Kontakt</a></li>
                </ul>
            </div>
        </nav>
    </div>