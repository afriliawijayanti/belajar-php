<?php
 //tangkap data dari form submit
if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

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
   $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

   //jalankan query
   if (mysqli_query($con, $sql)) {
       echo "Data berhasil dihapus";
   } else {
        echo "Ada error: " . $sql . "<br>" . mysqli_error($con);
   }
     
   mysqli_close($con);
}

?>