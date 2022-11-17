<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location: ../loggin/index.php?error=Noaccountfound");
}