<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    
    <center>
        <form action="hasil.php" method="post" enctype="multipart/form-data">
            <table>
            <header>
                 <h1>
                     <center>Formulir Pendaftaran Beasiswa</center>
                     <center>Fakultas Ilmu Komputer</center>
                 </h1>
            </header>
                <tr>
                    <td><label for="nama">Nama:</label></td><br>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td><label for="NPM">NPM:</label></td>
                    <td><input type="text" name="NPM" required></td>
                </tr>
                <tr>
                    <td><label for="ttl">Tanggal Lahir:</label></td>
                    <td><input type="date" name="ttl" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat:</label></td>
                    <td><textarea name="alamat" rows="5" cols="50" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="pendidikan">Pendidikan Terakhir:</label></td>
                    <td>
                        <select name="pendidikan" required>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="Pascasarjana">Pascasarjana</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan:</label></td>
                    <td>
                        <input type="radio" name="jurusan" value="Informatika" required>Informatika <br>
                        <input type="radio" name="jurusan" value="Sistem Informasi" required>Sistem Informasi <br>
                        <input type="radio" name="jurusan" value="Sains Data" required>Sains Data <br>
                        <input type="radio" name="jurusan" value="Bisnis Digital" required>Bisnis Digital
                    </td>
                </tr>
                <tr>
                    <td><label for="ipk">IPK:</label></td>
                    <td><input type="number" name="ipk" min="0" max="4" step="0.01" required></td>
                </tr>
                <tr>
                    <td><label for="file">File Transkrip Nilai (PDF):</label></td>
                    <td><input type="file" name="file" accept=".pdf" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br><center><input type="submit" value="Submit">
                        <input type="reset" value="Reset"></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>