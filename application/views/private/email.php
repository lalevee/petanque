<html>
<head>
<title>ADMIN: Envoi mail aux joueurs</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="/styles/style_adm.css" />
</head>
<body>

<?php if ($en_rencontre):?>
<h1>Envoi d'un mail aux joueurs ayant un match à jouer</h1>
<?php else:?>
<h1>Envoi d'un mail à tous les joueurs</h1>
<?php endif;?>

<form method="POST">
Sujet<br />
<input type="text" name="sujet" value="<?php echo set_value('sujet'); ?>" />
<?php echo form_error('sujet'); ?><br />

Message<br />
<textarea rows="17" cols="70" name="message"><?php echo set_value('message'); ?></textarea>
<?php echo form_error('message'); ?><br />

<input type="submit" name="contact" value="Envoi Email" />
</form>

<?=img('images/petanque.jpg')?>

</body>
</html>
