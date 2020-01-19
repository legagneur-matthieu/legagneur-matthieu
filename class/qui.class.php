<?php

/**
 * Page "qui est LEGAGNEUR Matthieu ?"
 * @author LEGAGNEUR Matthieu <legagneur.matthieu@gmail.com> 
 */
class qui {

    public function __construct() {
        $wiki = "https://fr.wikipedia.org/wiki/";
        ?> <h2 class="text-center">Qui est LEGAGNEUR Matthieu ?</h2>
        <p>
            Difficile de décrire dans les détails la personnalité d'une personne, encore moins quand il s'agit de soi-même. <br />
            Je m'appelle Matthieu, je suis né à <?= html_structures::a_link($wiki . "Cherbourg-Octeville", "Cherbourg", "", "Cherbourg, lien externe wikipedia", true) ?> 
            le <?= html_structures::time("1991-03-24", "24 mars 1991") ?>. J'ai donc au moment où vous lisez ce texte : <?= time::get_yers_old(24, 3, 1991); ?> ans. <br />
        </p>
        <p>
            Dès l'âge de 14 ans, j'ai su que l'informatique serait ma vocation et je compris que internet était un outil de communication puissant 
            qui devenait omniprésent dans notre quotidien. <br />
            J'ai également rapidement compris la corrélation entre être un bon internaute et un citoyen, c'est comme cela que je suis devenu ce que l'on appelle 
            <?= html_structures::a_link($wiki . "Libriste", "un libriste", "", "Libriste, lien externe wikipedia", true) ?>. <br />
            Je commence déjà à partager l'idéologie libriste autour de moi, j'installe sur ma clé USB la
            <?= html_structures::a_link("https://framakey.org/Main/Index", "Framakey", "", "Framakey, lien externe", true) ?> 
            de l'association de libriste
            <?= html_structures::a_link("https://framasoft.org/", "Framasoft", "", "Framasoft, lien externe", true) ?>,
            cette framakey m'accompagnera tout au long de ma scolarité (et encore aujourd'hui), me permettant notamment de rédiger mes exposés sur l'OpenOffice installé sur ma clé USB
            et de pouvoir les exécuter sur n'importe quel PC, ayant un système d'exploitation sous Windows, sans risquer de conflits avec les logiciels de Microsoft (type saut de marge ou animations beugées). <br />
            Du collège à ma licence professionnelle, jamais je ne rencontrais de problèmes techniques grâce aux logiciels libres,
            et n'hésitais pas à en toucher deux mots quand je pouvais à la fin de mes exposés. 
        </p>
        <p>
            De grands noms de cet univers libriste m'inspirent, des personnes pour qui j'éprouve beaucoup de respect, en voici une liste non exhaustive ;
        </p> 
        <ul>
            <li>
                <?= html_structures::a_link($wiki . "Richard_Stallman", "Richard Matthew Stallman", "", "Richard Matthew Stallman, lien externe wikipedia", true) ?>,
                personnage emblématique du libre, créateur de l'OS GNU, de la licence GNU/GPL et de la Free Software Fondation
            </li>
            <li>
                <?= html_structures::a_link($wiki . "Benjamin_Bayart", "Benjamin Bayart", "", "Benjamin Bayart, lien externe wikipedia", true) ?>,
                anciens président de FDN (French Data Network), président de FFDN (Fédération FDN), militant français de la neutralité du net et du logiciel libre, <br />
                il est connu également pour son "franc parler" qu'il assume et revendique, notamment dans une conférence culte où il met en garde RENATER
                (FAI spécialisé dans l'éducation et la recherche) <br />
                (<?= html_structures::a_link("https://www.youtube.com/watch?v=ky03Pzjfynw", "Extrait de la conferance \"Benjamin Bayart - JRES - Neutralité du Net\"", "", "Benjamin Bayart à propos de Renater, lien externe Youtube", true) ?>)
            </li>
            <li>
                <?= html_structures::a_link($wiki . "Linus_Torvalds", "Linus Torvalds", "", "Linus Torvalds, lien externe wikipedia", true) ?>,
                Créateur du noyau Linux et de GIT
            </li>
            <li>
                <?= html_structures::a_link($wiki . "Lawrence_Lessig", "Lawrence Lessig", "", "Lawrence Lessig, lien externe wikipedia", true) ?>,
                Créateur des licences Creative Commons (pour la diffusion d'oeuvres artistiques libre)
            </li>
        </ul>
        <p>Quelques autres personnalités non-libriste :</p>
        <ul>
            <li>
                <?= html_structures::a_link($wiki . "Alan_Turing", "Alan Mathison Turing", "", "Alan Mathison Turing, lien externe wikipedia", true) ?>,
                considéré comme le père de l'informatique, il cassa le code "Enigma" utilisé par les allemands durant la seconde guerre mondiale, <br />
                inventa et donna son nom à un célébre test précurseur dans le domaine de l'IA : le test de Turing. <br />
                Malgré son génie et ses services rendus à la nation britannique, il fut condamné en 1952 pour son homosexualité et se suicida en 1954. 
            </li>
            <li>
                <?= html_structures::a_link($wiki . "Kevin_Mitnick", "Kevin David Mitnick", "", "Kevin David Mitnick, lien externe wikipedia", true) ?>,
                célébre hacker, premier pirate à être considéré comme ennemi publique par le FBI. Il deviendra consultant expert en sécurité informatique dans les années 2000.
                Ces actions, bien que contestables, ont permis de revoir et faire progresser le domaine de la sécurité informatique.
            </li>
        </ul>
        <p>Quelques organismes ou sociétés </p>
        <ul>
            <li><?= html_structures::a_link("https://framasoft.org/", "Framasoft", "", "Framasoft, lien externe", true) ?>,
                Association libriste, redistributeur de logiciels libres installable ou portable, à l'initiative du mouvement 
                <?= html_structures::a_link("https://degooglisons-internet.org/", "Dégooglisons Internet", "", "Dégooglisons Internet, lien externe", true) ?>, <br />
                afin d'apprendre à se passer de google pour re-décentraliser internet et donc le rendre plus libre.
            </li>
            <li><?= html_structures::a_link($wiki . "Mozilla", "Mozilla", "", "Mozilla, lien externe wikipedia", true) ?>,
                fondation créatrice de logiciels devenue emblématique du libre comme Firefox et Thunderbird,<br />
                également militante de la neutralité du net.
            </li>
            <li><?= html_structures::a_link("https://duckduckgo.com", "DuckDuckGo", "", "DuckDuckGO, lien externe", true) ?>,
                moteur de recherche libre et respecteux de la vie privée
            </li>
        </ul>
        <p>
            Au lycée, grâce à l'influence de ces personnalités et d'un professeur libriste qui m'initie à linux et aux bases de l'algorithmique, 
            je choisis ma spécialisation dans le domaine de l'informatique :<br /> je serais développeur web.<br />
            Je trouve passionnant de créer tout un écosystème numérique qui fonctionne pour traiter des données et afficher des résultats harmonieusement structurés.<br />
            Pour être honnête, il y a quelque chose de "divin" à cette "acte de création" et ce sentiment me conforte dans l'idée d'avoir bien choisi ma voie. <br />
        </p>
        <p>
            En BTS, je me surpassai, je "carburai" au café, et passai des nuits blanches à développer des projets en plus des TP demandés
            afin de me perfectionner le plus rapidement possible.<br />
            C'est à cette période que je codai les premières versions de classes PHP qui constituront le DevWebFramework plus tard...
        </p>
        <p>
            Puis vint l'année de ma licence pour valider ma spécification en temps que développeur web. J'appris davantage en terme de sécurité informatiques et
            sur l'utilisation des frameworks, c'est là qu'une idée m'est venue à l'esprit qui était la suivante : <br />
            ces frameworks sont biens et efficaces, mais difficiles à prendre en main et certaines choses sont peu intuitives et mériteraient d'etre simplifiées. <br />
            Je décidai alors à organiser mes classes et à les intégrer dans un nouvel "écosystème numérique" qui constitua la première version de mon framework. 
        </p>
        <p>
            Je parle de mon projet à quelques amis proches afin d'avoir leurs avis et leur demander quelques idées, une question revient : <br />
            <em>Pourquoi veux-tu créer un framework alors qu'il en existe déjà quelques-uns ?</em> <br />
            en temps que libriste, la réponse me semblait évidente : 
        </p>
        <div style="border-left: lightgray solid 5px; margin-left: 10px; padding-left: 5px;">
            <p>
                <em>
                    "Il y a autant de manières de développer qu'il y a de développeurs, je veux mettre à l'épreuve ma manière de faire afin de la corriger et la perfectioner,
                    de plus, partager mon savoir faire pourait inspirer des idées à d'autres personnes. <br />
                    Certes, il existe déjà des frameworks, et alors ? A ma connaissance, la pluralité n'a jamais été néfaste , bien au contraire ! <br />
                    <strong>C'est ça le libre !</strong>"
                </em>
            </p>
        </div>
        <p>
            Une fois ma licence en poche, je renoncai à continuer en master, j'étais lassé des études et je voulais entrer en entreprise, être productif,
            utile et apprendre autrement : sur le terrain... et je n'étais pas deçu !
        </p>
        <p> 
            Après quelques mois de recherche d'emploi, je rentrai dans une société spécialisée dans l'accessiblité numérique: <br />
            rendre des applications accessibles aux aveugles, mal-voyants, sourds et mal-entendants... incroyable !
            C'est un domaine tout nouveau pour moi, je n'ai jamais eu de cours sur le sujet. <br />
            Je travaillais au contact d'aveugles, mal-voyants et sourds. J'apprenais quelques rudiments de la LSF (Langue des Signes Française),
            et j'apprenais également quelques bases pour produire du code accessible suivant le referentiel 
            <?= html_structures::a_link("https://references.modernisation.gouv.fr/rgaa-accessibilite/", "RGAA v2", "", "RGAA, lien externe", true) ?> 
            (une v3 plus exigeante est sortie plus récemment). 
        </p>
        <p>Sur mon temps libre, j'intègre mes nouvelles connaissances à mon framework personnel.</p>
        <p>
            Malheureusement, bien que le domaine et les contacts humains soit une très bonne expérience,
            divers problèmes (majoritairement personnels) me poussait à demander que mon CDD ne soit pas renouvelé.
        </p>
        <p> 
            Je décidais alors de tenter une nouvelle aventure : créer une entreprise ! <br />
            objectif : rendre le framework professionel pour répondre à un large éventail de besoins informatiques.<br />
            Après 1 an de création et 1 an d'activité, l'affaire n'a pas tenue et la société a été dissoute. <br />
            Mais je n'ai aucun regret : j'ai appris énormément de choses en ces 2 ans en tant que chef d'entreprise et notre objectif était en grosse parti atteint : <br />
            Une version satisfaisante du framework fut publié sous licence GNU-GPLv3 lors de la dissolution de l'entreprise.
        </p>
        <p>Aujourd'hui je suis à la recherche d'une entreprise corespondant à mes valeurs et dans laquelle je pourrais pleinement m'épanouir .</p>
        <p>Je continue a améliorer le framework et y intégrer mes connaissances.</p>
        <?php
    }

}