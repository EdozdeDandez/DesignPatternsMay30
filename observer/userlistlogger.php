<?php
class UserListLogger implements Observer{
  public function onChanged( $sender, $args )
  {
    echo( "'$args' added to user list\n" );
  }
}
?>