<?php

session_start();

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'get_csv_files.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'display.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'functions_skills.php';

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR .'Form.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR .'Regex.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR .'Validator.php';

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'enums' . DIRECTORY_SEPARATOR . 'email_subjects.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'enums' . DIRECTORY_SEPARATOR . 'input_values.php';

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'constants.php';

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'captcha' . DIRECTORY_SEPARATOR . 'autoload.php';