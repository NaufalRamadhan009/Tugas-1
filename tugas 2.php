<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br><br>

        <label for="pekerjaan">Pekerjaan:</label>
        <select name="pekerjaan" id="pekerjaan">
            <option value="Guru">Guru</option>
            <option value="Buruh">Buruh</option>
            <option value="Atlet">Atlet</option>
            <option value="Player Nana">Player Nana</option>
            <option value="S5 Tank">S5 Tank</option>
            <option value="Coach">Coach</option>
            <option value="PNS">PNS</option>
            <option value="Dokter">Dokter</option>
            <option value="Caleg">Caleg</option>
            <option value="Rektor">Rektor</option>
        </select><br><br>

        <label>Hobby:</label><br>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<input type="radio" name="hobby" value="hobby' . $i . '"> Hobby ' . $i . '<br>';
        }
        ?><br>

        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    // Proses form jika tombol "Simpan" diklik
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];

        // Tampilkan data dalam bentuk tabel
        echo '<h2>Data yang Disimpan:</h2>';
        echo '<table border="1">
                <tr>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Hobby</th>
                </tr>
                <tr>
                    <td>' . $nama . '</td>
                    <td>' . $pekerjaan . '</td>
                    <td>' . $hobby . '</td>
                </tr>
              </table>';
    }
    ?>
</body>
</html>
