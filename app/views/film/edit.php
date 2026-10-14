<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Film</title>
</head>
<body>
    <h2>Edit Film</h2>

    <form method="post" action="index.php?page=film&action=update">
        <input type="hidden" name="id" value="<?= $filmData['id_film'] ?>">

        <label>Judul Film</label><br>
        <input type="text" name="judul_film" value="<?= htmlspecialchars($filmData['judul_film']) ?>" required><br><br>

        <label>Genre</label><br>
        <input type="text" name="genre_film" value="<?= htmlspecialchars($filmData['genre_film']) ?>" required><br><br>

        <label>Tahun Rilis</label><br>
        <input type="number" name="tahun_rilis" value="<?= $filmData['tahun_rilis'] ?>" required><br><br>

        <label>Sutradara</label><br>
        <input type="text" name="sutradara" value="<?= htmlspecialchars($filmData['sutradara']) ?>" required><br><br>

        <label>Rating</label><br>
        <input type="number" step="0.1" name="rating_film" value="<?= $filmData['rating_film'] ?>" required><br><br>

        <label>Durasi (Menit)</label><br>
        <input type="number" name="durasi_menit" value="<?= $filmData['durasi_menit'] ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=film">Kembali</a>
    </form>
</body>
</html>