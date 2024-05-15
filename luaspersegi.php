<html>
    <head>
        <title>Hitung Luas Persegi Panjang</title>
    </head>
    <body>
        <h2>Hitung Luas Persegi Panjang</h2>
        <h3>Isi Panjang dan Lebar :</h3>
        <form action="luaspersegi.php" method="post">
        <table>
            <tr>
                <td>Panjang</td>
                <td><input type="number" name="panjang" min="0" required></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td><input type="number" name="lebar" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="hasil"></td>
            </tr>

        </table>
        </form>
        <?php
        // Menghitung luas persegi panjang
        if (isset($_POST['submit'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $luas = $panjang * $lebar;
            echo "Luas Persegi Panjang adalah $luas";
        }
        ?>
    </body>
</html>

