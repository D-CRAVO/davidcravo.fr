<?php

require '../components/includes.php';

$errors = [];
$subjects = ['Stage', 'Alternance', 'Emploi', 'Autre'];

$validator = new validator($_POST);
$validator->check('firstname', 'required');
$validator->check('lastname', 'required');
$validator->check('role', 'required');
$validator->check('company', 'required');
$validator->check('email', 'email');
$validator->check('subject', 'in', array_keys($subjects));
$validator->check('message', 'required');
$errors = $validator->errors();

// if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == ''){
//     $errors['firstname'] = "Vous n'avez pas renseigné votre prénom";
// }
// if(!array_key_exists('lastname', $_POST) || $_POST['lastname'] == ''){
//     $errors['lastname'] = "Vous n'avez pas renseigné votre nom";
// }
// if(!array_key_exists('role', $_POST) || $_POST['role'] == ''){
//     $errors['role'] = "Vous n'avez pas renseigné votre fonction";
// }
// if(!array_key_exists('company', $_POST) || $_POST['company'] == ''){
//     $errors['company'] = "Vous n'avez pas renseigné votre entreprise";
// }
// if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//     if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//         $errors['email'] = "Vous n'avez pas renseigné un email valide";
//     }
//     $errors['email'] = "Vous n'avez pas renseigné votre email";
// }
// if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
//     $errors['message'] = "Vous n'avez pas renseigné votre message";
// }

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: ../pages/contact.php');
}else{
    $_SESSION['success'] = 1;
    $to = 'contact@davidcravo.fr';
    $subject = subject($_POST['subject']);
    $message = 'PRENOM : ' . $_POST['firstname'] . ', '
        . 'NOM : ' . $_POST['lastname'] . ', '
        . "FONCTION : " . $_POST['role'] . ', '
        . "ENTREPRISE : " . $_POST['company'] . ', '
        . "CONTENU : " . $_POST['message'];
    $headers = "FROM: " . $_POST['email'];
    mail($to, $subject, $message, $headers);
    header('Location: ../pages/contact.php');
}




