<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lacak Lokasi</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 100px; }
        button {
            padding: 12px 24px; font-size: 16px; cursor: pointer;
            background-color: #28a745; color: white; border: none; border-radius: 5px;
        }
        button:hover { background-color: #218838; }
        #status { margin-top: 20px; color: #333; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Akses Lokasi Diperlukan</h2>
    <button id="btnLacak">Izinkan & Lacak Lokasi</button>
    <p id="status"></p>

    <script>
        document.getElementById('btnLacak').addEventListener('click', function() {
            const statusText = document.getElementById('status');
            statusText.innerText = "Meminta izin dari browser...";

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(kirimKeServer, showError);
            } else {
                statusText.innerText = "Geolokasi tidak didukung oleh browser ini.";
            }
        });

        // Fungsi jika lokasi berhasil ditangkap
        function kirimKeServer(position) {
            const statusText = document.getElementById('status');
            statusText.innerText = "Lokasi didapatkan! Mengirim ke server...";

            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            // Mengirim data ke simpan.php di latar belakang menggunakan Fetch API
            fetch('simpan.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ lat: lat, lon: lon })
            })
            .then(response => response.json())
            .then(data => {
                if(data.status === 'sukses') {
                    statusText.innerText = "Selesai! Lokasi berhasil disimpan secara otomatis.";
                    statusText.style.color = "green";
                } else {
                    statusText.innerText = "Error: " + data.pesan;
                    statusText.style.color = "red";
                }
            })
            .catch(error => {
                console.error('Error:', error);
                statusText.innerText = "Gagal terhubung ke server.";
            });
        }

        // Fungsi jika terjadi error/pengguna menolak izin
        function showError(error) {
            const statusText = document.getElementById('status');
            statusText.style.color = "red";
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    statusText.innerText = "Pengguna menolak izin lokasi."; break;
                case error.POSITION_UNAVAILABLE:
                    statusText.innerText = "Informasi lokasi tidak tersedia."; break;
                case error.TIMEOUT:
                    statusText.innerText = "Permintaan lokasi habis waktu."; break;
                case error.UNKNOWN_ERROR:
                    statusText.innerText = "Terjadi kesalahan tidak dikenal."; break;
            }
        }
    </script>
</body>
</html>
