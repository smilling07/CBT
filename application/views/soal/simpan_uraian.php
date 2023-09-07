<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $pertanyaan = $_POST["pertanyaan"];
    $jawaban = $_POST["jawaban"];

    // Simpan data ke dalam database atau berkas, sesuai dengan kebutuhan Anda
    // Misalnya, simpan ke dalam berkas teks
    $file = fopen("soal_uraian.txt", "a");
    fwrite($file, "Pertanyaan: " . $pertanyaan . "\n");
    fwrite($file, "Jawaban Uraian: " . $jawaban . "\n");
    fwrite($file, "==============================\n");
    fclose($file);

    echo "Soal uraian berhasil disimpan!";
}
?>
