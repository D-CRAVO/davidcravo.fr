<?php

function subject(int $value){
    $subject = '';
    switch($value){
        case 0 :
            $subject = 'Proposition de stage';
            break;
        case 1 :
            $subject = "Proposition d'alternance";
            break;
        case 2 :
            $subject = "Proposition d'emploi";
            break;
        case 3 :
            $subject = "Autre";
            break;
    }
    return $subject;
}