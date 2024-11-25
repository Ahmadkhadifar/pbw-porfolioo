<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .catalog {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px;
        }

        .item {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }

        .item h3 {
            margin: 0;
        }

        .item p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="navbar">Catalog</div>
    <div class="catalog" id="catalog"></div>

    <script>
        fetch('fetch_data.php')
            .then(response => response.json())
            .then(data => {
                const catalog = document.getElementById('catalog');
                data.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'item';
                    div.innerHTML = `
                        <h3>${item.nama_barang}</h3>
                        <p>${item.deskripsi}</p>
                        <p>Harga: Rp ${item.harga_barang}</p>
                        <p>Stock: ${item.stock_barang}</p>
                    `;
                    catalog.appendChild(div);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>

</html>