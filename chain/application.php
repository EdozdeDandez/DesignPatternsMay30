<?php
$comm = new Chain();
$comm->addCommand( new UserCommand() );
$comm->addCommand( new MailCommand() );
$comm->runCommand( 'addUser', null );
$comm->runCommand( 'mail', null );
?>