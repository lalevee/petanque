<html>
<head>
<title>Début phase tournoi effectué</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="/styles/style_adm.css" />
</head>
<body>

<?php if ($ok == 'ok'):?>
<h1>Début phase tournoi effectué !</h1>
<?php else:?>
<h1>ERREUR : Début phase tournoi non effectué</h1>
<?php endif;?>

<p>Retour à la page d'<?php echo anchor('admin', 'accueil') ?></p>

<?=img('images/petanque.jpg')?>

</body>
</html>
