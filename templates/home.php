<?php
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'head.php';
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'header.php';
?>

<main class="home_main">
    <h1 class="gradient_title">Bonjour !</h1>
    <article class="home_article">
        <img class="home_image" src="../assets/images/home/photoProfilCroppedResized500.jpg" alt="Photo de profil">
        <div class="home_documents">
            <a class="document" href="/assets/pdf/CRAVO_David_CV_2024_Version_2.9.pdf" target="_blank">Mon Curriculum Vitae</a><br>
            <a class="document" href="/assets/pdf/Plan_de_formation_MS2D.pdf" target="_blank">Plan de formation Manager de Solutions Digitales et Data</a><br>
            <a class="document" href="/assets/pdf/Calendrier_MS2D.pdf" target="_blank">Calendrier de formation Manager de Solutions Digitales et Data</a><br>
        </div>
    </article>
</main>

<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'footer.php'; ?>