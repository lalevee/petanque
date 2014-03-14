<html>
<head>
<title>Inscription équipe réussie</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="css/style_adm.css" />
</head>
<body>

<h1>Inscription équipe effectuée !</h1>
<ul>
  <li><?php echo 'Nombre   : '.$e_nombre; ?></li>
  <li><?php echo 'Joueur 1 : '.$e_j1; ?></li>
  <li><?php echo 'Joueur 2 : '.$e_j2; ?></li>
  <li><?php echo 'Joueur 3 : '.$e_j3; ?></li>
</ul>

<p>Retour à la page d'<?php echo anchor('admin', 'accueil') ?></p>

<?=img('images/petanque.jpg')?>

</body>
</html>
