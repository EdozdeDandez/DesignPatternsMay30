<?php
class Movie {
    private $actor = 'Vin Diesel, Dwayne Johnson, Michelle Rodriguez, Nathalie emmanuel and Elsa Pataky';
    private $title  = 'The fate of the furious';
    private static $movie = NULL;
    private static $isLoanedOut = FALSE;

    private function __construct() {
    }

    static function borrowMovie() {
      if (FALSE == self::$isLoanedOut) {
        if (NULL == self::$movie) {
           self::$movie = new Movie();
        }
        self::$isLoanedOut = TRUE;
        return self::$movie;
      } else {
        return NULL;
      }
    }

    function returnMovie(Movie $movieBack) {
        self::$isLoanedOut = FALSE;
    }

    function getActor() {return $this->actor;}

    function getTitle() {return $this->title;}

    function getActorAndTitle() {
      return $this->getTitle() . ' by ' . $this->getActor();
    }
  }
  ?>