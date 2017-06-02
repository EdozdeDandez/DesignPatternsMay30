<?php
class UserFactory
{
  public static function Create( $id )
  {
    return new User( $id );
  }
}
?>