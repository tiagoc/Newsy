<?php

session_set_cookie_params(3600, '/~lbaw1336');
//session_set_cookie_params(3600, '/Newsy/proto/');
session_start();

$BASE_DIR = '/opt/lbaw/lbaw1336/public_html/proto/';
$BASE_URL = '/~lbaw1336/proto/';

$conn = new PDO('pgsql:host=vdbm;dbname=lbaw1336', 'lbaw1336', 'sK264hg6');

//$BASE_DIR = '/srv/http/Newsy/proto/';
//$BASE_URL = '/Newsy/proto/';

//$conn = new PDO('pgsql:host=localhost;dbname=lbaw1336', 'lbaw1336', 'sK264hg6');
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$conn->exec('SET search_path TO proto');

include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

$smarty = new Smarty;
$smarty->template_dir = $BASE_DIR . 'templates/';
$smarty->compile_dir = $BASE_DIR . 'templates_c/';
$smarty->assign('BASE_URL', $BASE_URL);

$smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
$smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
$smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
$smarty->assign('FORM_VALUES', $_SESSION['form_values']);
$smarty->assign('EMAIL', $_SESSION['email']);
$smarty->assign('ROLE', $_SESSION['role']);
$smarty->assign('NAME', $_SESSION['name']);

unset($_SESSION['success_messages']);
unset($_SESSION['error_messages']);
unset($_SESSION['field_errors']);
unset($_SESSION['form_values']);
unset($_SESSION['email']);
unset($_SESSION['role']);
unset($_SESSION['name']);
?>