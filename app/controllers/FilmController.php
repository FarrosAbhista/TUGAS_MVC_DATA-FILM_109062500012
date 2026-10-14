<?php
class FilmController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $film = $this->model->getAll();
        require '../app/views/film/index.php';
    }

    public function create() {
        require '../app/views/film/create.php';
    }

    public function store() {
        $data = $this->validateInput($_POST);
        $this->model->insert($data);
        header('Location: index.php');
        exit;
    }

    public function edit() {
        $id = (int) ($_GET['id'] ?? 0);
        $filmData = $this->model->findById($id);

        if (!$filmData) {
            http_response_code(404);
            exit('Data film tidak ditemukan.');
        }

        require '../app/views/film/edit.php';
    }

    public function update() {
        $id = (int) ($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        $this->model->update($id, $data);
        header('Location: index.php');
        exit;
    }

    public function delete(): void {
        $id = (int) ($_POST['id'] ?? 0);
        $this->model->delete($id);
        header('Location: index.php?page=film');
        exit;
    }

    private function validateInput(array $input): array {
        $data = [
            'judul_film' => trim($input['judul_film'] ?? ''),
            'genre_film' => trim($input['genre_film'] ?? ''),
            'tahun_rilis' => trim($input['tahun_rilis'] ?? ''),
            'sutradara' => trim($input['sutradara'] ?? ''),
            'rating_film' => trim($input['rating_film'] ?? ''),
            'durasi_menit' => trim($input['durasi_menit'] ?? '')
        ];

        if ($data['judul_film'] === '' || $data['genre_film'] === '' || $data['tahun_rilis'] === '') {
            exit('Judul, genre, dan tahun rilis wajib diisi.');
        }

        return $data;
    }
}
?>