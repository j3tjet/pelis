<?php
require_once('model/MovieModel.php');

class MovieController {
    private $model;

    public function __construct($db) {
        $this->model = new MovieModel($db);
    }

    public function listMovies() {
        $movies = $this->model->getAllMovies();
        require('view/movie_list.php');
    }

    public function viewMovie($id) {
        $movie = $this->model->getMovieById($id);
        require('view/movie_details.php');
    }
}
?>
