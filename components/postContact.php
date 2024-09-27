<?php

$errors = [];
// $fields = ['firstname' , 'lastname', 'role', 'company', 'email', 'message'];
// foreach($fields as $field){
//     if(!array_key_exists($field, $_POST) || $_POST[$field] == ''){
//         $errors[$field] = "Vous n'avez pas renseigné le champs $field";
//     }
// }

if(!array_key_exists('firstname', $_POST) || $_POST['firstname'] == ''){
    $errors['firstname'] = "Vous n'avez pas renseigné votre prénom";
}
if(!array_key_exists('lastname', $_POST) || $_POST['lastname'] == ''){
    $errors['lastname'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('role', $_POST) || $_POST['role'] == ''){
    $errors['role'] = "Vous n'avez pas renseigné votre fonction";
}
if(!array_key_exists('company', $_POST) || $_POST['company'] == ''){
    $errors['company'] = "Vous n'avez pas renseigné votre entreprise";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Vous n'avez pas renseigné un email valide";
    }
    $errors['email'] = "Vous n'avez pas renseigné votre email";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: ../pages/contact.php');
}else{
    $_SESSION['success'] = 1;
    $to = 'contact@davidcravo.fr';
    $subject = 'Proposition de ' . $POST['subject'];
    $message = 'Message envoyé par ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '\nContenu : \n' . $_POST['message'];
    $headers = "FROM: " . $_POST['email'];
    mail($to, $subject, $message, $headers);
    header('Location: ../pages/contact.php');
}




