<?php
require_once 'connect.php';


$pdo = new PDO(DSN, USER, PASS);

echo getFriendsList($pdo);

require 'form.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "Firstname is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Lastname is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
    }

    if ($firstnameErr == "" && $lastnameErr == "") {
        $queryAddFriend = "INSERT INTO friend (firstname, lastname) VALUES (?, ?)";
        $statementAddFriend = $pdo->prepare($queryAddFriend);
        $statementAddFriend->execute([$firstname, $lastname]);
        $location = "/index.php";
        header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
    }
}

function getFriendsList($pdo): string
{
    $friendList = "<h2>All the friends: </h2>\n<ul>";
    $queryGetAllFriends = "SELECT * FROM friend";
    $statementGetAllFriends = $pdo->query($queryGetAllFriends);
    $friends = $statementGetAllFriends->fetchAll(PDO::FETCH_ASSOC);
    foreach ($friends as $friend) {
        $friendList .= "<li>" . $friend['firstname'] . ' ' . $friend['lastname'] . "</li>";
    }
    $friendList .= "</ul>";
    return $friendList;
}
