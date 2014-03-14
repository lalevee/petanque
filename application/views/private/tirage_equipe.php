<html>
<head>
<title>Tirage des équipes et du tableau</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
</head>
<body>

<h1>Affichage des <?php echo $count; ?> joueurs</h1>

<table border="1" cellpadding="10">
<?php $nbparlig = 0; ?>
<?php foreach ($query as $row):?>
  <?php if ($nbparlig == 0)
          echo '<tr>'; ?>
  <td align="center"><font size="+2"><b>
    <?php echo $row->J_prenom.' '.$row->J_nom; ?>
  </b></font></font></td>
  <?php $nbparlig = $nbparlig + 1;
        if ($nbparlig == 4) {
          $nbparlig = 0;
          echo '</tr>';
        } ?>
<?php endforeach; ?>
</table>
<h1>Affichage des numéros d'équipe</h1>

<table border="1" cellpadding="10">
<tr>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
</tr>
<tr>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
</tr>
<tr>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
</tr>
<tr>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
</tr>
</table>

</body>
</html>
