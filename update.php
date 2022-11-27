<?php 

if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

// 1. Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","fakultas");

// 2. Cek koneksi dengan MySQL
if (mysqli_connect_errno()) {
    echo "Koneksi gagal " . mysqli_connect_error();
}else{
    echo 'koneksi berhasil';
}

// 3. membaca data dari table mysql.
$sql = "SELECT * FROM mahasiswa WHERE id=$id";

// 4. tampilkan data, dengan menjalankan sql query
    if ($result = mysqli_query($con, $sql)) {
        echo "<br>data tersedia";
        while($user_data = mysqli_fetch_assoc($result)) {
            $nim = $user_data['nim'];
            $nama = $user_data['nama'];
            $id_jurusan = $user_data['id_jurusan'];
            $tpt_lahir = $user_data['tempat_lahir'];
            $tgl_lahir = $user_data['tanggal_lahir'];
            $gender = $user_data['jenis_kelamin'];
            $alamat = $user_data['alamat'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

// 5. tutup koneksi mysql
    mysqli_close($con);
}

// tangkap data dari form submit
if (isset($_POST['submit'])){
    //var_dump($_POST);
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

   // 1. Buat koneksi dengan MySQL
   $con = mysqli_connect("localhost","root","","fakultas");

    // 2. Cek koneksi dengan MySQL
    if (mysqli_connect_errno()) {
        echo "Koneksi gagal " . mysqli_connect_error();
    }else{
        echo "koneksi berhasil";
    }

    // buat sql query untuk insert ke database
    // buat query insert dan jalankan
    $sql = "UPDATE mahasiswa SET nim='$nim',nama='$nama',id_jurusan='$id_jurusan',tempat_lahir='$tpt_lahir',
    tanggal_lahir='$tgl_lahir',alamat='$alamat' WHERE id='$id' ";

    //jalankan query
    if (mysqli_query($con, $sql)) {
        echo "Data berhasil ditambah";
    } else {
        echo "Ada rror: " . mysqli_error($con);
    }
      
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>  
    <?php if(isset($_GET['id'])): ?>
    <form action="" method="post">
        NIM: <input type="text" name="nim" value="<?php echo $nim; ?>"><br>
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
        ID Jurusan: <input type="number" name="id_jurusan" value="<?php echo $id_jurusan; ?>"><br>
        Jenis Kelamin: <input type="text" name="gender" value="<?php echo $gender; ?>"><br>
        Tempat Lahir: <input type="text" name="tpt_lahir" value="<?php echo $tpt_lahir; ?>"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
        <button type="submit" name="submit">Update Data</button>
    </form>
    <?php endif; ?>
</body>
</html>