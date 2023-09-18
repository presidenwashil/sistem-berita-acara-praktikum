<!DOCTYPE html>
<html>

<head>
    <title>Input Berita Acara Praktikum</title>
</head>

<body>
    <h2>Form Input Data Berita Acara Praktikum</h2>
    <form action="proses_input.php" method="POST">
        <label for="jenjang">Jenjang:</label>
        <input type="text" name="jenjang" required><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required><br>

        <label for="nama_matakuliah">Nama Matakuliah:</label>
        <input type="text" name="nama_matakuliah" required><br>

        <label for="jumlah_peserta">Jumlah Peserta:</label>
        <input type="number" name="jumlah_peserta" required><br>

        <label for="hari">Hari:</label>
        <input type="text" name="hari" required><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" required><br>

        <label for="wkt_masuk">Waktu Masuk:</label>
        <input type="time" name="wkt_masuk" required><br>

        <label for="wkt_keluar">Waktu Keluar:</label>
        <input type="time" name="wkt_keluar" required><br>

        <label for="ruangan">Ruangan:</label>
        <input type="text" name="ruangan" required><br>

        <label for="jml_hadir">Jumlah Hadir:</label>
        <input type="number" name="jml_hadir" required><br>

        <label for="jml_absen">Jumlah Absen:</label>
        <input type="number" name="jml_absen" required><br>

        <label for="materi">Materi:</label>
        <textarea name="materi" required></textarea><br>

        <label for="catatan">Catatan:</label>
        <textarea name="catatan"></textarea><br>

        <label for="asisten_1">Asisten 1:</label>
        <input type="text" name="asisten_1"><br>

        <label for="asisten_2">Asisten 2:</label>
        <input type="text" name="asisten_2"><br>

        <label for="asisten_3">Asisten 3:</label>
        <input type="text" name="asisten_3"><br>

        <label for="asisten_4">Asisten 4:</label>
        <input type="text" name="asisten_4"><br>

        <label for="nama_dosen">Nama Dosen:</label>
        <input type="text" name="nama_dosen" required><br>

        <label for="nama_kepala_lab">Nama Kepala Lab:</label>
        <input type="text" name="nama_kepala_lab" required><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>

</html>