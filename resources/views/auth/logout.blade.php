<?php
session_start();

if(session_destroy()) {
   header("Location: v_login.php");
}
?>
