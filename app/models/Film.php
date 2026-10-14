<?php
class Film {
    public function __construct(private PDO $db) {}

    public function getAll(): array {
        $stmt = $this->db->query(
            'SELECT id_film, judul_film, genre_film, tahun_rilis, sutradara, rating_film, durasi_menit FROM film ORDER BY judul_film'
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): array|false {
        $stmt = $this->db->prepare(
            'SELECT id_film, judul_film, genre_film, tahun_rilis, sutradara, rating_film, durasi_menit FROM film WHERE id_film = :id'
        );
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert(array $data): bool {
        $sql = 'INSERT INTO film (judul_film, genre_film, tahun_rilis, sutradara, rating_film, durasi_menit)
                VALUES (:judul, :genre, :tahun, :sutradara, :rating, :durasi)';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':judul' => $data['judul_film'],
            ':genre' => $data['genre_film'],
            ':tahun' => $data['tahun_rilis'],
            ':sutradara' => $data['sutradara'],
            ':rating' => $data['rating_film'],
            ':durasi' => $data['durasi_menit']
        ]);
    }

    public function update(int $id, array $data): bool {
        $sql = 'UPDATE film
                SET judul_film = :judul, genre_film = :genre, tahun_rilis = :tahun, sutradara = :sutradara, rating_film = :rating, durasi_menit = :durasi
                WHERE id_film = :id';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':judul' => $data['judul_film'],
            ':genre' => $data['genre_film'],
            ':tahun' => $data['tahun_rilis'],
            ':sutradara' => $data['sutradara'],
            ':rating' => $data['rating_film'],
            ':durasi' => $data['durasi_menit']
        ]);
    }

    public function delete(int $id): bool {
        $stmt = $this->db->prepare(
            'DELETE FROM film WHERE id_film = :id'
        );
        return $stmt->execute([':id' => $id]);
    }
}
?>