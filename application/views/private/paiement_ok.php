<html>
<head>
<title>Paiement joueur réussi</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="css/style_adm.css" />
</head>
<body>

<h1>Paiement joueur effectué !</h1>
<p><?php echo $J_prenom.' '.$J_nom.' a payé !'; ?></p>

<p>Retour à la page d'<?php echo anchor('admin', 'accueil') ?></p>

<?=img('images/petanque.jpg')?>

</body>
</html>
