<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <a href="index.php?page=film&action=create">Tambah Data</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>Sutradara</th>
            <th>Rating</th>
            <th>Durasi</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($film as $f): ?>
        <tr>
            <td><?= htmlspecialchars($f['id_film']) ?></td>
            <td><?= htmlspecialchars($f['judul_film']) ?></td>
            <td><?= htmlspecialchars($f['genre_film']) ?></td>
            <td><?= $f['tahun_rilis'] ?></td>
            <td><?= htmlspecialchars($f['sutradara']) ?></td>
            <td><?= $f['rating_film'] ?></td>
            <td><?= $f['durasi_menit'] ?></td>
            <td>
                <a href="index.php?page=film&action=edit&id=<?= $f['id_film'] ?>">Edit</a>
                <form method="post" action="index.php?page=film&action=delete" style="display:inline">
                    <input type="hidden" name="id" value="<?= $f['id_film'] ?>">
                    <button type="submit" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>