<?php

/**
 * Page projets
 * @author LEGAGNEUR Matthieu <legagneur.matthieu@gmail.com> 
 */
class projets {

    public function __construct() {
        compact_css::get_instance()->add_style((new css())->add_rule(".card-header img", [
                    "position" => "absolute",
                    "width" => "60px",
                    "top" => "15px",
                    "right" => "5px"
        ]));
        ?>
        <h2 class="text-center">Les projets</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3>DevWebFramework (DWF)</h3>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3"/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Framework PHP et Cordova implémente de nombeuses libairies PHP et JS <br />
                            "Simplicité pour les utilisateurs, liberté pour les développeurs" est la devise du framework.</p>
                        <p class="card-text">
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/DevWebFramework", "Github", "card-link", "DevWebFramework, lien externe Github", true) ?> <br />
                            <?= html_structures::a_link("../doc/", "Documentation", "card-link", "Documentation DevWebFramework, lien externe", true) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header" style="background: black; color: white;">
                        <h3>MySH</h3>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3"/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">MySH est un script permettant à la suite d'une installation d'Ubuntu (ou variantes) 
                            d'installer facilement et rapidement divers environements et outils</p>
                        <p class="card-text">
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/MySH", "Github", "card-link", "MySH, lien externe Github", true) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <h2 class="text-center">Projets dépendant de DWF (PHP)</h2>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Site LEGAGNEUR Matthieu</h3>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3"/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Le site sur le quel vous vous trouvez actuellement</p>
                        <p class="card-text">
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/legagneur-matthieu", "Github", "card-link", "Legagneur Matthieu, lien externe Github", true) ?> <br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header" 
                         style="background: linear-gradient(to right, red, orange, yellow, yellowgreen, green, blue, indigo, violet); text-shadow:0 0 15px white; color : black;">
                        <h3>Convertisseur de températures</h3>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3"/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Convertisseur de températures en : <br />
                            Kelvin (°K), Celsius (°C), Fahrenheit (°F) et Benamran (°B, <strong>humoristique</strong>)
                        </p>
                        <p class="card-text">
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/convertisseur_temperatures/", "GitHub", "card-link", "Convertisseur de températures, lien externe Github", true) ?><br />
                            <?= html_structures::a_link("../convertisseur_temperatures/", "Convertisseur de températures", "card-link", "Convertisseur de températures, lien externe", true) ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>A Venir</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Projet à venir, en cours ou en révision</p>
                    </div>
                </div>
            </div>  
        </div>
        <hr />
        <h2 class="text-center">Projets dépendant de DWF (Cordova)</h2>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header"
                         style="background: linear-gradient(to right, red, orange, yellow, yellowgreen, green, blue, indigo, violet); text-shadow:0 0 15px white; color : black;">
                        <h3>Convertisseur de températures</h3>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3"/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Convertisseur de températures en : <br />
                            Kelvin (°K), Celsius (°C), Fahrenheit (°F) et Benamran (°B, <strong>humoristique</strong>). <br />
                            Pour <strong>Android 4.4.2 et supérieur</strong>
                        </p>
                        <p class="card-text">
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/cdv_convertisseur_temperatures/", "GitHub", "card-link", "Convertisseur de températures, lien externe Github", true) ?><br />
                            <?= html_structures::a_link("../convertisseur_temperatures/index.php?page=apk", "Page de téléchargement .APK", "card-link", "Convertisseur de températures, lien externe", true) ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>SMS Gateway</h3>
                        <img src="src/GPLv3.png" alt="Licence : GPLv3"/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Interface HTTP pour l'envoi de SMS</p>
                        <p class="card-text">
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/cdv_SMSGateway/", "GitHub", "card-link", "SMS Gateway, lien externe Github", true) ?><br />
                            <?= html_structures::a_link("../smsgateway/", "Pésentation et téléchargement", "card-link", "SMS Gateway, lien externe", true) ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>A Venir</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Projet à venir, en cours ou en révision</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}
