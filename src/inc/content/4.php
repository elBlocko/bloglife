<?php
require('inc/config.php');
require('inc/header.php');
?>

<div class="container">
    <header class="jumbotron header">
        <div class="container">
            <h1>Kontakt</h1>
            <p class="lead">Schreibt uns eine Nachricht</p>
        </div>
    </header>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">Vorname<br><input type="text" name="vorname" placeholder="Vorname">
        </div>
        <div class="col-md-6">Nachname<input type="text" name="nachname" placeholder="Nachname">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">E-Mail<input type="email" name="mail" placeholder="E-Mail">
        </div>
        <div class="col-md-6">Geburtstag<input type="date" name="geburtstag">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">Straße<input type="text" name="Strasse" placeholder="strasse">
        </div>
        <div class="col-md-6">Hausnummer<input type="text" name="hausnr" placeholder="Hausnummer">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">PLZ<input type="text" name="plz" placeholder="PLZ">
        </div>
        <div class="col-md-6">Ort<input type="text" name="ort" placeholder="Ort">
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6">Telefon<input type="text" name="telefon" placeholder="Telefon">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <label for="subject">Betreff:</label>
            <select id="subject" name="subject" class="form-control">
                <option>Bitte wählen</option>
                <option value="help">Benötige allgemeine Hilfe</option>
                <option value="feedback">Ich bring euch um!</option>
                <option value="bug">Das brennende Fass brennt nicht!</option>
                <option value="other">Sonstiges</option>
            </select>
            <input class="marginKontakt" type="file" name="fileupload">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <textarea rows="3" placeholder="Ihre Nachricht..."></textarea>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <input type="checkbox" name="ds">

            <!-- Button, der das Modal aufruft -->
            <button type="button" class="btn btn-info btn-xs marginKontakt" data-toggle="modal" data-target="#meinModal">
                Datenschutzerklärung anzeigen
            </button>
            <!-- Modal -->
            <div class="modal fade" id="meinModal" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Schließen"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="meinModalLabel">Datenschutz</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Serverzugriff:</h4>
                            <p> Bei jedem Zugriff eines Nutzers auf unseren Webseiten und bei jedem Abruf einer Datei werden Daten über diesen Vorgang vorübergehend in einer Protokolldatei gespeichert und verarbeitet. Im Einzelnen werden über jeden Zugriff/Abruf folgende Daten gespeichert:
                            </p>
                            <p>IP-Adresse</p>
                            <p>Informationen zu Ihrem Browser (User Agent String)</p>
                            <p>Datum und Uhrzeit</p>
                            <p>angeforderte Ressource</p>
                            <p>übertragene Datenmenge</p>
                            <p>Meldung, ob der Zugriff/Abruf erfolgreich war</p>
                            <p>
                                Diese Daten werden lediglich für statistische Zwecke ausgewertet und nach 7 Tagen gelöscht. Innerhalb der 7 Tage würden sie an Dritte nur übermittelt, soweit wir gesetzlich oder durch Gerichtsentscheidung dazu verpflichtet sind oder die Weitergabe im Falle von Angriffen auf unsere Internetinfrastruktur zur Rechts- oder Strafverfolgung erforderlich ist.
                                <br>
                                Eine Verwendung oder Weitergabe dieser Protokolldatei an Dritte zu anderen Zwecken erfolgt nicht.
                                Falls wir darüber hinaus Analysetools von Drittanbietern, wie etwa Google Analytics, einsetzen so erfolgt das datenschutzkonform und Sie finden eine entsprechende Erklärung separat im weiteren Verlauf dieser Seite.
                            </p>
                            <h4> Personenbezogene Daten in Online-Formularen und in E-Mails an uns:</h4>
                            <p>
                                Postanschriften, E-Mail-Adressen und sonstige Daten, die im Rahmen von Anfragen, Anmeldungen oder Bestellungen angegeben werden, werden an uns via E-Mail übertragen und ausschließlich für die Korrespondenz beziehungsweise die Abwicklung des Auftrages verwendet.
                            </p>
                            <h4> Nutzung unserer personenbezogenen Daten: </h4>
                            <p>
                                Einer Nutzung der im Impressum veröffentlichten Daten durch Dritte zur Übersendung von Werbung oder sonstigen Informationsmaterialien wird ausdrücklich widersprochen, es sei denn, eine derartige Übersendung wurde ausdrücklich gewünscht.
                            </p>
                            <h4> Google Analytics: </h4>
                            <p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. ("Google"). Google Analytics verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert.
                                <br>
                                Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite, wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt.
                                <br><br><br>
                                Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt.
                                <br><br><br>
                                Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen.
                                <br>
                                Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt. Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können.
                                <br>
                                Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie das unter dem folgenden Link (http://tools.google.com/dlpage/gaoptout?hl=de) verfügbare Browser-Plugin herunterladen und installieren.
                                <br><br>
                            </p>
                            <p>
                                Nähere Informationen hierzu finden Sie unter http://tools.google.com/dlpage/gaoptout?hl=de <br>
                                bzw. unter http://www.google.com/intl/de/analytics/learn/privacy.html (allgemeine Informationen zu Google Analytics und Datenschutz). Wir weisen Sie darauf hin, dass auf dieser Webseite Google Analytics um den Code "gat._anonymizeIp();" erweitert wurde, um eine anonymisierte Erfassung von IP-Adressen (sog. IP-Masking) zu gewährleisten. Quelle: www.datenschutzbeauftragter-info.de
                                <br><br><br>
                            </p>
                            <h4>Ein allgemeines Wort zu Google Analytics, Facebook-Buttons usw:</h4>
                            <p>Sie finden solche Plugins inzwischen auf sehr vielen Seiten im Internet. Sollten Sie Bedenken bezüglich Ihrer Privatsphäre haben, so empfehlen wir Ihnen den Einsatz eines Browserplugins welches das Laden diverser Plugins von vorn herein verhindert. Z.B. Ghostery, das es für viele Browser gibt.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a class="btn btn-primary" href="#" role="button">Formular senden</a>
        </div>
    </div>
</div>

<?php
require('inc/footer.php');
?>