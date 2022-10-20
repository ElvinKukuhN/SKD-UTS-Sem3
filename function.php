<?php

$conn = mysqli_connect("localhost", "root", "", "skd_uts");

if (mysqli_connect_errno()) {
    echo "Koneksi data gagal :" . mysqli_connect_error();
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}



function register($data)
{
    global $conn;

    $username = $data['username'];
    $password = $data['password'];
    $key = $data['key'];


    // Cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT user FROM chaesar WHERE user = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo
        "<script>
        alert ('username sudah terdaftar');
        </script>";
        return false;
    }

    for ($i = 0; $i < strlen($password); $i++) {
        $kode[$i] = ord($password[$i]); //rubah ASCII ke desimal
        $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    }
    $hsl = '';
    for ($i = 0; $i < strlen($password); $i++) {

        $hsl = $hsl . $c[$i];
    }
    $key2 = $data['key2'];
    // tambah user baru
    $insert = mysqli_query($conn, "INSERT INTO chaesar (user,password) VALUES('$username','$hsl')");

    if ($insert) {
        header('location:chaesar-login.php');
    } else {
?>
        <script>
            alert("Register Gagal");
            window.location.href = "register.php";
        </script>';
    <?php
    }

    return mysqli_affected_rows($conn);
}



function login($data)
{
    global $conn;
    $username = $data['username'];
    $password = $data['password'];
    $key = $data['key'];

    for ($i = 0; $i < strlen($password); $i++) {
        $kode[$i] = ord($password[$i]); //rubah ASCII ke desimal
        $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    }
    $hsl = '';
    for ($i = 0; $i < strlen($password); $i++) {

        $hsl = $hsl . $c[$i];
    }

    $result = mysqli_query($conn, "SELECT * FROM chaesar WHERE user = '$username' and password ='$hsl'");
    $row = mysqli_fetch_assoc($result);

    if (isset($row['user']) == $username && isset($row['password']) == $hsl) {
    ?>
        <script>
            alert("anda login");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Username atau password mungkin salah");
        </script>
<?php    }
}
