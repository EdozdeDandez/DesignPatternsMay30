<?php
$user1 = new user();
$user2 = new user();

$user1->borrowMovie();
echo $user1->getActorandTitle();

$user2->borrowMovie();
echo $user2->getActorandTitle();

$user1->returnMovie();

$user2->borrowMovie();
echo $user2->getActorandTitle();
?>