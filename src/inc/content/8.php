<?php
require('inc/config.php');
require('inc/header.php');
?>



<div class="container margin2">
    <div class="row">
        <div class="col-md-6">
            <picture>
                <source media="(min-width: 768px)" srcset="img/produkt2.webp" type="image/webp">
                <source media="(min-width: 768px)" srcset="img/produkt2.jpg">
                <source media="(max-width: 767px)" srcset="img/produkt2_4zu3.webp" type="image/webp">
                <source media="(max-width: 767px)" srcset="img/produkt2_4zu3.jpg">
                <img src="img/produkt2.jpg" class="img-responsive img-thumbnail" alt="...">
            </picture>
            <h3>Produkt 2</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti, nobis. Voluptas quibusdam reprehenderit, blanditiis odio ex ab repudiandae amet voluptate asperiores quis, deserunt quos, dicta tenetur ipsa veritatis voluptatem. Aperiam!
            </p>

        </div>
        <div class="col-md-6">

            <table class="table table-hover table-responsive">
                <tr>
                    <td>Artikelzustand:</td>
                    <th>Brandneu</th>
                </tr>
                <tr>
                    <td>Größe</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                _-Auswählen-_ <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">klein 100 l</a></li>
                                <li><a href="#">mittel 150 l</a></li>
                                <li><a href="#">mega 100000 l</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Anzahl</td>
                    <td>
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" class="form-control anzahlWidth">
                            </div>

                        </form>
                    </td>
                </tr>
            </table>

            <div class="zahlungStyle">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <p class="marginBut1">6.000,00 €</p><br>
                        <button type="submit" class="btn btn-primary marginBut2">Geld senden</button>
                        <button type="submit" class="btn btn-info marginBut2">Geld senden</button>
                        <button type="submit" class="btn btn-default marginBut2">Geld senden</button>
                    </div>
                </div>
            </div>
            <div class="bgWhite">
                <div class="row">
                    <div class="col-md-6">massive Transportkosten</div>
                    <div class="col-md-6">Rücknahme gegen Gebühr</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container backGround">
    <div class="row">
        <div class="col-md-12">
            <div>
                <!-- Tabs-Navs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#start" role="tab" data-toggle="tab">Artikelbeschreibung</a></li>
                    <li role="presentation"><a href="#profil" role="tab" data-toggle="tab">Rezensionen</a></li>
                </ul>
                <!-- Tab-Inhalte -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="start">
                        <h3>Artikelbeschreibung</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam non qui deleniti aliquam recusandae aliquid, totam, itaque, expedita similique at tempore. Veritatis aspernatur natus totam ipsum odit eum nihil sunt!
                            <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia debitis quibusdam quam quod! Facere corrupti, eum reprehenderit quas commodi illo, voluptas aliquid vitae nostrum dignissimos sit tempore quasi ex cupiditate!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem eius odio voluptas exercitationem optio, veritatis eum, iusto beatae ipsum dolor ratione iure omnis temporibus, minima velit rem ullam aperiam suscipit!
                            <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem porro dolore ipsam id quidem at modi similique magni distinctio adipisci voluptate quo provident quis ut eos perferendis aliquam, sequi dolorum?
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profil">
                        <h3>Rezensionen</h3>
                        <p>
                            Kunde 1: Sample Bewertung <br>
                            <br>
                            Kunde xyt: Sample Bewertung !!! <br>
                            <br>
                            Bedeutender Name: Irgendein Text <br>
                            <br>
                            Fälltmirniein: Sample Bewertung ??!!
                        </p>
                    </div>
                </div>
            </div>
            <a class="btn btn-default backArtikel" href="index.php?site=5" role="button">Zum Sortiment Zurück</a>
        </div>
    </div>
</div>


<?php
require('inc/footer.php');
?>