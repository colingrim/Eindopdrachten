<?php
    session_start();
    $_SESSION['logged_in'] = 'Logged id!!';
    print_r($_SESSION);

?>
