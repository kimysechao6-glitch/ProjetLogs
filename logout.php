<?php
require_once __DIR__ . '/helpers.php';
include 'helpers.php';
include 'logger.php';
session_destroy();
header('Location: /');
$user = current_user()['username'];
write_log ("INFO", $user, "Déconnexion du compte", "SUCCES");
exit;
