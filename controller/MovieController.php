<?php
require_once('model/MovieModel.php');

class MovieController {
    private $model;

    public function __construct($db) {
        $this->model = new MovieModel($db);
    }

    public function listMovies() {
        $movies = $this->model->getAllMovies();

        // Si el usuario envió un término de búsqueda, realiza la búsqueda.
        if (isset($_GET['search'])) {
            $movies = $this->model->searchMovies($_GET['search']);
        }

        require('view/movie_list.php');
    }

    public function viewMovie($id) {
        $movie = $this->model->getMovieById($id);
        require('view/movie_details.php');
    }
}

?>
