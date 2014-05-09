<html>
    <head>
        <title>Inscription d'une équipe</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
    </head>
    <body>

        <h1>Inscription d'une équipe</h1>

        <?php echo form_open('private/admin/valider_inscription'); ?>

        Nom<br />
        <input type="text" name="nom" value="<?php echo set_value('nom', '-'); ?>" />
        <?php echo form_error('nom'); ?><br />

        Joueur 1<br />
        <input type="text" name="user1" value="<?php echo set_value('user1'); ?>" />
        <?php echo form_error('user1'); ?><br />

        Joueur 2<br />
        <input type="text" name="user2" value="<?php echo set_value('user2'); ?>" /> 
        <?php echo form_error('user2'); ?><br />

        Joueur 3<br />
        <input type="text" name="user3" value="<?php echo set_value('user3', '0'); ?>" /> 
        <?php echo form_error('user3'); ?><br />

        Joueur 4<br />
        <input type="text" name="user4" value="<?php echo set_value('user4', '0'); ?>" /> 
        <?php echo form_error('user4'); ?><br />

        <input type="submit" name="inscription" value="Inscrire" />
    </form>

    <?= img('images/petanque.jpg') ?>

</body>
</html>
