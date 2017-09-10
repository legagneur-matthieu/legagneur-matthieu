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
            <div class="col-xs-12">
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
        </div>
        <h3 class="text-center">Projets dépendant de DWF (PHP)</h3>
        <div class="row">
            <div class="col-xs-4">
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
            <div class="col-xs-4">
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
                            <?= html_structures::a_link("https://github.com/legagneur-matthieu/convertisseur_temperatures/", "GitHub", "", "Convertisseur de temperatures, lien externe Github", true) ?><br />
                            <?= html_structures::a_link("../convertisseur_temperatures/", "Convertisseur de températures", "", "Convertisseur de températures, lien externe", true) ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
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
            <div class="col-xs-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">A Venir</h2>
                    </div>
                    <div class="panel-body">
                        <p>Projet à venir, en cours ou en révision</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">A Venir</h2>
                    </div>
                    <div class="panel-body">
                        <p>Projet à venir, en cours ou en révision</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
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
