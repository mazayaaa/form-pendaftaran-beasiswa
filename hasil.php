<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa - Hasil</title>
    <style>
        header {
            background-color:white
            color: aliceblue;
            padding: 5px;
        }

        body {
            background-color: rgb(178, 213, 244);
            color: black;
            margin-left: 5rem;
            margin-right: 5rem;
        }
    </style>
</head>

<body>
    <table>

    <header>
        <h1>
            <center>Hasil Pendaftaran Beasiswa Fakultas Ilmu Komputer</center>
        </h1>
    </header>

    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $npm = $_POST["NPM"];
            $ttl = $_POST["ttl"];
            $email = $_POST["email"];
            $alamat = $_POST["alamat"];
            $pendidikan = $_POST["pendidikan"];
            $jurusan = $_POST["jurusan"];
            $ipk = $_POST["ipk"];

            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>NPM:</strong> $npm</p>";
            echo "<p><strong>Tanggal Lahir:</strong> $ttl</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>Pendidikan Terakhir:</strong> $pendidikan</p>";
            echo "<p><strong>Jurusan:</strong> $jurusan</p>";
            echo "<p><strong>IPK:</strong> $ipk</p>";
        } else {
            echo "<p>Form belum disubmit. Silakan isi dan submit form terlebih dahulu.</p>";
        }
        ?>
    </div>

    </table>
    
</body>

</html>
