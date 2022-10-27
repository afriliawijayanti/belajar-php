<?php
    
    $nama ="Afrilia";
    /*
    echo $nama;
    echo "<br";
    echo $nama;
    echo "<br";
    echo $nama;
    echo "<br";
    echo $nama;
    echo "<br";
    echo $nama;
    */

    /*
    $no = 10;
    for ($i=0; $i<$no; $i++){
        $n = $i + 1;
        each $n." ".$nama."<br>";
    }
    */

    /*
    $no = 10;
    $i = 0;

    while ($i<$no) {
        $n = $i + 1;
        echo $n." ".$nama."<br>";
        $i++;
    }
    */

    
    /*
    $no = 10;
    $i = 0;

    do {
        $n = $i + 1;
        echo $n." ".$nama."<br>";
        $i++;
    } while ($i<$no)
    */

    /*
    $data = array('Avansa', 'Lamborghini', 'Tesla', 'xenia', 'Xpander', 'Rubicar');

    $i = 0;
    while ($i < count ($data)) {
        echo $data[$i]."<br>";
        $i++;
    }
    */

    /*
    foreach($data as $value) {
        echo $value."<br>";
    }
    */


    // PERCABANGAN
    /*
    if ($nama == "Afrilia") {
        echo $nama." adalah orang Jawa";
    } else if ($nama == "Lia") {
        echo $nama." berasal dari pulau Bali";
    } else {
        echo $nama." darimana ya?";
    }
    */

    /*
    switch($nama) {
        case "Afrilia":
            $pesan = $nama." adalah orang Jawa";
        break;
        case "Lia":
            $pesan = $nama." berasal dari pulau bali";
        break;
        default:
            $pesan = $nama." darimana ya?";
    }
    echo $pesan;
    */
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Afrilia":
                    $pesan = $_POST['nama']." adalah orang Ngawi";
                break;
                case "Lia":
                    $pesan = $_POST['nama']." berasal dari Jawa Timur";
                break;
                default:
                    $pesan = $_POST['nama']." dari mana ya?";
        }  

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
            }

    } else {
        echo "Anda belum input nama dan jumlah";
    }
    ?>
</body>
</html>
