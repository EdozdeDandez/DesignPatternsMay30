<?php
include 'mailc.php';
include 'userc.php';
include 'chain.php';
$com = new Chain();
$com->addCommand( new UserCommand() );
$com->addCommand( new MailCommand() );
$com->runCommand( 'addUser', null );
$com->runCommand( 'mail', null );
?>