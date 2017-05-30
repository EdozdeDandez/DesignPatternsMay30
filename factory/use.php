<?php
include 'user.php';
include 'ufactory.php';
$uo = UserFactory::Create( 1 );
echo( $uo->getName()."\n" );
?>