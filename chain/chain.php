<?php
class Chain
{
  private $commands = array();
 
  public function addCommand( $command )
  {
    $this->commands[]= $command;
  }
 
  public function runCommand( $name, $args )
  {
    foreach( $this->commands as $command )
    {
      if ( $command->onCommand( $name, $args ) )
        return;
    }
  }
}?>