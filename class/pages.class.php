<?php

/** * Cette classe sert de "Vue" à votre application, * vous pouvez y développer votre application comme bon vous semble : * HTML, créér et appeler une fonction "private" dans une fonction "public", faire appel à des classes exterieures ... * @author LEGAGNEUR Matthieu <legagneur.matthieu@gmail.com> */
class pages { /** * Cette classe sert de "Vue" à votre application, * vous pouvez y développer votre application comme bon vous semble : * HTML, créé et appelle une fonction "private" dans une fonction "public", faire appel à des classes exterieures ... */

    public function __construct() {
        new robotstxt();
    }

    /**     * Entete des pages */
    public function header() {
        compact_css::get_instance()->add_style(
                (new css())->add_rule("header #boostap_switch_theme", [
                    "position" => "absolute", "right" => "-160px", "top" => "70px"
        ]));
        ?> 
        <header class="page-header bg-info"> 
            <h1>LEGAGNEUR Matthieu <br /><small>Développeur WEB, Libriste</small></h1> 
            <div id="boostap_switch_theme"><?= bootstrap_theme::switch_theme() ?></div>
        </header> 
        <?php
    }

    /**     * Pied des pages */
    public function footer() {
        ?> 
        <footer> <hr />
            <p> 2017-<?php echo date("Y"); ?> D&eacute;velopp&eacute; par LEGAGNEUR Matthieu</p>
            <!--[if (IE 6)|(IE 7)]> <p><big>Ce site n'est pas compatible avec votre version d'internet explorer !</big></p> <![endif]--> 
        </footer> 
        <?php
    }

    /**     * Fonction par défaut / page d'accueil */
    public function index() {
        new qui();
    }

    public function cv() {
        new cv();
    }

    public function projets() {
        new projets();
    }

}
