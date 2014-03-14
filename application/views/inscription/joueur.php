<div class="content">
<h1>Inscription au tournoi</h1>

<?php if ($closed):?>
<br />
  <?php if ($etat == 'EXP'):?>
<p>Les inscriptions sont closes. </p>

<p>Contactez <a href="mailto:lalevee@emse.fr">Philippe Lalevée</a>, si vous voulez vous
inscrire.</p>

  <?php else:?>
<p>Le site n'est pas actif. Veuillez essayer ultérieurement.</p>

  <?php endif;?>

<?php else:?>

<?php echo form_open('tournoi/valider_inscription'); ?>
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
  <option value="CMP"   <?echo set_select('service', 'CMP',   TRUE) ?> >CMP</option>
  <option value="DRI"  <?echo set_select('service', 'DID') ?> >DRI</option>
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

<input type="submit" name="inscription" value="S'inscrire" />
</form>

<?php endif;?>
</div>
