<?php
// Mengatur header agar menerima request dalam format JSON
header('Content-Type: application/json');

// Menangkap data JSON yang dikirimkan oleh JavaScript
$data = json_decode(file_get_contents('php://input'), true);

// Memastikan data latitude dan longitude tersedia
if (isset($data['lat']) && isset($data['lon'])) {
    $lat = $data['lat'];
    $lon = $data['lon'];
    
    // Mengambil waktu saat ini
    date_default_timezone_set('Asia/Jakarta');
    $waktu = date('Y-m-d H:i:s');

    // Format teks yang akan disimpan (ditulis per baris untuk setiap data baru)
    $teks = "Waktu: $waktu | Latitude: $lat | Longitude: $lon" . PHP_EOL;

    // Nama file tempat menyimpan lokasi
    $nama_file = 'data_lokasi.txt';

    // Menyimpan teks ke dalam file.
    // FILE_APPEND memastikan data lama tidak tertimpa, melainkan ditambah ke baris baru.
    if (file_put_contents($nama_file, $teks, FILE_APPEND)) {
        echo json_encode(["status" => "sukses", "pesan" => "Lokasi tersimpan di server"]);
    } else {
        echo json_encode(["status" => "gagal", "pesan" => "Gagal menulis file. Periksa izin folder (CHMOD)."]);
    }
} else {
    echo json_encode(["status" => "gagal", "pesan" => "Data tidak lengkap"]);
}
?>
