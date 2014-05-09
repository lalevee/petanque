<html>
    <head>
        <title>Saisie du tableau</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
    </head>
    <body>

        <h1>Saisie du tableau</h1>

        <?php echo form_open('private/admin/valider_tableau'); ?>
        <br />
        Prénom<br />
        <input type="text" name="prenom" value="<?php echo set_value('prenom'); ?>" />
        <?php echo form_error('prenom'); ?><br /><br />

        Nom<br />
        <input type="text" name="nom" value="<?php echo set_value('nom'); ?>" />
        <?php echo form_error('nom'); ?><br /><br />

        Adresse mail<br />
        <input type="text" name="mail"
               value="<?php echo set_value('mail', '@emse.fr'); ?>" />
        <?php echo form_error('mail'); ?><br /><br />

        Téléphone (5 chiffres, laisser 0 si néant)<br />
        <input type="text" name="tel" value="<?php echo set_value('tel', '0'); ?>" />
        <?php echo form_error('tel'); ?><br /><br />

        Service<br />
        <select name="service">
            <option value="BEL"   <?echo set_select('service', 'BEL') ?> >BEL</option>
            <option value="CMP"   <?echo set_select('service', 'CMP', TRUE) ?> >CMP</option>
            <option value="DRI"   <?echo set_select('service', 'DID') ?> >DRI</option>
            <option value="DFG"   <?echo set_select('service', 'DFG') ?> >DFG</option>
            <option value="DSI"   <?echo set_select('service', 'DSI') ?> >DSI</option>
            <option value="EPRD"  <?echo set_select('service', 'EPRD') ?> >EPRD </option>
            <option value="INFRA" <?echo set_select('service', 'INFRA') ?> >INFRA</option>
            <option value="MPACK" <?echo set_select('service', 'MPACK') ?> >MicroPackS</option>
            <option value="PS2"   <?echo set_select('service', 'PS2') ?> >PS2</option>
            <option value="SAS"   <?echo set_select('service', 'SAS') ?> >SAS</option>
            <option value="SFL"   <?echo set_select('service', 'SFL') ?> >SFL</option>
            <option value="AUTRE" <?echo set_select('service', 'AUTRE') ?> >Autre</option>
        </select><br /><br />

        Bureau<br />
        <input type="text" name="bureau" value="<?php echo set_value('bureau'); ?>" />
        <?php echo form_error('bureau'); ?><br /><br />

	Constitution d'équipe : choisissez une des options suivantes<br />
	<input type="radio" name="equipe" value="equipe" />
            Je constitue mon équipe<br />
	<input type="radio" name="equipe" value="tirage" checked />
            Je souhaite	être placé(e) dans une équipe par tirage au sort<br />

        <input type="submit" name="inscription" value="S'inscrire" />
    </form>
    </body>
</html>
