<html>
    <head>
        <title>Initialisation de la configuration</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
    </head>
    <body>

        <h1>Initialisation de la configuration</h1>

        <?php echo form_open('private/admin/valider_initconfig'); ?>

        <?php if ($erreur != NULL): ?>
            <?php echo '<p><font color="red">' . $erreur . '</font></p>'; ?>
        <?php endif; ?>

        Joueur<br />
        <input type="text" name="joueur" value="<?php echo set_value('joueur'); ?>" />
        <?php echo form_error('joueur'); ?><br />

        <input type="submit" name="initconfig" value="Initialisation configuration" />
    </form>

    <?= img('images/petanque.jpg') ?>

</body>
</html>
