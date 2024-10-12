<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'navigation.php' ?>

<header>
    <div class="gradient">
        <a href="../templates/home.php">
            <img src="../assets/images/david_cravo_logo.jpeg" alt="Logo de David CRAVO">
        </a>
        <nav >
            <ul>
                <?= nav_item('/templates/home.php', 'Acceuil') ?>
                <?= nav_item('/templates/profile.php', 'Profil') ?>
                <?= nav_item('/templates/experience.php', 'Expérience') ?>
                <?= nav_item('/templates/education.php', 'Formations') ?>
                <?= nav_item('/templates/skills.php', 'Compétences') ?>
                <?= nav_item('/templates/achievements.php', 'Réalisations') ?>
                <?= nav_item('/templates/contact.php', 'Contact') ?>
            </ul>
        </nav>
    </div>
</header>            