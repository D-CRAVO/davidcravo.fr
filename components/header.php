<?php require '../functions/navigation.php' ?>

<header>
    <div class="gradient">
        <a href="../pages/home.php">
            <img src="../src/img/logoCravoDavid.png" alt="Logo de David CRAVO">
        </a>
        <nav >
            <ul>
                <?= nav_item('/pages/home.php', 'Acceuil') ?>
                <?= nav_item('/pages/profile.php', 'Profil') ?>
                <?= nav_item('/pages/experience.php', 'Expérience') ?>
                <?= nav_item('/pages/education.php', 'Formations') ?>
                <?= nav_item('/pages/skills.php', 'Compétences') ?>
                <?= nav_item('/pages/interests.php', 'Loisirs') ?>
                <?= nav_item('/pages/achievements.php', 'Réalisations') ?>
                <?= nav_item('/pages/contact.php', 'Contact') ?>
            </ul>
        </nav>
    </div>
</header>            