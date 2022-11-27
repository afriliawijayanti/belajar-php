<?php
// 1. buat koneksi dengan MYSQL
$con = mysqli_connect("localhost","root","","fakultas");

// 2. Cek koneksi dengan MYSQL
if(mysqli_connect_errno()){
    echo "Koneksi gagal". mysqli_connect_error;
}else{
    echo "Koneksi berhasil";
}

// 3. Membaca data dari table mysql
$query = "SELECT * FROM mahasiswa";

// 4. Tampilkan data dengan menjalankan sql query
$result = mysqli_query ($con,$query);
$mahasiswa = [];
if ($result){
    // Tampilkan data satu persatu
    while($row = mysqli_fetch_assoc($result)){
        //echo "<br>".$row["nama"]." alamat : ".$row["alamat"];
        $mahasiswa[] = $row;
    }
    mysqli_free_result($result);
    //$row = mysqli_fetch_assoc($result);
    
    //var_dump($row);
    //echo $row["nama"];
    //echo $row["alamat"];
}

// 5. tutup koneksi mysql
mysqli_close($con);

/* foreach($mahasiswa as $value){
    echo $value["nama"];
}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="insert.php">Tambah Data</a>
    <table border="1" style="width:100%">
        <tr>
            <th>NIM</th>
            <th>Nama</th> 
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php foreach($mahasiswa as $row):?>
            <tr>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jenis_kelamin'] ?></td>
                <td><?= $row['tempat_lahir'] ?></td>
                <td><?= $row['tanggal_lahir'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>" >Edit</a>  
                    <a href="delete.php?id=<?= $row['id'] ?>" >Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>