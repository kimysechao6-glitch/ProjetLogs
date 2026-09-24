<?php
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/logger.php';
$username = current_user()['username'];
session_destroy();
write_log ("INFO", $username, "Déconnexion", "SUCCES");
header('Location: /');
exit;