<div class="content">
    <h1>Les matchs à jouer</h1>

    <br>
    <p>Le tournoi est terminé.</p>
    <?php if (1 == 2): ?>
        <p>Ces matchs doivent avoir lieu <b>avant le <?php echo $date_tour; ?></b> !</p>

        <h2>Matchs du tournoi</h2>

        <?php if (count($rencontre) > 0): ?>
            <ul>
                <?php foreach ($rencontre as $row): ?>
                    <li>
                        <?php echo '<b>'; ?>
                        <?php if ($row['tour'] == 4): ?>
                            <?php echo '[FINALE]'; ?>
                        <?php else: ?>
                            <?php if ($row['tour'] == 3): ?>
                                <?php echo '[DEMI-FINALE]'; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($row['nom1'] != NULL): ?>
                            <?php echo $row['nom1']; ?>
                        <?php else: ?>
                            <?php echo "L'équipe " . $row['equipe1']; ?>
                        <?php endif; ?>
                        <?php echo '</b> ( '; ?>
                        <?php foreach ($row['joueurs1'] as $j): ?>
                            <?php echo $j->J_prenom; ?>
                        <?php endforeach; ?>
                        <?php echo ' ) contre <b>'; ?>
                        <?php if ($row['nom2'] != NULL): ?>
                            <?php echo $row['nom2']; ?>
                        <?php else: ?>
                            <?php echo "l'équipe " . $row['equipe2']; ?>
                        <?php endif; ?>
                        <?php echo '</b> ( '; ?>
                        <?php foreach ($row['joueurs2'] as $j): ?>
                            <?php echo $j->J_prenom; ?>
                        <?php endforeach; ?>
                        )</li><br>
                <?php endforeach; ?>
            </ul>

        <?php else: ?>
            <p>Aucun match de prévu.</p>
        <?php endif; ?>

        <h2>Matchs de la consolante</h2>

        <?php if (count($consol) > 0): ?>
            <ul>
                <?php foreach ($consol as $row): ?>
                    <li>
                        <?php echo '<b>'; ?>
                        <?php if ($row['tour'] == 4): ?>
                            <?php echo '[FINALE]'; ?>
                        <?php else: ?>
                            <?php if ($row['tour'] == 3): ?>
                                <?php echo '[DEMI-FINALE]'; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($row['nom1'] != NULL): ?>
                            <?php echo $row['nom1']; ?>
                        <?php else: ?>
                            <?php echo "L'équipe " . $row['equipe1']; ?>
                        <?php endif; ?>
                        <?php echo '</b> ( '; ?>
                        <?php foreach ($row['joueurs1'] as $j): ?>
                            <?php echo $j->J_prenom; ?>
                        <?php endforeach; ?>
                        <?php echo ' ) contre <b>'; ?>
                        <?php if ($row['nom2'] != NULL): ?>
                            <?php echo $row['nom2']; ?>
                        <?php else: ?>
                            <?php echo "l'équipe " . $row['equipe2']; ?>
                        <?php endif; ?>
                        <?php echo '</b> ( '; ?>
                        <?php foreach ($row['joueurs2'] as $j): ?>
                            <?php echo $j->J_prenom; ?>
                        <?php endforeach; ?>
                        )</li><br>
                <?php endforeach; ?>
            </ul>

        <?php else: ?>
            <p>Aucun match de prévu.</p>
        <?php endif; ?>
    <?php endif; ?>

</div>

