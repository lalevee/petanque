<html>
    <head>
        <title>Tirage des équipes et du tableau</title>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" href="/css/style_adm.css" />
    </head>
    <body>

        <h1>Les <?php echo $count; ?> joueurs à placer</h1>

        <table border="1" cellpadding="10">
            <?php $nbparlig = 0; ?>
            <?php foreach ($query as $row): ?>
                <?php if ($nbparlig == 0)
                    echo '<tr>';
                ?>
                <td align="center"><font size="+2"><b>
                <?php echo $row->J_id . ': ' . $row->J_prenom . ' ' . $row->J_nom; ?>
                    </b></font></font></td>
                <?php
                $nbparlig = $nbparlig + 1;
                if ($nbparlig == 4) {
                    $nbparlig = 0;
                    echo '</tr>';
                }
                ?>
            <?php endforeach; ?>
        </table>
        <h1>Les numéros d'équipe pour le tirage</h1>

        <table border="1" cellpadding="10">
            <tr>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
            </tr>
            <tr>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
            </tr>
            <tr>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
            </tr>
            <tr>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
                <td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E 16&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
            </tr>
        </table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <h1>Les rangs des équipes pour le tableau</h1>
    <br>
    <table border="1" cellpadding="10" >
      <tr><td align="center"><font size="+2"><b>Rang</b></td><td
      align="center"><font
      size="+2"><b>Équipe</b></td></tr>
      <?php for ($i=1; $i<17; $i++) {
         echo '<tr>';
         echo '<td align="center"><font size="+2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $i .  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>';
	 echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>';
	 echo '</tr>';
    }  ?>
    </table>
    </body>
</html>
