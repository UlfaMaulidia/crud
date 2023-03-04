<html>
<head>
    <title>Pembelian</title>
</head>
 
<body>
    <a href="index.php">View Barang</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td>
                    <label for="kategori">Pilih Kategori:</label>
                    <select name="kategori" id="kategori">
                      <option value="Makanan">Makanan</option>
                      <option value="Minuman">Minuman</option>
                      <option value="Sayuran">Sayuran</option>
                      <option value="Buah">Buah</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td>Satuan</td>
                <td>                    
                    <form>
                        <input type="radio" name="satuan" value="satuan"/> Bungkus
                        <input type="radio" name="satuan" value="satuan"/> Kardus
                    </form>
                </td>
            </tr>
            <tr> 
                <td>Harga Satuan</td>
                <td><input type="text" name="harga_satuan"></td>
            </tr>
            <tr> 
                <td>Jumlah Satuan</td>
                <td><input type="text" name="jumlah_satuan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php

    // id nama_barang kategori satuan harga_satuan jumlah_satuan total
    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $kategori = $_POST['kategori'];
        $satuan = $_POST['satuan'];
        $harga_satuan = $_POST['harga_satuan'];
        $jumlah_satuan = $_POST['jumlah_satuan'];
        $total = ($_POST['harga_satuan'] * $_POST['jumlah_satuan']) - (0.2 * ($_POST['harga_satuan'] * $_POST['jumlah_satuan']));
    
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO barang(nama_barang, kategori, satuan, harga_satuan, jumlah_satuan, total) VALUES('$nama_barang','$kategori','$satuan','$harga_satuan','$jumlah_satuan','$total')");
        
        echo "User added successfully. <a href='index.php'>View Barang</a>";
    }
    ?>
</body>
</html>
