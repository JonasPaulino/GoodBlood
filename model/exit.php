<?php
session_start();

if(isset($_SESSION['nome'])){
    unset($_SESSION['logou']);
    unset($_SESSION['nome']);

    session_destroy();
    session_write_close();

    header("location: ../index.html");
}
?>