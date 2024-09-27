<?php
    include '../components/includes.php';
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
                <?php endif; ?>

                <form action="../components/postContact.php" method="POST">
                    <?php
                        //var_dump($_SESSION);
                        $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []);
                        $inputValues = [
                            'firstname'=>'Prénom',
                            'lastname'=>'Nom',
                            'role'=>'Fonction',
                            'company'=>'Entreprise'
                        ];
                        foreach($inputValues as $k => $v){
                            echo $form->inputText($k, $v);
                        }
                    ?>
                    <?= $form->inputEmail('email', 'Email'); ?>
                    <?= $form->select('object', 'Objet', ['Stage', 'Alternance', 'Emploi', 'Autre']); ?>
                    <?= $form->textarea('message', 'Message'); ?>
                    <button type="submit">Envoyer</button>
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
// unset($_SESSION['inputs']);
unset($_SESSION['success'])
?>