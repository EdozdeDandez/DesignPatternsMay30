<?php 
$ul = new UserList();
$ul->addObserver( new UserListLogger() );
$ul->addUser( "Jane" );
?>