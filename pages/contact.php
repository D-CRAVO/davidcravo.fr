<?php
    include 'components/includes.php';
?>
<!DOCTYPE html>
<html lang="fr-fr">

    <?php 
        $title = 'David CRAVO';
        require '../components/head.php';
    ?>

    <body>
        <?php require '../components/header.php'?>

        <main class="contactMain">
            <div>
                <?php if(array_key_exists('errors', $_SESSION)): ?>
                    <div>
                        <?= implode('<br>', $_SESSION['errors']); ?>
                    </div>
                <?php endif; ?>
                <?php if(array_key_exists('success', $_SESSION)): ?>
                    <div>
                        Votre message a bien été envoyé.
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>

                <form action="../components/postContact.php" method="POST">
                    <label for="firstname">Prénom *</label>
                    <input type="text" id="firstname" name="firstname" value="<?= isset($_SESSION['inputs']['firstname']) ? $_SESSION['inputs']['firstname'] : '';?>">
                    <label for="lastname">Nom *</label>
                    <input type="text" id="lastname" name="lastname" value="<?= isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname'] : '';?>">
                    <label for="role">Fonction *</label>
                    <input type="text" name="role" id="role" value="<?= isset($_SESSION['inputs']['role']) ? $_SESSION['inputs']['role'] : '';?>">
                    <label for="company">Entreprise *</label>
                    <input type="text" name="company" id="company" value="<?= isset($_SESSION['inputs']['company']) ? $_SESSION['inputs']['company'] : '';?>">
                    <label for="email">Email *</label>
                    <input type="email" name="email" id="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';?>">
                    <label for="message">Message *</label>
                    <textarea name="message" id="message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>
                    <button type="submit">Envoyer</button>
                </form>
                <h2>Debug :</h2>
                <?= var_dump($_SESSION); ?>
            </div>
            <aside class="contactAside">
                <a href="https://www.linkedin.com/in/davidcravo" target="_blank"><img src="/src/img/contact/linkedIn.png" alt="linkedIn"></a>
                <a href="https://www.facebook.com/david.cravo.37" target="_blank"><img src="/src/img/contact/facebook.png" alt="facebook"></a>
            </aside>
            
        </main>
        
    </body>
</html>

<?php 
unset($_SESSION['errors']); 
unset($_SESSION['inputs']);
unset($_SESSION['success'])
?>