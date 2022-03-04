<?php
session_start();

// // Include Librari Google Client (API)
// include_once 'libraries/google-client/Google_Client.php';
// include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';

// $client_id = 'isi_dengan_client_id'; // Google client ID
// $client_secret = 'isi_dengan_client_secret'; // Google Client Secret
// $redirect_url = 'http://localhost/login_php/google.php'; // Callback URL

// // Call Google API
// $gclient = new Google_Client();
// $gclient->setApplicationName('Google Login'); // Set dengan Nama Aplikasi Kalian
// $gclient->setClientId($client_id); // Set dengan Client ID
// $gclient->setClientSecret($client_secret); // Set dengan Client Secret
// $gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login
// $google_oauthv2 = new Google_Oauth2Service($gclient);

include '../config/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = "SELECT * FROM petugas where username = '$username' and password = '$password'";
$query = mysqli_query($conn, $login);

$fecth = mysqli_num_rows($query);

if($fecth){
    $data = mysqli_fetch_assoc($query);

    if($data['id_level']=='1'){
        $_SESSION['username']=$username;
        $_SESSION['password']='$password';

        header('Location: ../pages/dashboard.php');
    }

    if($data['id_level']=='2'){
        $_SESSION['username']=$username;
        $_SESSION['password']='$password';

        header('Location: ../pages/dashboard.php');
    }
    if($data['id_level']=='3'){
        $_SESSION['username']=$username;
        $_SESSION['password']='$password';

        header('Location: ../pages/dashboard.php');
    }
}else{
    header('Location: ../pages/sign-in.php?status=gagal');
}
?>