<div class="content">
    <h1><?php echo $tournoi ?> <?php echo $annee ?> (à PES TANCA)<br>
        sur le <?php echo $lieu ?> !</h1>
    <br>
    <p>Ce tournoi organisé par <?php echo $association ?> est l'occasion pour
        tous les permanents du <?php echo $lieu ?> de participer à une activité
        sportive conviviale permettant de mieux se connaître. La pétanque,
        née à La&nbsp;Ciotat, se prête bien à cela !</p>

    <?php if ($etat == 'ZZZ'): ?>
        <h2>Zzzzzz....</h2>
        <p>Le site est en sommeil, juqu'à l'année prochaine...</p>

    <?php elseif ($etat == 'INI'): ?>
        <h2>Préparatifs</h2>
        <p>Le site s'installe tout doucement...</p>

    <?php elseif ($etat == 'INS'): ?>
        <h2>Inscription</h2>
        <p>La phase d'inscription est démarrée.</p>

	<p>Début du tournoi début mai.</p>

    <?php else: ?>
        <h2>Message de lancement</h2>

    <?php endif; ?>

</div>
