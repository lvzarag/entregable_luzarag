<?php

	class Actor
	{
		private $id;
		private $first_name;
    private $last_name;
		private $favorite_movie_id;
		private $favorite_movie_title;

    public function __construct($first_name, $last_name)
    {
      $this->first_name = $first_name;
      $this->last_name = $last_name;
    }

    public function setFirstName($first_name)
    {
      $this->first_name = $first_name;
    }

    public function getFirstName()
    {
      return $this->first_name;
    }

    public function setLastName($last_name)
    {
      $this->last_name = $last_name;
    }

    public function getLastName()
    {
      return $this->last_name;
    }



		public function setFavoriteMovieTitle($favorite_movie_title)
		{
			$this->favorite_movie_title = $favorite_movie_title;
		}

		public function getFavoriteMovieTitle()
		{
				return $this->favorite_movie_title ;
		}

		public function setFavoriteMovieId($favorite_movie_id)
		{
			$this->favorite_movie_id = $favorite_movie_id;
		}

		public function getFavoriteMovieId()
		{
			if ($this->favorite_movie_id){
				return $this->favorite_movie_id;
			}
				return 'Sin Pelicula Preferida';

		}











  }
