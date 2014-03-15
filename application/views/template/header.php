<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <title>Tournoi de pétanque</title>
        <meta name="author" content="Philippe Lalevée">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
        <style type="text/css">
            body {
                padding-top: 20px;
            }
        </style>
        <link rel="shortcut icon" href="/images/favicon.ico">   
    </head>
    <body>

        <div class="container-fluid">
            <div class="sidebar">
                <br><br>
                <img src="/images/petanque.jpg" alt="Tournoi de pétanque" width="180" />
                <br><br>
                <h5><?php echo anchor('tournoi', 'Accueil') ?></h5>
                <h5><?php echo anchor('tournoi/inscription', 'Inscription') ?></h5>
                <h5><font color="#0069d6">Listes</font></h5>
                <ul>
                    <li>des <?php echo anchor('tournoi/les_joueurs', 'joueurs') ?> </li>
                    <li>des <?php echo anchor('tournoi/les_equipes', 'équipes') ?> </li>
                    <li>des <?php echo anchor('tournoi/les_rencontres', 'matchs') ?> </li>
                    <li>des <?php echo anchor('tournoi/les_resultats', 'resultats') ?> </li>
                </ul>

                <h5><font color="#0069d6">Listes</font></h5>
                <h6><?php echo anchor('tournoi/le_reglement', 'Le règlement') ?></h6>
                <br>
                <h6><?php echo anchor('tournoi/les_annees_passees', 'Les années passées') ?></h6>
                <br>
                <h6><?php echo anchor('tournoi/les_credits', 'Crédits') ?></h6>
                <br>
                <h6><?php echo anchor_popup('private/admin', 'Accès organisateur') ?></h6>
                <br><br>
            </div>
        </div>

