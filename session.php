<?php
    session_start();
    if($_SESSION['nyobo']==false){
        header('location:../adminpanel');
    }
?>