
<?php
/*
switch ($_GET['site']) {
    case 1:
        $tmp_title = '刀のページ';
        break;
    case 2:
        $tmp_title = 'AGB';
        break;
    case 3:
        $tmp_title = 'Impressum';
        break;
    case 4:
        $tmp_title = 'Kontakt';
        break;
    case 5:
        $tmp_title = 'Produkt';
        break;
    case 6:
        $tmp_title = 'Superdudes';
        break;
    case 7:
        $tmp_title = 'Leeres Fass';
        break;
    case 8:
        $tmp_title = 'Volles Fass';
        break;
    case 9:
        $tmp_title = 'brennendes Fass';
        break;
    default:
        $tmp_title = 'Fehler 404 - Seite nicht vorhanden';
        $_GET['site'] = 10;
}

echo '<title>' . $tmp_title . '</title>';


//Variante Array und Funktion
/*$titles = array(
    'Index',
    'AGB',
    'Impressum',
    'Sortiment',
);
//am besten Funktion nehmen wenn dinge sich ständig wiederholen funtion und am besten passenden Namen dahinter Nachteil bei Seite löschen = Index verrutscht
function getTitle()
{
    global $titles;
    if ($_GET['site'] - 1 || $_GET['site'] > count($titles)) {
        $_GET['site'] = 404;
        return 'Diese Seite ist nicht erreichbar';
    } else {
        return $titles[$_GET['site'] - 1];
    }
}*/