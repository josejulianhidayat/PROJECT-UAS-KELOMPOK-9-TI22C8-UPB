<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjadwalan Matakuliah Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        main {
            padding: 20px;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h1>Penjadwalan Matakuliah Dosen</h1>
    </header>

    <nav>
        <a href="#">Beranda</a>
        <a href="#">Jadwal Matakuliah</a>
        <a href="#">Kontak</a>
    </nav>

    <main>
        <form action="process_penjadwalan.php" method="post">
            <h2>Form Penjadwalan Matakuliah Dosen</h2>
            <input type="text" name="nama_dosen" placeholder="Nama Dosen" required>
            <input type="text" name="matakuliah" placeholder="Matakuliah" required>
            <input type="datetime-local" name="waktu_jadwal" required>
            <button type="submit">Jadwalkan</button>
        </form>
    </main>
</body>
</html>
