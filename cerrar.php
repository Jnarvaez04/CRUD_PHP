<?php

session_start();
unset ($SESSION['']);
session_destroy();

header('Location: http://localhost:8079/phpLogin/login.html');

?>