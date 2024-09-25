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
                <form action="" method="post">
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname">
                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname">
                    <label for="role">Fonction</label>
                    <input type="text" name="role" id="role">
                    <label for="company">Entreprise</label>
                    <input type="text" name="company" id="company">
                    <label for="email">Email *</label>
                    <input type="email" name="email" id="email" required>
                    <label for="message">Message *</label>
                    <textarea name="message" id="message" required></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
            <aside class="contactAside">
                <a href="https://www.linkedin.com/in/davidcravo" target="_blank"><img src="/src/img/contact/linkedIn.png" alt="linkedIn"></a>
                <a href="https://www.facebook.com/david.cravo.37" target="_blank"><img src="/src/img/contact/facebook.png" alt="facebook"></a>
            </aside>
            
        </main>
        
        
    

    </body>
</html>