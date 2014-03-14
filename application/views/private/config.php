<html>
<head>
<title>Configuration du tournoi</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
</head>
<body>

<h1>Configuration du tournoi</h1>

<?php foreach ($config as $row):?>
  <p><b>Nom : </b><?php echo $row->c_nom;?></p>
  <p><b>Année : </b><?php echo $row->c_annee;?></p>
  <p><b>État : </b><?php echo $row->c_etat;?></p>
  <p><b>Numéro du tour : </b><?php echo $row->c_tour;?></p>
  <p><b>Nombre équipes dans le tour : </b><?php echo $row->c_ieme;?></p>
<?php endforeach; ?>

<p>Retour à la page d'<?php echo anchor('admin', 'accueil') ?></p>

<?=img('images/petanque.jpg')?>

</body>
</html>
