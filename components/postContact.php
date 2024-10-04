<?php

require '../components/includes.php';

$errors = [];
$validator = new validator($_POST);
$validator->check('firstname', 'required');
$validator->check('firstname', 'regex');

$validator->check('lastname', 'required');
$validator->check('lastname', 'regex');

$validator->check('role', 'required');
$validator->check('role', 'regex');

$validator->check('company', 'required');
$validator->check('company', 'regex');

$validator->check('email', 'email');
$validator->check('subject', 'in', array_keys(Subject::getSubjects()));
$validator->check('message', 'required');
$validator->check('message', 'regex');
$validator->check('captcha', 'checked');
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
    $subject = Subject::from($_POST['subject'])->label();
    $message = 'PRENOM : ' .    htmlspecialchars(trim($_POST['firstname']), ENT_QUOTES, 'UTF-8') . ', '
        . 'NOM : ' .            htmlspecialchars(trim($_POST['lastname']), ENT_QUOTES, 'UTF-8') . ', '
        . "FONCTION : " .       htmlspecialchars(trim($_POST['role']), ENT_QUOTES, 'UTF-8') . ', '
        . "ENTREPRISE : " .     htmlspecialchars(trim($_POST['company']), ENT_QUOTES, 'UTF-8') . ', '
        . "CONTENU : " .        htmlspecialchars(trim($_POST['message']));
    $headers = "FROM: " .       htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
    mail($to, $subject, $message, $headers);
    
    
    header('Location: ../pages/contact.php');
}




