<html>
<head>
<title>ADMIN: Tournoi 2012 de pétanque</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="/styles/style_adm.css" />
</head>
<body>

<h1>Administration du tournoi « Pierre Petit »</h1>

<h2>Fonctions d'administration</h2>
<ul>
  <li>Initialisation</li>
  <br>
  <ul>
    <li><?php echo anchor('private/admin/initialiser', 'initialiser configuration')?></li>
    <ul>
      <li>remise à zéro du numéro de tour</li>
      <li>passage de l'état à INI</li>
      <li>saisie des autres informations</li>
    </ul>
    <br>
    <li><?php echo anchor('private/admin/config', 'affichage configuration') ?></li>
    <br>
  </ul>
  <li>Phase d'inscription</li>
  <br>
  <ul>
    <li><?php echo anchor('private/admin/phase_inscription', 'début phase inscription')?></li>
    <ul>
      <li>passage de l'état à INS</li>
    </ul>
    <br>
    <li><?php echo anchor('private/admin/paiement', 'paiement joueur') ?></li>
    <br>
    <li><?php echo anchor('private/admin/inscription_equipe', 'inscription équipe') ?></li>
    <br>
    <li><?php echo anchor('private/admin/tirage_equipe', 'tirage équipe') ?></li>
    <br>
  </ul>
  <li>Gestion des tours</li>
  <br>
  <ul>
    <li><?php echo anchor('private/admin/phase_tournoi', 'début du tournoi')?></li>
    <ul>
      <li>passage de l'état à EXP</li>
      <li>génération des matchs du premier tour</li>
    </ul>
    <br>
    <li><?php echo anchor('private/admin/score', 'score match') ?></li>
    <br>
    <li><?php echo anchor('private/admin/tour', 'tour suivant') ?> </li>
    <ul>
      <li>incrémentation du numéro de tour</li>
      <li>génération des matchs suivants</li>
    </ul>
  </ul>
  <br>
  <li>envoi mail...</li>
  <br>
  <ul>
    <li><?php echo anchor('private/admin/mail_sgc', '... à SGC') ?></li>
    <br>
    <li><?php echo anchor('private/admin/mail_joueurs', '... à tous les joueurs') ?></li>
    <br>
    <li><?php echo anchor('private/admin/mail_apayer', '... aux joueurs qui doivent payer...') ?></li>
    <br>
    <li><?php echo anchor('private/admin/mail_joueurs/TRUE', '... aux joueurs qui ont un match à jouer') ?></li>
    <br>
    <li><?php echo anchor('private/admin/mail_equipe', '... aux joueurs d\'une équipe') ?></li>
    <br>
  </ul>
  <li>Autres fonctions</li>
  <br>
  <ul>
    <li><?php echo anchor('private/admin/testmail', 'test du mail') ?></li>
    <br>
    <li><a href="/phpmyadmin" target="_blank">phpmyadmin</a></li>
    <br>
    <li><a href="/user_guide/" target="_blank">codeigniter user guide</a></li>
  </ul>
</ul>

<h2><?php echo anchor('tournoi', 'retour au site') ?></h2>
<br>

<?=img('images/petanque.jpg')?>

</body>
</html>
