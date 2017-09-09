<?php

/**
 * Page "qui est LEGAGNEUR Matthieu ?"
 * @author LEGAGNEUR Matthieu <legagneur.matthieu@gmail.com> 
 */
class qui {

    public function __construct() {
        $wiki = "https://fr.wikipedia.org/wiki/";
        ?> <h1 class="text-center">Qui est LEGAGNEUR Matthieu ?</h1>
        <p>
            Difficile de décrire en détail la personnalité d'une perssone, encore moins quand il sagit de soi-même. <br />
            Je m'appele Matthieu, je suis né à <?= html_structures::a_link($wiki . "Cherbourg-Octeville", "Cherbourg", "", "Cherbourg, lien externe wikipedia", true) ?> 
            le <?= html_structures::time("1991-03-24", "24 mars 1991") ?>. J'ai donc au moment où vous lisez ce texte : <?= time::get_yers_old(24, 3, 1991); ?> ans. <br />
        </p>
        <p>
            Dès l'âge de 14 ans je sus que l'informatique serait ma vocation et je compris que internet était un outil de communication puissant 
            qui devenait omniprésent dans notre quotidien. <br />
            J'ai également rapidement compris la corrélation entre être un bon internaute et un citoyen, c'est comme cela que je suis devenu ce que l'on appel 
            <?= html_structures::a_link($wiki . "Libriste", "un libriste", "", "Libriste, lien externe wikipedia", true) ?>. <br />
            Je commence déjà à partager l'idéologie libriste autour de moi, j'installe sur ma clé USB la
            <?= html_structures::a_link("https://framakey.org/Main/Index", "Framakey", "", "Framakey, lien externe", true) ?> 
            de l'association de libriste
            <?= html_structures::a_link("https://framasoft.org/", "Framasoft", "", "Framasoft, lien externe", true) ?>,
            cette framakey m'accompagnera tout au long de ma scolarité (et encore aujourd'hui), me permettant notamment de rédiger mes exposés sur l'OpenOffice installé sur ma clé USB
            et de pouvoir les exécuter sur n'importe quel PC windows sans risquer de conflits avec les logiciels microsoft (type saut de marge ou animations bugées). <br />
            Du collège à ma licence professionnelle, jamais je ne rencontrerais de problèmes techniques grace aux logiciels libres,
            et n'hésiterais pas à en toucher deux mots quand je peux à la fin de mes exposés. 
        </p>
        <p>
            De grands noms de cet univers libriste m'inspirent, des personnes pour qui j'éprouve beaucoup de respect, en voici une liste non exhaustive ;
        </p> 
        <ul>
            <li>
                <?= html_structures::a_link($wiki . "Richard_Stallman", "Richard Matthew Stallman", "", "Richard Matthew Stallman, lien externe wikipedia", true) ?>,
                personnage emblematique du libre, créateur de l'OS GNU, de la licence GNU/GPL et de la Free Software Fondation
            </li>
            <li>
                <?= html_structures::a_link($wiki . "Benjamin_Bayart", "Benjamin Bayart", "", "Benjamin Bayart, lien externe wikipedia", true) ?>,
                anciens président de FDN (French Data Network), président de FFDN (Fédération FDN), militant français de la neutralité du net et du logiciel libre, <br />
                il es connu également pour son "franc-parlé" qu'il assume et revandique, notament dans une conferance culte où il met en garde RENATER
                (FAI spécialisé dans l'éducation et la recherche) <br />
                (<?= html_structures::a_link("https://www.youtube.com/watch?v=ky03Pzjfynw", "Extrait de la conferance \"Benjamin Bayart - JRES - Neutralité du Net\"", "", "Benjamin Bayart à propos de Renater, lien externe Youtube", true) ?>)
            </li>
            <li>
                <?= html_structures::a_link($wiki . "Linus_Torvalds", "Linus Torvalds", "", "Linus Torvalds, lien externe wikipedia", true) ?>,
                Créateur du noyeaux Linux et de GIT
            </li>
            <li>
                <?= html_structures::a_link($wiki . "Lawrence_Lessig", "Lawrence Lessig", "", "Lawrence Lessig, lien externe wikipedia", true) ?>,
                Créateur des licences Creative Commons (pour la diffusion d'oeuvres artistiques libre)
            </li>
        </ul>
        <p>Quelques autres personalité non-libriste :</p>
        <ul>
            <li>
                <?= html_structures::a_link($wiki . "Alan_Turing", "Alan Mathison Turing", "", "Alan Mathison Turing, lien externe wikipedia", true) ?>,
                considéré comme le père de l'informatique, il cassa le code "Enigma" utilisé par les allemands durant la seconde guerre mondiale, <br />
                invanta et donna son nom à un célébre test précurceur dans le domaine de l'IA : le test de Turing. <br />
                Malgrés son génie et service rendu à la nation britanique, il fut condamné en 1952 pour son homosexualité et se suicida en 1954 
            </li>
            <li>
                <?= html_structures::a_link($wiki . "Kevin_Mitnick", "Kevin David Mitnick", "", "Kevin David Mitnick, lien externe wikipedia", true) ?>,
                célébre hacker, premier pirate a étre considéré comme énemi publique par le FBI. Il deviendra consultant expert en sécurité informatique dans les années 2000.
                Ces actions, bien que contestables, ont permis de revoir et faire progrésser le domaine de la sécurité informatique.
            </li>
        </ul>
        <p>Quelques organismes ou sociètés </p>
        <ul>
            <li><?= html_structures::a_link("https://framasoft.org/", "Framasoft", "", "Framasoft, lien externe", true) ?>,
                Association libriste, redistributeur de logiciels libres instalable ou portable, à l'initiative du mouvement 
                <?= html_structures::a_link("https://degooglisons-internet.org/", "Dégooglisons Internet", "", "Dégooglisons Internet, lien externe", true) ?>, <br />
                afin d'aprendre a se passer de google pour re-décentraliser internet et donc le rendre plus libre.
            </li>
            <li><?= html_structures::a_link($wiki . "Mozilla", "Mozilla", "", "Mozilla, lien externe wikipedia", true) ?>,
                fondation créatrice de logiciels devenu emblématique du libre comme Firefox et Thunderbird,<br />
                également militante de la neutralité du net.
            </li>
            <li><?= html_structures::a_link("https://duckduckgo.com", "DuckDuckGo", "", "DuckDuckGO, lien externe", true) ?>,
                moteur de recherche libre et respecteux de la vie privé
            </li>
        </ul>
        <p>
            Au lycée, grâce à l'influence de ces perssonalités et d'un professeur libriste qui m'initie à linux et aux bases de l'algorithmique, 
            je choisis ma spécialisation dans le domaine de l'informatique :<br /> je serais développeur web.<br />
            Je trouve passionant de créer tout un écosystème numérique qui fonctionne pour traiter des données et afficher des résultats armonieusements structurés.<br />
            Pour être honnete il y a quelque chose de "divin" à cette "acte de création" et ce sentiment me conforte dans l'idée d'avoir bien choisis ma voie. <br />
        </p>
        <p>
            En BTS, je me surpasse, je "carbure" au café, et passe des nuits blanches à développer des projets en plus des TP demandés
            afin de me perfectioner le plus rapidement possible.<br />
            C'est à cette periode que je code les premières versions de classes PHP qui constituront le DevWebFramework plus tard...
        </p>
        <p>
            Puis vint l'année de ma licence pour valider ma scpécification en temps que développeur web. J'apprend d'avantage en terme de sécurité informatiques et
            sur l'utilisation des frameworks, c'est là que l'idée me viens : <br />
            ces frameworks sont biens et éfficaces, mais difficiles a prendre en main et certaines choses sont peu intuitives et meriterait d'etre simplifiées. <br />
            Je me décide alors à organiser mes classes et les intégrer dans un nouvel "écosystème numérique" qui constitura la première version de mon framework. 
        </p>
        <p>
            Je parle de mon projet à quelques amis proches afin d'avoir leurs avis et leur demander quelques idées, une question revient : <br />
            <em>Pourquoi veux-tu créer un framework alors qu'il en existe déjà quelques-uns ?</em> <br />
            en temps que libriste, la réponse me semblait évidente : 
        </p>
        <div style="border-left: lightgray solid 5px; margin-left: 10px; padding-left: 5px;">
            <p>
                <em>
                    "Il y a autant de manières de développer qu'il y a de développeurs, je veux mettre a l'épreuve ma manière de faire afin de la corriger et la perfectioner,
                    de plus, partager mon savoir faire pourait inspirer des idées à d'autres perssones. <br />
                    Certes, il existe déjà des frameworks, et alors ? A ma connaissance, la pluralité n'a jamais été néfaste , bien au contraire ! <br />
                    <strong>C'est ça le libre !</strong>"
                </em>
            </p>
        </div>
        <p>
            Une fois ma licence en poche, je renonce a continuer en master, le suis làs des études et je veux entrer en entreprise, être productif,
            utile et apprendre autrement : sur le terrain... et je ne vais pas être déçu !
        </p>
        <p> 
            Après quelques mois de recherche d'emplois, je rentre dans une socièté spécialité dans l'accessiblité numérique: <br />
            rendre des applications accessibles aux aveugles, mal-voyants, sourds et mal-entendants... incroyable !
            C'est un domaine tout nouveau pour moi, je n'ai jamais eu de cours sur le sujet. <br />
            Je travaille au contact d'aveugles, mal-voyants et sourds. J'aprends quelques rudiments de la LSF (Langue des Signes Française),
            et j'apprends également quelques bases pour produire du code accessible suivant le referentiel 
            <?= html_structures::a_link("https://references.modernisation.gouv.fr/rgaa-accessibilite/", "RGAA v2", "", "RGAA, lien externe", true) ?> 
            (une v3 plus exigeante est sortie plus recemment). 
        </p>
        <p>Sur mon temps libre, j'intègre mes nouvelles connaissances à mon framework personnel.</p>
        <p>
            Malheureusement, bien que le domaine et les contacts humains soit une très bonne experiance,
            divers problèmes (majoritairement personnels) me pousse à demander que mon CDD ne soit pas renouvelé.
        </p>
        <p> 
            Je décide alors de tenter une nouvelle aventure : créer une entreprise ! <br />
            objectif : rendre le framework professionel pour répondre à un large éventail de besoins informatique.<br />
            Après 1 an de création et 1 an d'activité, l'affaire ne tient pas et la société est dissoute. <br />
            Mais je n'ai aucun regret : j'ai appris énormément de choses en ces 2 ans en temps que chef d'entreprise et notre objectif est en grosse parti atteint : <br />
            Une version satisfaisante du framework fût publié sous licence GNU-GPLv3 lors de la dissolution de l'entreprise.
        </p>
        <div class="alert alert-info">
            <p>Pour plus de détails sur l'historique de ma société :</p>
            <ul>
                <li><?php
                    (new modal())->link_open_modal("Copie du \"Rapport du président AG DevWebIT 2017\"", "cp_r_pres", "(modal)", "Rapport du président AG DevWebIT 2017", "
 <p>Nous sommes réunis aujourd'hui, un an jour pour jour, après la création de l'entreprise pour faire le point et prendre les décisions qui s'imposent. </p>
 <p>Nous nous sommes lancés dans cette aventure avec toute notre volonté, nous nous sommes imposés d'être irréprochable.<br/>Irréprochable dans
 la gestion de l'entreprise, irréprochable sur le respect de la législation, irréprochable sur la tenue des comptes, irréprochable sur les délais pour fournir tout document
 à l'administration Française, la banque ou notre expert-comptable et irréprochable dans notre c&oelig;ur de métier : notre manière de développer notre technologie. </p>
 <p>Malheureusement cela n'a pas suffit, nous étions mal suivis au début puis par la suite bien accompagné mais trop tardivement, notre talon d'Achille fut notre
 méconnaissance en marketing, en communication et à la façon d'obtenir les clients nécessaire à la survie de notre entreprise.</p>
 <p>Nous sommes donc réunis pour faire le bilan et mettre fin cette aventure qui nous aura appris énormément de choses dans divers domaines de l'entreprise et
 du développement informatique. </p>
 <p>De cette aventure subsistera notre technologie, le DevWebFramework (DWF), qui sera publié sous licence libre et poursuivra son
 évolution après la dissolution de l'entreprise. </p><p>Quelques rappels sur l'historique de la société : </p>
 <p>Juillet 2015 Je contacte Dominique LEPAGE pour le projet de création de la société,
 il émet la nécessité d'intégrer une troisième personne au projet, je contacte Rodolphe BERNARD qui accepte de nous rejoindre. </p>
 <p>Août 2015 - Mai 2016 Nous sommes suivis par la Mets puis la BGE et la CCI pour la création de l'entreprise. <br/>Entre temps,
 je forme Dominique et Rodolphe à la première version du framework que j'avais développé durant mes études. Une seconde version plus performante est développé rapidement.
 <br/>Malheureusement Dominique émet des doutes sur son ambition à devenir chef d'entreprise et préfère quitter l'aventure. <br/>Je démarche diverses banques et
 expert-comptables afin de choisir au mieux les partenaires de notre société. </p>
 <p>Juin 2016 Nous déposons notre dossier de création le 13 juin au CFE de la CCI de l'Aisne, nous ouvrons le compte professionnel à la Société Général de Guise et
 signons la lettre de mission de l'expert-comptable chez CDER Baudeloque à Laon. </p>
 <p>Juillet 2016 - Mai 2017 Nous continuons à améliorer notre technologie pour étendre notre offre à un maximum de besoins informatique,
 Nous démarchons de nombreuses sociétés et de collectivités locales malheureusement sans succès, face à ce mur nous cherchons des conseils partout :
 nous participons à de nombreux salons et événements d'entreprises, nous souscrivons au réseau d'entreprise CPME en février 2017, nous nous tournons à nouveau vers la BGE,
 nous contactons même une école de commerce pour leur proposer notre société en cas d'étude pour éventuellement trouver une solution. Mais tout cela n'aboutira à rien.</p>
 <p>13 Juin 2017 Nous nous réunissons pour l'AGO et l'AGE afin de prendre les décisions qui s'imposent.</p>
<p class='text-right'>LEGAGNEUR Matthieu</p>
 ", "");
                    ?></li>
                <li><?php
                    (new modal())->link_open_modal("Copie du \"Rapport du liquidateur S.A.S DevWebIT le 31/07/2017\"", "cp_r_liq", "(modal)", "Rapport du liquidateur S.A.S DevWebIT le 31/07/2017", " 
 <p>Nous sommes réunis aujourd'hui, sept semaines après l'annonce de la dissolution de la S.A.S pour définitivement mettre fin à cette aventure qui, je le rappelle, nous aura énormément appris de choses.</p>
 <p>Ces sept semaines auront été éprouvantes pour moi, les procédures de dissolution de la société se sont révélées plus coûteuses que sa création, et ces mêmes procédures étaient parsemées de jours trop courts et stressant où je devais remplir et déposer les démarches le plus rapidement possible et d'autres jours horriblement longs et ennuyeux dans l'attente des réponses aux démarches, nécessaires aux suivantes.</p>
 <p>Mon moral a également été fortement éprouvé, notamment par la notion d'échec que je devais surmonter. </p>
 <p>Pour surmonter l'échec et combler les jours trop longs, j'ai continué à faire ce que je savais faire le mieux : améliorer le framework que nous avons développé et le préparer à sa publication sous la meilleure licence possible, ce sera la licence GNU GPL v3 qui sera retenue et la publication du framework aura lieu aujourd'hui même.</p>
 <p>Chaque semaine, je communiquais à Rodolphe l'avancement des démarches de dissolution dont voici l'historique :</p>
 <p>Le vendredi 16 juin, je tente d'obtenir un rendez-vous à la société générale afin d'obtenir un chéquier d'entreprise, car l'administration (fiscale et le CFE) demande à être payée par chèque, m'expliquant que payer par virement retarderait les démarches, le directeur de l'agence de la société générale m'informe en fin de journée qu'il ne sera pas disponible avant le 22 juin. Je décide alors malgré tout de déposer l'AGE au centre d'enregistrement fiscal le mardi 20 juin qui me délivre un RIB, je fait le virement bancaire dans la même journée.<BR>Le 22 juin, je commande le chéquier professionnel pour payer le CFE et le greffe du tribunal de commerce.</p>
 <p>Durant la semaine du 26 au 30 juin : je récupère le chéquier et l'AGE validée par les imp&ocirc;ts, je prend rendez-vous avec le CFE à la CCI de Laon,</p>
 <p>Durant la semaine du 3 au 7 juillet : je dépose le dossier de dissolution dûment remplie au CFE à la CCI de Laon et obtient le nouveau Kbis avec la motion de dissolution dans la même semaine. Je dépose alors la comptabilité à CDER Baudeloque pour qu'il rédige le bilan de liquidation.</p>
 <p>Le jeudi 27 juillet, après quelques échanges avec CDER, nous recevons le bilan de liquidation et décidons de faire l'assemblée générale ordinaire de liquidation le plus rapidement possible, nous la ferons le 31 juillet, pour être en conformité avec la loi et ne pas avoir à attendre quinze jours de plus, Rodolphe signera une attestation indiquant qu'il accepte de réduire son délais de consultation à quatre jours.</p>
 <p>Lundi 31 juillet, nous nous réunissons pour cette assemblée générale ordinaire de liquidation.</p>
 <p class='text-right'>LEGAGNEUR Matthieu</p> 
", "");
                    ?></li>
                <li><?= html_structures::a_link("https://github.com/legagneur-matthieu/DevWebFramework", "DevWebFramework (GitHub)", "", "DevWebFramework, lien externe GitHub", true) ?> </li>
            </ul>
        </div>
        <p>Aujourd'hui je suis a la recherche d'une entreprise corespondant à mes valeurs et dans laquelle je pourrais pleinement m'épanouir .</p>
        <?php
    }

}