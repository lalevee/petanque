<html>
    <head>
        <title>ADMIN: Tournoi de pétanque</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
    </head>
    <body>

        <h1>Administration du tournoi « Pierre Petit »</h1>

        <h2>Fonctions d'administration</h2>
        <ul>
            <li>ZZZ -> INI: Initialisation</li>
            <ul>
                <li><?php echo anchor('private/admin/initialiser', 'initialiser configuration') ?></li>
                <ul>
                    <li>remise à zéro du numéro de tour</li>
                    <li>passage de l'état à INI</li>
                    <li>saisie des autres informations</li>
                </ul>
                <li><?php echo anchor('private/admin/config', 'affichage configuration') ?></li>
                <br />
            </ul>
            <li>INI -> INS: Phase d'inscription</li>
            <ul>
                <li><?php echo anchor('private/admin/phase_inscription', 'début phase inscription') ?></li>
                <ul>
                    <li>passage de l'état à INS</li>
                </ul>
                <li><?php echo anchor('private/admin/paiement', 'paiement joueur') ?></li>
                <br />
            </ul>
            <li>INS -> PRE: Préparation des équipes</li>
            <ul>
                <li><?php echo anchor('private/admin/inscription_equipe', 'inscription équipe') ?></li>
                <li><?php echo anchor('private/admin/tirage_equipe', 'tirage équipe') ?></li>
                <br />
            </ul>
            <li>PRE -> EXP: Gestion des tours</li>
            <ul>
                <li><?php echo anchor('private/admin/phase_tournoi', 'début du tournoi') ?></li>
                <ul>
                    <li>passage de l'état à EXP</li>
                    <li>génération des matchs du premier tour</li>
                </ul>
                <li><?php echo anchor('private/admin/score', 'score match') ?></li>
                <li><?php echo anchor('private/admin/tour', 'tour suivant') ?> </li>
                <ul>
                    <li>incrémentation du numéro de tour</li>
                    <li>génération des matchs suivants</li>
                </ul>
            </ul>
            <br />
            <li>EXP -> FIN: Tournoi terminé</li>
            <br />
            <li>FIN -> ZZZ: Mise en sommeil</li>
            <br />
	</ul>
        <h2>Autres fonctions</h2>
        <ul>
          <li>envoi mail...</li>
          <ul>
            <li><?php echo anchor('private/admin/mail_sgc', '... à SGC') ?></li>
            <li><?php echo anchor('private/admin/mail_joueurs', '... à tous les joueurs') ?></li>
            <li><?php echo anchor('private/admin/mail_apayer', '... aux joueurs qui doivent payer...') ?></li>
            <li><?php echo anchor('private/admin/mail_choix_equipe', '... aux joueurs ayant choisi de constituer leur équipe...') ?></li>
            <li><?php echo anchor('private/admin/mail_joueurs/TRUE', '... aux joueurs qui ont un match à jouer') ?></li>
            <li><?php echo anchor('private/admin/mail_equipe', '... aux joueurs d\'une équipe') ?></li>
          </ul>
	  <br />
          <li>divers...</li>
          <ul>
            <li><?php echo anchor('private/admin/testmail', 'test du mail') ?></li>
            <li><a href="/phpmyadmin" target="_blank">phpmyadmin</a></li>
            <li><a href="/user_guide/" target="_blank">codeigniter user guide</a></li>
          </ul>
        </ul>

        <h2><?php echo anchor('tournoi', 'retour au site') ?></h2>
        <br />

        <?= img('images/petanque.jpg') ?>

    </body>
</html>
