<?php

/**
 * Page CV
 * @author LEGAGNEUR Matthieu <legagneur.matthieu@gmail.com> 
 */
class cv {

    public function __construct() {
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $("head").append('<style type="text/css"> .dl-horizontal dt { width: 200px; } .dl-horizontal dd { margin-left: 210px; } </style>');
            });
        </script>
        <h2 class="text-center">Curriculum Vitae</h2>
        <?php
        ob_start();
        ?>
        <p>
            LEGAGNEUR Matthieu <br />
            16 rue du général de Gaulle, 02120 Malzy<br />
            <a href="mailto:legagneur.matthieu@gmail.com">LEGAGNEUR.Matthieu@gmail.com</a><br />
            <?= time::get_yers_old(24, 3, 1991); ?> ans, Célibataire, Permis B<br />

        </p>
        <h2 class="text-center">Développeur web</h2>
        <h3>FORMATIONS:</h3>
        <?=
        html_structures::table(array("Années", "Etablicements", "Diplomes"), array(
            array("2013 - 2014", "INSSET (02100, Saint -Quentin)", "Licence professionnelle développeur Web"),
            array("2011 - 2013", "Lycée Paul Claudel (02000, Laon)", "BTS SIO SLAM (programmation informatique)"),
            array("2006 - 2011", "Lycée Joliot-Curie (02500 Hirson)", "BAC STI génie électrotechnique (mention bien)"),
            array("2004 - 2006", "Collège Camille Desmoulins (02120 Guise)", "BEPC")
        ));
        ?>
        <h3>COMPETENCES:</h3>
        <ul class="list-unstyled">
            <li>Maîtrise des langages : HTML5, CSS3, Bootstrap, PHP (5 et 7), MySQL, JavaScript, JQuery</li>
            <li>Paramétrage des serveurs: Apache, MySQL, FTP, SSH</li>
            <li>Maîtrise des OS: Windows (XP,7, 8, 2008 R2), Linux (Ubuntu 8.04 et supérieures)</li>
            <li>Maîtrise des logiciels NETBEANS (IDE), WAMP/LAMP, Virtualbox, GIMP, AUDACITY, et autres logiciels libres</li>
            <li>Maîtrise des outils de gestion de projet : GIT, SVN, Etherpad, Cloud</li>
            <li>Développement respectueux des normes W3C</li>
            <li>Créateur du DevWebFramework (DWF, framework PHP et Cordova) </li>
        </ul>
        <h3>EXPERIENCES PROFESSIONNELLES:</h3>
        <dl class="dl-horizontal">
            <dt>Juin 2016 - Juillet 2017</dt>
            <dd>PDG de la S.A.S DevWebIT</dd>
            <dt>Août 2015 - juin 2016</dt>
            <dd>Création de la société DevWebIT</dd>
            <dt>Mars 2015 - Juillet 2015</dt>
            <dd>Ent. Urbilog - Développeur PHP</dd>
            <dt>Mars 2014</dt>
            <dd>Stage au Centre Hospitalier de Guise (18 semaines)</dd>
            <dt>Décembre 2012</dt>
            <dd>Stage au Centre Hospitalier Brisset d’Hirson (6 semaines)</dd>
            <dt>Juin 2012</dt>
            <dd>Stage au magasin Telecom1 de Guise (5 semaines)</dd>
            <dt>Mars 2007 - Février 2011</dt>
            <dd>Ent.LEGAGNEUR
                <ul>
                    <li>Assistant électricien</li>
                    <li>Pose d&apos;équipements électriques</li>
                    <li>Installation de réseaux RJ45</li>
                </ul>
            </dd>
        </dl>
        <h3>LANGUE MAITRISE:</h3>
        <p>Anglais technique</p>
        <h3>CENTRE D&apos;INTERET:</h3>
        <p>Informatique (jeux, programmations, gestion de sites)</p>
        <?php
        echo ($html = ob_get_clean()) . html_structures::hr();
        $pdf = new printer("dompdf");
        $pdf->add_content('<style type="text/css">.text-center { text-align: center; }
.list-unstyled { padding-left: 0; list-style: none; }
th { text-align: left; }
.table { width: 100%; max-width: 100%; margin-bottom: 20px; border-collapse: collapse !important; }
.table td, .table th { background-color: #fff !important; }
.table > thead > tr > th,.table > tbody > tr > th,.table > tfoot > tr > th,.table > thead > tr > td,.table > tbody > tr > td,.table > tfoot > tr > td { padding: 8px; line-height: 1.42857143; vertical-align: top; border-top: 1px solid #dddddd; }
.table > thead > tr > th { vertical-align: bottom; border-bottom: 2px solid #dddddd; }
.table > caption + thead > tr:first-child > th,.table > colgroup + thead > tr:first-child > th,.table > thead:first-child > tr:first-child > th,.table > caption + thead > tr:first-child > td,.table > colgroup + thead > tr:first-child > td,.table > thead:first-child > tr:first-child > td { border-top: 0; }
.table > tbody + tbody { border-top: 2px solid #dddddd; }
.table .table { background-color: #ffffff; }
table col[class*="col-"] { position: static; float: none; display: table-column; }
table td[class*="col-"],table th[class*="col-"] { position: static; float: none; display: table-cell; }
.table-responsive { overflow-x: auto; min-height: 0.01%; }
.dl-horizontal dt { float: left; width: 150px; clear: left; text-align: right; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
.dl-horizontal dd { margin-left: 10px; }
dd ul{margin-left: 150px;}');
        $pdf->add_content('h1,h2,h3{ margin : 0; padding: 0; }
 p, ul, dl, table{font-size:14px; }
</style>');
        $pdf->add_content(utf8_decode($html));
        $pdf->print_buton();
    }

}
