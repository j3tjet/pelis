<?php
class MovieModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllMovies() {
        $query = "SELECT * FROM peliculas";
        return $this->db->query($query)->fetchAll();
    }

    public function getMovieById($id) {
        $query = "SELECT * FROM peliculas WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function searchMovies($term) {
        $query = "SELECT * FROM peliculas WHERE nombre LIKE :term";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':term', "%" . $term . "%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>
