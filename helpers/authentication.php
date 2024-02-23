<?php
    function checkIsAuth() {
        return false;
        session_start();

        return !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true;
    }
?>
