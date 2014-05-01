<div class="content">
    <h1>Liste des équipes</h1>
    <br>
    <p>Il y a <?php echo $count; ?> équipes inscrites actuellement au tournoi.</p>
    <?php if ($count > 0): ?>
        <ul>
            <?php foreach ($equipes as $row): ?>
                <li>
                    <?php if ($row->E_active == 0): ?>
                        <?php echo '<font color="red">'; ?>
                    <?php endif; ?>
                    <?php if ($row->E_nom != NULL): ?>
                        <?php echo '<b>' . $row->E_nom . '</b> (équipe ' . $row->E_id . ')'; ?>
                    <?php else: ?>
                        <?php echo '<b>Équipe ' . $row->E_id . '</b>'; ?>
                    <?php endif; ?>
                    <?php if ($row->E_active == 0): ?>
                        <?php echo '</font>'; ?>
                    <?php endif; ?>
                    <?php echo ' : '; ?>
                    <?php if ($row->J3_prenom != NULL): ?>
                        <?php if ($row->J4_prenom != NULL): ?>
                            <?php echo $row->J1_prenom . ' ' . $row->J1_nom . ', ' . $row->J2_prenom . ' ' . $row->J2_nom . ', ' . $row->J3_prenom . ' ' . $row->J3_nom . ', ' . $row->J4_prenom . ' ' . $row->J4_nom; ?>
                        <?php else: ?>
                            <?php echo $row->J1_prenom . ' ' . $row->J1_nom . ', ' . $row->J2_prenom . ' ' . $row->J2_nom . ', ' . $row->J3_prenom . ' ' . $row->J3_nom; ?>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo $row->J1_prenom . ' ' . $row->J1_nom . ', ' . $row->J2_prenom . ' ' . $row->J2_nom; ?>
                    <?php endif; ?>
                    <?php if ($row->E_consol == 1): ?>
                        <?php echo ' <font color="orange">(consolante)</font>'; ?>
                    <?php endif; ?>
                    <?php if ($row->E_active == 0): ?>
                        <?php echo ' <font color="red">(éliminée)</font>'; ?>
                    <?php endif; ?>
                </li><br>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</div>

