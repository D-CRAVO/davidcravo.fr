<?php

session_start();

require '../class/Form.php';
require '../class/Validator.php';
require '../enums/emailSubjects.php';
require '../enums/inputValues.php';
require_once '../captcha/autoload.php';