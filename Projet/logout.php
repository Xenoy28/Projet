<?php
session_start();
session_unset();
session_destroy();

header('Location: login.php?deconnecte=1');
exit;