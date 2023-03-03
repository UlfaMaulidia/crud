<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">New Barang</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Id</th> 
        <th>Nama Barang</th> 
        <th>Kategori</th> 
        <th>Satuan</th>
        <th>Harga Satuan</th>
        <th>Jumlah Satuan</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama_barang']."</td>";
        echo "<td>".$user_data['kategori']."</td>";    
        echo "<td>".$user_data['satuan']."</td>";    
        echo "<td>".$user_data['harga_satuan']."</td>";    
        echo "<td>".$user_data['jumlah_satuan']."</td>"; 
    }
    ?>
    </table>
</body>
</html>
