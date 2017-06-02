<?php 
class UserList implements IObservable{
  private $observers = array();
 
  public function addUser( $name )
  {
    foreach( $this->observers as $observe )
      $observe->onChanged( $this, $name );
  }
 
  public function addObserver( $observer )
  {
    $this->observers[]= $observer;
  }
}
?>