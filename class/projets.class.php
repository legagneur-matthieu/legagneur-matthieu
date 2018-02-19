<?php

/**
 * Page projets
 * @author LEGAGNEUR Matthieu <legagneur.matthieu@gmail.com> 
 */
class projets {

    public function __construct() {
        ?>
        <h2 class="text-center">Les projets</h2>
        <div class="row">
            <div class="col-xs-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">DevWebFramework (DWF)</h2>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3" style="position: absolute; width: 60px; top: 5px; right: 25px;" />
                    </div>
                    <div class="panel-body">
                        <p>Framework PHP et Cordova implémente de nombeuses libairies PHP et JS <br />
                            "Simplicité pour les utilisateurs, liberté pour les développeurs" est la devise du framework.</p>
                        <p>
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/DevWebFramework", "Github", "", "DevWebFramework, lien externe Github", true) ?> <br />
                            <?= html_structures::a_link("../doc/", "Documentation", "", "Documentation DevWebFramework, lien externe", true) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel panel-info">
                    <div class="panel-heading" style="background: black; color: white;">
                        <h2 class="panel-title">MySH</h2>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3" style="position: absolute; width: 60px; top: 5px; right: 25px;" />
                    </div>
                    <div class="panel-body">
                        <p>MySH est un script permettant à la suite d'une installation d'Ubuntu (ou variantes) 
                            d'installer facilement et rapidement divers environements et outils</p>
                        <p>
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/MySH", "Github", "", "MySH, lien externe Github", true) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="text-center">Projets dépendant de DWF (PHP)</h3>
        <div class="row">
            <div class="col-xs-6 col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">Site LEGAGNEUR Matthieu</h2>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3" style="position: absolute; width: 60px; top: 5px; right: 25px;" />
                    </div>
                    <div class="panel-body">
                        <p>Le site sur le quel vous vous trouvez actuellement</p>
                        <p>
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/legagneur-matthieu", "Github", "", "Legagneur Matthieu, lien externe Github", true) ?> <br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading" 
                         style="background: linear-gradient(to right, red, orange, yellow, yellowgreen, green, blue, indigo, violet); text-shadow:0 0 15px white; color : black;">
                        <h2 class="panel-title">Convertisseur de températures</h2>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3" style="position: absolute; width: 60px; top: 5px; right: 25px;" />
                    </div>
                    <div class="panel-body">
                        <p>Convertisseur de températures en : <br />
                            Kelvin (°K), Celsius (°C), Fahrenheit (°F) et Benamran (°B, <strong>humoristique</strong>)
                        </p>
                        <p>
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/convertisseur_temperatures/", "GitHub", "", "Convertisseur de températures, lien externe Github", true) ?><br />
                            <?= html_structures::a_link("../convertisseur_temperatures/", "Convertisseur de températures", "", "Convertisseur de températures, lien externe", true) ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">A Venir</h2>
                    </div>
                    <div class="panel-body">
                        <p>Projet à venir, en cours ou en révision</p>
                    </div>
                </div>
            </div>  
        </div>
        <h3 class="text-center">Projets dépendant de DWF (Cordova)</h3>
        <div class="row">
            <div class="col-xs-6 col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading"
                         style="background: linear-gradient(to right, red, orange, yellow, yellowgreen, green, blue, indigo, violet); text-shadow:0 0 15px white; color : black;">
                        <h2 class="panel-title">Convertisseur de températures</h2>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3" style="position: absolute; width: 60px; top: 5px; right: 25px;" />
                    </div>
                    <div class="panel-body">
                        <p>Convertisseur de températures en : <br />
                            Kelvin (°K), Celsius (°C), Fahrenheit (°F) et Benamran (°B, <strong>humoristique</strong>). <br />
                            Pour <strong>Android 4.4.2 et supérieur</strong>
                        </p>
                        <p>
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/cdv_convertisseur_temperatures/", "GitHub", "", "Convertisseur de températures, lien externe Github", true) ?><br />
                            <?= html_structures::a_link("../convertisseur_temperatures/index.php?page=apk", "Page de téléchargement .APK", "", "Convertisseur de températures, lien externe", true) ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">A Venir</h2>
                    </div>
                    <div class="panel-body">
                        <p>Projet à venir, en cours ou en révision</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">A Venir</h2>
                    </div>
                    <div class="panel-body">
                        <p>Projet à venir, en cours ou en révision</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}
