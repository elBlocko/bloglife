<?php
require('inc/config.php');
require('inc/header.php');
?>


<!--Karussel-->
<div class="container p-0">
    <div id="carousel-example-generic" class="carousel slide" data-pause="hover" data-interval="5000" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="index.php?site=7">
                    <!--Bild 1-->
                    <picture>
                        <source media="(min-width: 768px)" srcset="img/produkt1.webp" type="image/webp">
                        <source media="(min-width: 768px)" srcset="img/produkt1.jpg">
                        <source media="(max-width: 767px)" srcset="img/produkt1_4zu3.webp" type="image/webp">
                        <source media="(max-width: 767px)" srcset="img/produkt1_4zu3.jpg">
                        <img src="img/produkt1.jpg" class="img-responsive img-thumbnail" alt="...">
                    </picture>
                    <div class="carousel-caption">
                        <h3>Beispiel produkt1 1</h3>
                        <p>Slogan 1 und Textbeispiel 1</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="index.php?site=8">
                    <!--Bild 2-->
                    <picture>
                        <source media="(min-width: 768px)" srcset="img/produkt2.webp" type="image/webp">
                        <source media="(min-width: 768px)" srcset="img/produkt2.jpg">
                        <source media="(max-width: 767px)" srcset="img/produkt2_4zu3.webp" type="image/webp">
                        <source media="(max-width: 767px)" srcset="img/produkt2_4zu3.jpg">
                        <img src="img/produkt2.jpg" class="img-responsive img-thumbnail" alt="...">
                    </picture>
                    <div class="carousel-caption">
                        <h3>Beispiel Produkt 2</h3>
                        <p>Textbeispiel 2<br>Slogan 2!</p>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="index.php?site=9">
                    <!--Bild 3-->
                    <picture>
                        <source media="(min-width: 768px)" srcset="img/produkt3.webp" type="image/webp">
                        <source media="(min-width: 768px)" srcset="img/produkt3.jpg">
                        <source media="(max-width: 767px)" srcset="img/produkt3_4zu3.webp" type="image/webp">
                        <source media="(max-width: 767px)" srcset="img/produkt3_4zu3.jpg">
                        <img src="img/produkt3.jpg" class="img-responsive img-thumbnail" alt="...">
                    </picture>
                    <div class="carousel-caption">
                        <h3>Beispiel Produkt 3</h3>
                        <p>Textbeispiel 3!<br>(Zusatzinformation)</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- Schalter -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Zurück</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Weiter</span>
        </a>
    </div>
</div>

<!--Textcontainer1-->
<div class="container">
    <p class="font">Hallo Welt!</p>
    <p class="font">Herzlich Willkomen zu meiner ersten Homepage!</p>
    <p class="font2">Hier möchte ich zeigen was ich mit HTML, PHP, Bootstrap und PHP MyAdmin über XAMPP während der Umschulung, in zusammenarbeit mit meinen Klassenkameraden gelernt habe.<br>Es gibt auch ein dashboard mit Anmeldung und Login.<br><br>Unde alias quasi tenetur rerum cum minima. Repellendus tempore veritatis hic beatae voluptatum unde cum, facere eveniet! Sunt ad porro praesentium beatae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem exercitationem error a vero facilis, maiores modi quod? Atque voluptate sequi quia quo, deleniti quasi aut porro vel totam at ratione!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi placeat nesciunt id labore, asperiores cumque eos aliquam? Repellat molestiae maxime impedit sit quisquam voluptate, ad placeat fugit officiis labore deserunt.
    </p>
    <div class="row">
        <div class="col-md-6">
            <p class="font2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis perferendis, molestiae suscipit soluta sit inventore unde ad commodi facilis aspernatur quos quidem esse nostrum, veritatis ex corrupti placeat, laboriosam pariatur!
            </p>
        </div>
        <div class="col-md-6">
            <p class="font2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis perferendis, molestiae suscipit soluta sit inventore unde ad commodi facilis aspernatur quos quidem esse nostrum, veritatis ex corrupti placeat, laboriosam pariatur!
            </p>
        </div>
    </div>
</div>
<!--Textcontainer2-->
<div class="container margin2">
    <div class="row">
        <a href="index.php?site=5">
            <div class="col-md-4">
                <img src="img/produkt.jpg" alt="..." class="img-responsive img-circle">
                <p class="font3">Beispiel Produktseite</p>
            </div>
        </a>
        <a href="index.php?site=6">
            <div class="col-md-4">
                <img src="img/team.jpg" alt="..." class="img-responsive img-circle">
                <p class="font3">Beispiel Teamseite</p>
            </div>
        </a>
        <a href="https://www.google.com/index.html">
            <div class="col-md-4">
                <img src="img/google.jpg" alt="..." class="img-responsive img-circle">
                <p class="font3">Außenwelt (Google)</p>
            </div>
        </a>
    </div>
</div>


<?php
require('inc/footer.php');
?>