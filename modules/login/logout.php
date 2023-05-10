<?php
    session_start();
    print_r($_SESSION);
    unset($_SESSION['logged_in']);
    print_r($_SESSION);

    

?>