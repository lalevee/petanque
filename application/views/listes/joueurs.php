<div class="content">
    <h1>Liste des joueurs inscrits</h1>
    <br>
    <p>Il y a <?php echo $count; ?> joueurs inscrits actuellement au tournoi.</p>
    <?php if ($count > 0): ?>
        <p>Cliquez sur les noms pour l'envoi d'un message.</p>
        <br>
        <table width="80%">
            <thead>
                <tr align="center">
                    <th width="20px"><b>No</b></th>
                    <th><b>Prénom</b></th>
                    <th width="30px"><b>Nom</b></th>
                    <th width="20px"><b>Service</b></th>
                    <th width="20px"><b>Téléphone</b></th>
                    <th width="20px"><b>Bureau</b></th>
                    <th width="20px"><b>Équipe</b></th>
                    <th><b>Paiement</b></th>
                <tr>
            </thead>
            <tbody>
                <?php foreach ($query as $row): ?>
                    <tr>
                        <?php
                        echo '<td>' . $row->J_id . '</td>';
                        echo '<td>' . $row->J_prenom . '</td>';
                        echo '<td><a href="mailto:' . $row->J_mail . '"><b>' . $row->J_nom . '</b></a></td>';
                        echo '<td align=center>' . $row->J_service . '</td>';
                        if ($row->J_tel > 0)
                            echo '<td align=center>' . $row->J_tel . '</td>';
                        else
                            echo '<td align="center">-</td>';
                        echo '<td>' . $row->J_bureau . '</td>';
                        if ($row->J_equipe > 0)
                            echo '<td>' . $row->J_equipe . '</td>';
                        else if ($row->J_equipe == 0)
                            echo '<td>(Draw)</td>';
			else
			    echo '<td>(Form)</td>';
                        if ($row->J_asmin > 0)
                            echo '<td>OUI</td>';
                        else
                            echo '<td>NON</td>';
                        ?>
                    </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
<?php endif; ?>
    <div>
