<html>
<head>
<title>Score d'un match</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="/styles/style_adm.css" />
</head>
<body>

<h1>Score d'un match</h1>

<?php echo form_open('private/admin/valider_score'); ?>

<?php if ($erreur != NULL):?>
  <?php echo '<p><font color="red">'.$erreur.'</font></p>';?>
<?php endif;?>

Equipe A<br />
<input type="text" name="equ1" value="<?php echo set_value('equ1'); ?>" />
<?php echo form_error('equ1'); ?><br />

Score A<br />
<input type="text" name="scor1" value="<?php echo set_value('scor1'); ?>" />
<?php echo form_error('scor1'); ?><br />

Equipe B<br />
<input type="text" name="equ2" value="<?php echo set_value('equ2'); ?>" /> 
<?php echo form_error('equ2'); ?><br />

Score B<br />
<input type="text" name="scor2" value="<?php echo set_value('scor2'); ?>" />
<?php echo form_error('scor2'); ?><br />

<input type="submit" name="score" value="Valider match" />
</form>

<?=img('images/petanque.jpg')?>

</body>
</html>
