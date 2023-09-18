<?php
// Sertakan file koneksi ke database
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_berita_acara = $_GET['id'];

    // Query untuk mengambil data berita acara berdasarkan ID
    $sql = "SELECT * FROM tb_berita_acara WHERE id_berita_acara = $id_berita_acara";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $tanggal_format = date("d F Y", strtotime($row['tanggal']));
        ?>

        <!DOCTYPE html>
        <html>

        <head>
            <title>Berita Acara Praktikum</title>
            <style>
                /* CSS untuk tampilan cetakan */
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                }

                h1 {
                    text-align: center;
                }

                .berita-acara {
                    margin: 20px;
                    padding: 20px;
                    border: 1px solid #000;
                }

                .info {
                    margin-bottom: 10px;
                }

                .info strong {
                    margin-right: 10px;
                }

                .materi {
                    margin-top: 10px;
                }

                /* Tambahkan lebih banyak gaya cetakan sesuai kebutuhan Anda */
                @media print {
                    body {
                        font-size: 12pt;
                        margin: 0;
                        padding: 0;
                    }

                    h1 {
                        text-align: center;
                        margin-bottom: 20px;
                    }

                    .berita-acara {
                        border: none;
                        page-break-before: always;
                    }

                    /* Tambahkan lebih banyak gaya cetakan sesuai kebutuhan Anda */
                }
            </style>
        </head>

        <body>
            <h1>Berita Acara Praktikum</h1>
            <div class="berita-acara">
                <div class="info">
                    <strong>Jenjang:</strong>
                    <?php echo $row['jenjang']; ?><br>
                    <strong>Jurusan:</strong>
                    <?php echo $row['jurusan']; ?><br>
                    <strong>Nama Matakuliah:</strong>
                    <?php echo $row['nama_matakuliah']; ?><br>
                    <strong>Jumlah Peserta:</strong>
                    <?php echo $row['jumlah_peserta']; ?><br>
                    <strong>Hari:</strong>
                    <?php echo $row['hari']; ?><br>
                    <strong>Tanggal:</strong>
                    <?php echo $tanggal_format; ?><br>
                    <strong>Waktu Masuk:</strong>
                    <?php echo $row['wkt_masuk']; ?><br>
                    <strong>Waktu Keluar:</strong>
                    <?php echo $row['wkt_keluar']; ?><br>
                    <strong>Ruangan:</strong>
                    <?php echo $row['ruangan']; ?><br>
                    <strong>Jumlah Hadir:</strong>
                    <?php echo $row['jml_hadir']; ?><br>
                    <strong>Jumlah Absen:</strong>
                    <?php echo $row['jml_absen']; ?><br>
                </div>
                <div class="materi">
                    <strong>Materi:</strong><br>
                    <?php echo nl2br($row['materi']); ?>
                </div>
                <div class="catatan">
                    <strong>Catatan:</strong><br>
                    <?php echo nl2br($row['catatan']); ?>
                </div>
                <div class="asisten">
                    <strong>Asisten 1:</strong>
                    <?php echo $row['asisten_1']; ?><br>
                    <strong>Asisten 2:</strong>
                    <?php echo $row['asisten_2']; ?><br>
                    <strong>Asisten 3:</strong>
                    <?php echo $row['asisten_3']; ?><br>
                    <strong>Asisten 4:</strong>
                    <?php echo $row['asisten_4']; ?><br>
                </div>
                <div class="dosen">
                    <strong>Nama Dosen:</strong>
                    <?php echo $row['nama_dosen']; ?><br>
                    <strong>Nama Kepala Lab:</strong>
                    <?php echo $row['nama_kepala_lab']; ?><br>
                </div>
            </div>
        </body>

        </html>

        <?php
    } else {
        echo "Data berita acara tidak ditemukan.";
    }

    // Tutup koneksi ke database
    $koneksi->close();
} else {
    echo "ID berita acara tidak valid.";
}
?>