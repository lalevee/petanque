<div class="content">
<h1>Les matchs joués</h1>

<h2>Le tournoi</h2>

<?php if (count($rencontre) > 0): ?>
<ul>
<?php $prev = 0; ?>
<?php foreach ($rencontre as $row):?>
  <?php $tour = $row['tour']; ?>
  <?php if ($prev != $tour):?>
    <?php echo '</ul><h3>'.$tour.'e tour ('.$row['display'].')</h3><ul>';?>
    <?php $prev = $tour;?>
  <?php endif;?>
<li>
  <?php echo "<b>L'équipe ".$row['equipe1'];?>
  <?php if ($row['nom1'] != NULL):?>
    <?php echo '"'.$row['nom1'].'"';?>
  <?php endif;?>
  <?php echo '</b> ( ';?>
  <?php foreach ($row['joueurs1'] as $j):?>
    <?php echo $j->J_prenom; ?>
  <?php endforeach;?>
  <?php echo " ) a battu <b>l'équipe ".$row['equipe2'];?>
  <?php if ($row['nom2'] != NULL):?>
    <?php echo '"'.$row['nom2'].'"';?>
  <?php endif;?>
  <?php echo '</b> ( ';?>
  <?php foreach ($row['joueurs2'] as $j):?>
    <?php echo $j->J_prenom; ?>
  <?php endforeach;?>
  <?php echo ') : <b><font color="blue">'.$row['score1'].' -
  '.$row['score2'].'</font></b>'; ?>
  <?php if ($row['score2'] == 0):?>
    <?php echo ', <b><font color="red">FANNY !</font></b>';?>
  <?php endif;?>
  </li><br>
<?php endforeach;?>
</ul>

<?php else: ?>
<br>
<p>Aucun match n'a encore été joué.</p>
<?php endif; ?>

<h2>La consolante</h2>

<?php if (count($consol) > 0): ?>
<ul>
<?php $prev = 0; ?>
<?php foreach ($consol as $row):?>
  <?php $tour = $row['tour']; ?>
  <?php if ($prev != $tour):?>
    <?php $tmp = $tour - 1;?>
    <?php echo '</ul><h3>'.$tmp.'e tour ('.$row['display'].')</h3><ul>';?>
    <?php $prev = $tour;?>
  <?php endif;?>
<li>
  <?php echo "<b>L'équipe ".$row['equipe1'];?>
  <?php if ($row['nom1'] != NULL):?>
    <?php echo '"'.$row['nom1'].'"';?>
  <?php endif;?>
  <?php echo '</b> ( ';?>
  <?php foreach ($row['joueurs1'] as $j):?>
    <?php echo $j->J_prenom; ?>
  <?php endforeach;?>
  <?php echo " ) a battu <b> l'équipe ".$row['equipe2'];?>
  <?php if ($row['nom2'] != NULL):?>
    <?php echo '"'.$row['nom2'].'"';?>
  <?php endif;?>
  <?php echo '</b> ( ';?>
  <?php foreach ($row['joueurs2'] as $j):?>
    <?php echo $j->J_prenom; ?>
  <?php endforeach;?>
  <?php echo ') : <b><font color="blue">'.$row['score1'].' -
  '.$row['score2'].'</font></b>'; ?>
  <?php if ($row['score2'] == 0):?>
    <?php echo ',<b><font color="red"> FANNY !</font></b>';?>
  <?php endif;?>
  </li><br>
<?php endforeach;?>
</ul>

<?php else: ?>
<br>
<p>Aucun match n'a encore été joué.</p>
<?php endif; ?>

</div>

