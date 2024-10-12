<?php 
    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'init.php';

    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'head.php';
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'header.php';
?>

<main class="skills_main">
    <article class="skills_article">
        <?php foreach(SKILLS_TITLES as $k => $skill_title): ?>
            <h1><?= $skill_title ?></h1>
            <?= skills_html($k) ?>
        <?php endforeach ?>
    </article>
</main>       

<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'footer.php'; ?>