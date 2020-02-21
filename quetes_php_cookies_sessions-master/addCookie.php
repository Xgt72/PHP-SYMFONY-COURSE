<?php 
if(isset($_GET['add_to_cart'])) {
    if(!isset($_COOKIE['haveCookie'])) {
        setcookie('haveCookie', 'true', time() + (86400 * 30));
    }

    $cookieName = $_GET['add_to_cart'];
    echo $cookieName . "</br>";
    $cookieValue = isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : 0;
    $cookieValue ++;
    echo $cookieValue . "</br>";
    setcookie($cookieName, $cookieValue, time() + (86400 * 30));
    header("location: /");
    exit();
}
?>