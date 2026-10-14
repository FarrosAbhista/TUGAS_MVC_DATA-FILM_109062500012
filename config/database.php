<?php
class Database {
    private $host = "localhost";
    private $db = "db_film_abhista";
    private $user = "root";
    private $pass = "";

    public function connect(){
        return new PDO(
            "mysql:host={$this->host};dbname={$this->db}",
            $this->user,
            $this->pass
        );
    }
}
?>
