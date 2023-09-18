<?php
// Sertakan file koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $jenjang = $_POST['jenjang'];
    $jurusan = $_POST['jurusan'];
    $nama_matakuliah = $_POST['nama_matakuliah'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $wkt_masuk = $_POST['wkt_masuk'];
    $wkt_keluar = $_POST['wkt_keluar'];
    $ruangan = $_POST['ruangan'];
    $jml_hadir = $_POST['jml_hadir'];
    $jml_absen = $_POST['jml_absen'];
    $materi = $_POST['materi'];
    $catatan = $_POST['catatan'];
    $asisten_1 = $_POST['asisten_1'];
    $asisten_2 = $_POST['asisten_2'];
    $asisten_3 = $_POST['asisten_3'];
    $asisten_4 = $_POST['asisten_4'];
    $nama_dosen = $_POST['nama_dosen'];
    $nama_kepala_lab = $_POST['nama_kepala_lab'];

    // SQL query untuk menyimpan data ke database
    $sql = "INSERT INTO tb_berita_acara (jenjang, jurusan, nama_matakuliah, jumlah_peserta, hari, tanggal, wkt_masuk, wkt_keluar, ruangan, jml_hadir, jml_absen, materi, catatan, asisten_1, asisten_2, asisten_3, asisten_4, nama_dosen, nama_kepala_lab) VALUES ('$jenjang', '$jurusan', '$nama_matakuliah', $jumlah_peserta, '$hari', '$tanggal', '$wkt_masuk', '$wkt_keluar', '$ruangan', $jml_hadir, $jml_absen, '$materi', '$catatan', '$asisten_1', '$asisten_2', '$asisten_3', '$asisten_4', '$nama_dosen', '$nama_kepala_lab')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi ke database
    $koneksi->close();
}
?>