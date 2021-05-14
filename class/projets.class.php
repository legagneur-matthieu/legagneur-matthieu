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
        $this->base();
        $this->dwf_php();
        $this->dwf_Cordova();
    }

    private function card($head_text = "A Venir", $texts = ["Projet à venir, en cours ou en révision"], $head_style = false, $img_src = "src/GPLv3.png", $img_alt = "Licence : GPLv3") {
        ?>
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header" <?= ($head_style ? "style=\"{$head_style}\"" : "") ?> >
                    <h3><?= $head_text ?></h3>
                    <?php
                    if ($img_src) {
                        ?>
                        <img src="<?= $img_src ?>" alt="<?= $img_alt ?>"/>
                        <?php
                    }
                    ?>
                </div>
                <div class="card-body">
                    <?php
                    foreach ($texts as $text) {
                        ?>
                        <p class="card-text"><?= $text ?></p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }

    private function base() {
        ?>
        <h2 class="text-center">Les projets</h2>
        <div class="row">
            <?php
            $this->card("DevWebFramework <small>(DWF)</small>",
                    [
                        "Framework PHP et Cordova implémente de nombeuses libairies PHP et JS <br />
                        \"Simplicité pour les utilisateurs, liberté pour les développeurs\" est la devise du framework.",
                        html_structures::a_link("https://github.com/legagneur-matthieu/DevWebFramework", "Github", "card-link", "DevWebFramework, lien externe Github", true) . "<br />" .
                        html_structures::a_link("../doc/", "Documentation", "card-link", "Documentation DevWebFramework, lien externe", true)
            ]);
            $this->card("MySH",
                    [
                        "MySH est un script permettant à la suite d'une installation d'Ubuntu (ou variantes) 
                            d'installer facilement et rapidement divers environements et outils",
                        html_structures::a_link("https://github.com/legagneur-matthieu/MySH", "Github", "card-link", "MySH, lien externe Github", true)
                    ], "background: black; color: white;");
            $this->card("SynDir",
                    [
                        "SynDir est un programme de synchronisation de dossier écrit en PHP",
                        html_structures::a_link("https://github.com/legagneur-matthieu/SynDir", "Github", "card-link", "SynDir, lien externe Github", true)
            ]);
            ?>      
        </div>
        <hr />
        <?php
    }

    private function dwf_php() {
        ?>
        <h2 class="text-center">Projets dépendant de DWF (PHP)</h2>
        <div class="row">
            <?php
            $this->card("LEGAGNEUR Matthieu",
                    [
                        "Le site sur le quel vous vous trouvez actuellement",
                        html_structures::a_link("https://github.com/legagneur-matthieu/legagneur-matthieu", "Github", "card-link", "Legagneur Matthieu, lien externe Github", true)
            ]);
            $this->card("Convertisseur de températures",
                    [
                        "Convertisseur de températures en : <br />
                            Kelvin (°K), Celsius (°C), Fahrenheit (°F) et Benamran (°B, <strong>humoristique</strong>)",
                        html_structures::a_link("../convertisseur-temperatures/", "Convertisseur de températures", "card-link", "Convertisseur de températures, lien externe", true) . "<br />" .
                        html_structures::a_link("https://github.com/legagneur-matthieu/convertisseur_temperatures/", "GitHub", "card-link", "Convertisseur de températures, lien externe Github", true)
                    ], "background: linear-gradient(to right, red, orange, yellow, yellowgreen, green, blue, indigo, violet); text-shadow:0 0 15px white; color : black;");
            $this->card("Virtual Printer Online", [
                "Virtual Printer Online (VPO),<br /> Creation et export de PDF/CSV/QRCODE via une interface WEB ou une API",
                html_structures::a_link("../vpo/", "VPO", "card-link", "Virtual Printer Online, lien externe", true)
                    ], false, false, false);
            ?>

        </div>
        <hr />
        <?php
    }

    private function dwf_Cordova() {
        ?>
        <h2 class="text-center">Projets dépendant de DWF (Cordova)</h2>
        <div class="row">
            <?php
            $this->card("Convertisseur de températures",
                    [
                        "Convertisseur de températures en : <br />
                            Kelvin (°K), Celsius (°C), Fahrenheit (°F) et Benamran (°B, <strong>humoristique</strong>). <br />
                            Pour <strong>Android 4.4.2 et supérieur</strong>",
                        html_structures::a_link("https://github.com/legagneur-matthieu/cdv_convertisseur_temperatures/", "GitHub", "card-link", "Convertisseur de températures, lien externe Github", true) . "<br />" .
                        html_structures::a_link("../convertisseur_temperatures/index.php?page=apk", "Page de téléchargement .APK", "card-link", "Convertisseur de températures, lien externe", true)
                    ], "background: linear-gradient(to right, red, orange, yellow, yellowgreen, green, blue, indigo, violet); text-shadow:0 0 15px white; color : black;");
            $this->card("SMS Gateway",
                    [
                        "Interface HTTP pour l'envoi de SMS",
                        html_structures::a_link("https://github.com/legagneur-matthieu/cdv_SMSGateway/", "GitHub", "card-link", "SMS Gateway, lien externe Github", true) . "<br />" .
                        html_structures::a_link("../smsgateway/", "Pésentation et téléchargement", "card-link", "SMS Gateway, lien externe", true)
                    ], "background: #17a2b8");
            $this->card();
            ?>
        </div>
        <?php
    }

}
