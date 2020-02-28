<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>Hotel Sejahtera</h1></center>
    <center><table border="1" width="80%" ></table></center>
    
    <tr>
    <th bgcolor="pink">nama</th>
    <th bgcolor="pink">password</th>
    <th bgcolor="pink">telp</th>
    <th bgcolor="pink">no_kamar</th>
    <th bgcolor="pink">lama_inap</th>
    </tr>

    <?php
    include 'koneksi.php';
    $query = "SELECT* FROM masuk";
    $sql = mysqli_query($koneksi,$query);

    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>". $data['nama']."</td>";
        echo "<td>". $data['password']."</td>";
        echo "<td>". $data['telp']."</td>";
        echo "<td>". $data['no_kamar']."</td>";
        echo "<td>". $data['lama_inap']."</td>";
        echo "</tr>";
    }
?>
</body>
</html>