<?php
    include '../components/includes.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="fr-fr">

    <?php 
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
                <?php endif; ?>

                <form action="../components/postContact.php" method="POST">
                    <?php
                        $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []);
                        $inputValues = inputValue::getInputKeysValues();
                        foreach($inputValues as $k => $v){
                            echo $form->inputText($k, $v);
                        }
                    ?>
                    <?= $form->inputEmail('email', 'Email'); ?>
                    <?= $form->select('subject', 'Objet', Subject::getSubjects()); ?>
                    <?= $form->textarea('message', 'Message'); ?>
                    <div class="g-recaptcha" data-sitekey="6LdxWlMqAAAAANKbXKdFkH27nX0ykShBuYhID0Uh"></div>
                    <button type="submit" name="submit">Envoyer</button>
                </form>
            </div>
            <!-- <aside class="contactAside"> -->
                <!-- <a href="https://www.linkedin.com/in/davidcravo" target="_blank"><img src="/src/img/contact/linkedIn.png" alt="linkedIn"></a> -->
                <!-- <a href="https://www.facebook.com/david.cravo.37" target="_blank"><img src="/src/img/contact/facebook.png" alt="facebook"></a> -->
            <!-- </aside> -->
            
        </main>
        
    </body>
</html>

<?php 
unset($_SESSION['errors']); 
unset($_SESSION['inputs']);
unset($_SESSION['success']);
?>