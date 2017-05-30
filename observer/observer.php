<?php
interface IObserver
{
  function onChanged( $sender, $args );
}
class UserListLogger implements IObserver
{
  public function onChanged( $sender, $args )
  {
    echo( "'$args' added to user list\n" );
  }
}
?>