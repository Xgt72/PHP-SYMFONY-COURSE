<?php
if(isset($_POST["loginname"])) {
    session_start();
    
    $_SESSION["loginname"] = $_POST["loginname"];
    print_r($_SESSION);
}
header("location: /");
