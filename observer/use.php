<?php 
include 'observer.php';
include 'observable.php';
$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addUser( "Jane" );
?>