<?php
require('inc/config.php');
require('inc/header.php');
?>


<!--1.Box-->
<div class="container margin2">
    <div class="row">
        <div class="col-md-6">
            <h3>Unser Klassiker! Sample Text</h3>
            <p>Sample TextSample TextSample Text!<br><br></p>
            <ul>
                <li>Maße:<br>Sample Text Sample Text</li>
                <li>Material: <br>Sample Text Sample Text .</li>
                <li>Haltbarkeit:<br>Sample Text Sample Text </li>
                <li>Inhalt: <br>Sample Text Sample Text Sample Text Sample Text </li>
                <li>Preis: <br>Nur: 6.000,00,-€</li>
            </ul>
        </div>
        <div class="col-md-6">
            <a href="index.php?site=8">
                <picture>
                    <source media="(min-width: 768px)" srcset="img/produkt1.webp" type="image/webp">
                    <source media="(min-width: 768px)" srcset="img/produkt1.jpg">
                    <source media="(max-width: 767px)" srcset="img/produkt1_4zu3.webp" type="image/webp">
                    <source media="(max-width: 767px)" srcset="img/produkt1_4zu3.jpg">
                    <img src="img/produkt1.jpg" class="img-responsive img-thumbnail" alt="...">
                </picture>
            </a>
        </div>
    </div>
</div>
<!--zweite Box-->
<div class="container margin2">
    <div class="row">
        <div class="col-md-6 col-md-push-6">
            <h3>Unser Topseller</h3>
            <p>Sample Text Sample Text !<br><br></p>
            <ul>
                <li>Maße:<br>Sample Text Sample Text </li>
                <li>Material: <br>Sample Text Sample Text Sample Text Sample Text </li>
                <li>Haltbarkeit:<br>Sample Text Sample Text </li>
                <li>Inhalt: <br>Sample Text Sample Text Sample Text Sample Text </li>
                <li>Preis: <br>Nur: 12.000,00,-€</li>
            </ul>
        </div>
        <div class="col-md-6 col-md-pull-6">
            <a href="index.php?site=7">
                <picture>
                    <source media="(min-width: 768px)" srcset="img/produkt2.webp" type="image/webp">
                    <source media="(min-width: 768px)" srcset="img/produkt2.jpg">
                    <source media="(max-width: 767px)" srcset="img/produkt2_4zu3.webp" type="image/webp">
                    <source media="(max-width: 767px)" srcset="img/produkt2_4zu3.jpg">
                    <img src="img/produkt2.jpg" class="img-responsive img-thumbnail" alt="...">
                </picture>
            </a>
        </div>
    </div>
</div>
<!--3. Box-->
<div class="container margin2">
    <div class="row">
        <div class="col-md-6">
            <h3>Unser Dauerbrenner!Sample Text Sample Text </h3>
            <p>Sample Text Sample Text ! <br><br></p>
            <ul>
                <li>Maße:<br>Sample Text Sample Text </li>
                <li>Material: <br>Sample Text Sample Text .</li>
                <li>Haltbarkeit:<br>Sample Text Sample Text !</li>
                <li>Preis: <br>Nur: 35.000,00,-€</li>
                <li>Sample Text Sample Text ! <br>Sample Text Sample Text !</li>
            </ul>
        </div>
        <div class=" col-md-6"><a href="index.php?site=9">
                <picture>
                    <source media="(min-width: 768px)" srcset="img/produkt3.webp" type="image/webp">
                    <source media="(min-width: 768px)" srcset="img/produkt3.jpg">
                    <source media="(max-width: 767px)" srcset="img/produkt3_4zu3.webp" type="image/webp">
                    <source media="(max-width: 767px)" srcset="img/produkt3_4zu3.jpg">
                    <img src="img/produkt3.jpg" class="img-responsive img-thumbnail" alt="...">
                </picture>
            </a>
        </div>
    </div>
</div>
<!--Bis hier her gehen unsere 3 Container-->


<?php
require('inc/footer.php');
?>