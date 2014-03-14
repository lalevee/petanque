<html>
<head>
<title>Début phase inscription effectué</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="css/style_adm.css" />
</head>
<body>

<?php if ($ok == 'ok'):?>
<h1>Début phase inscription effectué !</h1>
<?php else:?>
<h1>ERREUR : Début phase inscription non effectué</h1>
<?php endif;?>

<p>Retour à la page d'<?php echo anchor('admin', 'accueil') ?></p>

<?=img('images/petanque.jpg')?>

</body>
</html>
