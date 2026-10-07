<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exscurty Test - Camera Test</title>
    <!-- Tailwind CSS untuk styling cepat -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white flex flex-col items-center justify-center min-h-screen">

    <div class="max-w-xl w-full p-6 bg-slate-800 rounded-xl shadow-lg text-center">
        <h1 class="text-2xl font-bold mb-2">Exscurty Test - Webcam Check</h1>
        <p class="text-slate-400 mb-6 text-sm">Pastikan wajah Anda terlihat jelas di dalam kotak di bawah ini.</p>

        <!-- Kotak Tampilan Kamera -->
        <div class="relative w-full aspect-video bg-black rounded-lg overflow-hidden border-2 border-slate-600 shadow-inner">
            <video id="webcam" autoplay playsinline class="w-full h-full object-cover"></video>
        </div>

        <!-- Indikator Status -->
        <div id="status" class="mt-4 text-yellow-400 font-medium">Menghubungkan ke kamera eksternal...</div>

        <!-- Tombol Aksi -->
        <div class="mt-6 flex justify-center gap-4">
            <button onclick="startCamera()" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-sm font-semibold transition">Nyalakan Kamera</button>
            <button onclick="stopCamera()" class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-sm font-semibold transition">Matikan Kamera</button>
        </div>
    </div>

    <!-- Script JavaScript Akses Webcam -->
    <script>
        const videoElement = document.getElementById('webcam');
        const statusElement = document.getElementById('status');
        let mediaStream = null;

        async function startCamera() {
            try {
                statusElement.innerText = "Meminta izin akses webcam...";
                
                // Memanggil API MediaDevices browser untuk mengambil video
                mediaStream = await navigator.mediaDevices.getUserMedia({ 
                    video: { width: 1280, height: 720 }, 
                    audio: false 
                });

                videoElement.srcObject = mediaStream;
                statusElement.innerText = "Kamera Berhasil Terhubung! ✨";
                statusElement.className = "mt-4 text-green-400 font-medium";
            } catch (error) {
                console.error("Gagal mengakses kamera:", error);
                statusElement.innerText = "Gagal mengakses kamera! Periksa izin atau kabel USB webcam.";
                statusElement.className = "mt-4 text-red-400 font-medium";
            }
        }

        // Jalankan otomatis saat halaman dibuka
        window.addEventListener('load', () => {
            startCamera();
        });

        function stopCamera() {
            if (mediaStream) {
                let tracks = mediaStream.getTracks();
                tracks.forEach(track => track.stop());
                videoElement.srcObject = null;
                statusElement.innerText = "Kamera dimatikan.";
                statusElement.className = "mt-4 text-slate-400 font-medium";
            }
        }
    </script>
</body>
</html>