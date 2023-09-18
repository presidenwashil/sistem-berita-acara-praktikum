<!DOCTYPE html>
<html>

<head>
    <title>Data Berita Acara Praktikum</title>
</head>

<body>
    <h2>Data Berita Acara Praktikum</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenjang</th>
                <th>Jurusan</th>
                <th>Nama Matakuliah</th>
                <th>Jumlah Peserta</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Ruangan</th>
                <th>Jumlah Hadir</th>
                <th>Jumlah Absen</th>
                <th>Materi</th>
                <th>Catatan</th>
                <th>Asisten 1</th>
                <th>Asisten 2</th>
                <th>Asisten 3</th>
                <th>Asisten 4</th>
                <th>Nama Dosen</th>
                <th>Nama Kepala Lab</th>
                <th>Cetak Berita Acara</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Sertakan file koneksi ke database
            include 'koneksi.php';

            // Query untuk mengambil data dari tabel tb_berita_acara
            $sql = "SELECT * FROM tb_berita_acara";
            $result = $koneksi->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id_berita_acara'] . "</td>";
                    echo "<td>" . $row['jenjang'] . "</td>";
                    echo "<td>" . $row['jurusan'] . "</td>";
                    echo "<td>" . $row['nama_matakuliah'] . "</td>";
                    echo "<td>" . $row['jumlah_peserta'] . "</td>";
                    echo "<td>" . $row['hari'] . "</td>";
                    echo "<td>" . $row['tanggal'] . "</td>";
                    echo "<td>" . $row['wkt_masuk'] . "</td>";
                    echo "<td>" . $row['wkt_keluar'] . "</td>";
                    echo "<td>" . $row['ruangan'] . "</td>";
                    echo "<td>" . $row['jml_hadir'] . "</td>";
                    echo "<td>" . $row['jml_absen'] . "</td>";
                    echo "<td>" . $row['materi'] . "</td>";
                    echo "<td>" . $row['catatan'] . "</td>";
                    echo "<td>" . $row['asisten_1'] . "</td>";
                    echo "<td>" . $row['asisten_2'] . "</td>";
                    echo "<td>" . $row['asisten_3'] . "</td>";
                    echo "<td>" . $row['asisten_4'] . "</td>";
                    echo "<td>" . $row['nama_dosen'] . "</td>";
                    echo "<td>" . $row['nama_kepala_lab'] . "</td>";
                    echo "<td><a href='cetak_berita_acara.php?id=" . $row['id_berita_acara'] . "' target='_blank'>Cetak</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='19'>Tidak ada data berita acara.</td></tr>";
            }

            // Tutup koneksi ke database
            $koneksi->close();
            ?>
        </tbody>
    </table>
</body>

</html>