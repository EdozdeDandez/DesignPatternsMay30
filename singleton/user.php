<?php
include 'singleton.php';
class MBorrower {
    private $borrowedMovie;
    private $haveMovie = FALSE;

    function __construct() {
    }

    function getActorAndTitle() {
      if (TRUE == $this->haveMovie) {
        return $this->borrowedMovie->getAuthorAndTitle();
      } else {
        return "I don't have the movie";
      }
    }

    function borrowMovie() {
      $this->borrowedMovie = Movie::borrowMovie();
      if ($this->borrowedMovie == NULL) {
        $this->haveMovie = FALSE;
      } else {
        $this->haveMovie = TRUE;
      }
    }

    function returnMovie() {
      $this->borrowedMovie->returnMovie($this->borrowedMovie);
    }
  }
?>