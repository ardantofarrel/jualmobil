<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Tiket Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        #tiket-container {
            margin-top: 20px;
        }
        .tiket {
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }
        .tiket:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard Admin - Tiket Bioskop</h1>
        <div id="tiket-container"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Pengaturan data tiket (dummy data)
            const tiketData = [
                { tanggal: '2024-03-06', film: 'Film A', teater: 'Teater 1', jumlah: 50 },
                { tanggal: '2024-03-07', film: 'Film B', teater: 'Teater 2', jumlah: 40 },
                { tanggal: '2024-03-08', film: 'Film C', teater: 'Teater 3', jumlah: 30 }
            ];

            // Mendapatkan container untuk menampilkan data tiket
            const tiketContainer = document.getElementById("tiket-container");

            // Memasukkan data tiket ke dalam container
            tiketData.forEach(tiket => {
                const tiketElement = document.createElement("div");
                tiketElement.classList.add("tiket");
                tiketElement.innerHTML = `
                    <p><strong>Tanggal:</strong> ${tiket.tanggal}</p>
                    <p><strong>Film:</strong> ${tiket.film}</p>
                    <p><strong>Teater:</strong> ${tiket.teater}</p>
                    <p><strong>Jumlah Tiket:</strong> ${tiket.jumlah}</p>
                `;
                tiketContainer.appendChild(tiketElement);
            });
        });
    </script>
</body>
</html>
