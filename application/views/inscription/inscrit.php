<div class="content">
    <h1>Votre inscription est effectuée !</h1>
    <br>
    <p><?php echo $J_prenom . ' <b>' . $J_nom . '</b>'; ?>, Votre inscription a bien
        été enregistrée :</p>
    <p><?php if ($J_equipe == 'tirage'): ?>
    	Votre équipe sera tirée au sort. L'organisateur enverra un message pour
        vous informer de la date et du lieu.
	<?php else: ?>
	Vous constituez votre équipe. Vous devez envoyer un message à
        l'organisateur pour lui communiquer les membres de l'équipe et,
        éventuellement un nom.
	<?php endif; ?></p>

    <p>Si vous souhaitez modifier ces informations ultérieurement,
        contactez <a href="mailto:lalevee@emse.fr">Philippe Lalevée</a>.</p>
</div>
