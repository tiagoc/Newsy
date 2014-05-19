<?php

//session_set_cookie_params(3600, '/Newsy/frmk/');
session_set_cookie_params(3600, '/~lbaw1336/frmk/');
session_start();

//$BASE_DIR = '/srv/http/Newsy/frmk/';
//$BASE_URL = '/Newsy/frmk/';

$BASE_DIR = '/opt/lbaw/lbaw1336/public_html/frmk/';
$BASE_URL = '/~lbaw1336/frmk/';

$conn = new PDO('pgsql:host=vdbm.fe.up.pt;dbname=lbaw1336', 'lbaw1336', 'sK264hg6');
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$conn->exec('SET search_path TO frmk');

include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

$smarty = new Smarty;
$smarty->template_dir = $BASE_DIR . 'templates/';
$smarty->compile_dir = $BASE_DIR . 'templates_c/';
$smarty->assign('BASE_URL', $BASE_URL);

$smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
$smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
$smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
$smarty->assign('FORM_VALUES', $_SESSION['form_values']);
$smarty->assign('USERNAME', $_SESSION['username']);

unset($_SESSION['success_messages']);
unset($_SESSION['error_messages']);
unset($_SESSION['field_errors']);
unset($_SESSION['form_values']);
?>
