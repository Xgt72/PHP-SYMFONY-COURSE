<?php session_start(); ?>
<?php require 'inc/head.php'; ?>
<?php
if (!isset($_SESSION['loginname'])) {
    header("location: /login.php");
    exit();
}
if(isset($_COOKIE['haveCookie'])) {
    $cart = [];
    foreach($_COOKIE as $key => $value) {
        if(is_int($key)) {
            $cart[$key] = $value;
        }
    } 
}
?>
<section class="cookies container-fluid">
    <?php foreach ($cart as $id => $nbCookie) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <p>ID: <?= $id; ?></p>
            <p>Quantity: <?= $nbCookie; ?></p>
        </div>
    <?php } ?>
</section>
<?php require 'inc/foot.php'; ?>