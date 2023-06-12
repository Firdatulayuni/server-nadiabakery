<?php
include("koneksi.php");

if (isset($_POST['login'])) {
    $username = $_POST['username_login'];
    $password = $_POST['password_login'];

    $query = mysqli_query($conn,"select * from admin where username_admin='$username' and password_admin='$password'");
    $query2 = mysqli_query($conn,"select * from pelanggan where username_pel='$username' and password_pel='$password'"); 
    $cek = mysqli_num_rows($query);
    $cek2 = mysqli_num_rows($query2);
    if (($cek>=1) AND ($cek2==0)) {
        session_start();
        $_SESSION['username'] = $username;
        while($hasil = mysqli_fetch_array($query)){
        $_SESSION['role'] = $hasil['role'];
        }
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Anda dikenali sebagai Admin');
        window.location.href='dash_admin/index.php';
        </script>");   
    }elseif (($cek>='0') AND ($cek2==1)) {
        session_start();
        $_SESSION['username'] = $username;
        while($hasil = mysqli_fetch_array($query2)){
        $_SESSION['role'] = $hasil['role'];
        }
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Anda dikenali sebagai Customer');
        window.location.href='index.php';
        </script>");  
    }else {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Username/Password salah');
        window.location.href='login.php';
        </script>");
    }
}elseif(isset($_POST['regis'])) {
    $username = $_POST['username_regis'];
    $password = $_POST['password_regis'];
    $nama = $_POST['nama_regis'];
    $telp = $_POST['telp_regis'];

    $query2 = mysqli_query($conn,"select * from pelanggan where username_pel='$username'"); 
    $cek2 = mysqli_num_rows($query2);
    echo $cek2;
    
    if ($cek2==0) {
        $sql = mysqli_query($conn,"insert into pelanggan values('$username','$password','$nama','$telp',2)");
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Regitrasi Berhasil, Silahkan Log in.');
        window.location.href='login.php';
        </script>");
        
    } elseif ($cek2>0){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Pilih Username Lainnya');
        window.location.href='login.php';
        </script>");
    }
    

}
//        window.location.href='login.php';
//register

?>