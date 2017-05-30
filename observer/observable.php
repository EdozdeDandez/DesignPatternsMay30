<?php 
interface IObservable
{
  function addObserver( $observer );
}
 
class UserList implements IObservable
{
  private $_observers = array();
 
  public function addUser( $name )
  {
    foreach( $this->_observers as $obs )
      $obs->onChanged( $this, $name );
  }
 
  public function addObserver( $observer )
  {
    $this->_observers []= $observer;
  }
}
?>