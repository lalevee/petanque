<html>
    <head>
        <title>Score match réussi</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
    </head>
    <body>

        <h1>Score match effectué !</h1>
        <ul>
            <li><?php echo 'Equipe A : ' . $R_e1 . ' Score : ' . $R_score1; ?></li>
            <li><?php echo 'Equipe B : ' . $R_e2 . ' Score : ' . $R_score2; ?></li>
        </ul>

        <p>Retour à la page d'<?php echo anchor('admin', 'accueil') ?></p>

        <?= img('images/petanque.jpg') ?>

    </body>
</html>
