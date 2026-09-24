<?php
require_once __DIR__ . '/helpers.php';
include 'helpers.php';
include 'logger.php';
session_destroy();
header('Location: /');
write_log ("INFO", current_user()['username'], "Déconnexion du compte", "SUCCES");
exit;
