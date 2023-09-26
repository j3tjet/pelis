<?php
class MovieModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllMovies() {
        $query = "SELECT * FROM películas";
        return $this->db->query($query)->fetchAll();
    }

    public function getMovieById($id) {
        $query = "SELECT * FROM películas WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>