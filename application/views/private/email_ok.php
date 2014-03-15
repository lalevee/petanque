<html>
    <head>
        <title>Mails effectués</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
    </head>
    <body>

        <h1><font color="red">Mails effectués !</font></h1>

        <h2>Message</h2>

        <?php echo $msg; ?>

        <h2>Informations de Debug</h2>

        <?php echo $deb; ?>

        <h2>Liste des adresses mails</h2>

        <ul>
            <?php foreach ($mel as $row): ?>
                <li>
                    <?php echo $row; ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <p>Retour à la page d'<?php echo anchor('admin', 'accueil') ?></p>

        <?= img('images/petanque.jpg') ?>

    </body>
</html>
