<?php
session_start();

$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

// SENİN BİLGİLERİN
$dogruMail = "b251210575@sakarya.edu.tr";
$dogruSifre = "b251210575";

// BOŞ KONTROL
if(empty($email) || empty($password)){
    header("Location: login.html");
    exit();
}

// GİRİŞ KONTROL
if($email == $dogruMail && $password == $dogruSifre){

    $_SESSION["user"] = $email;

    echo "<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Başarılı Giriş</title>

<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>

<style>
body {
  background: linear-gradient(135deg,#4f46e5,#7c3aed);
}
.box {
  max-width: 500px;
  margin: auto;
  margin-top: 100px;
}
</style>

</head>

<body>

<div class='container'>
<div class='card box p-4 text-center shadow'>

<h2 class='text-success'>Hoşgeldiniz $dogruSifre</h2>

<p class='mt-3'>Giriş başarılı</p>

<a href='index.html' class='btn btn-primary mt-3'>Ana Sayfa</a>

</div>
</div>

</body>
</html>";

} else {

    echo "<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Hata</title>

<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>

<style>
body {
  background: linear-gradient(135deg,#ef4444,#dc2626);
}
.box {
  max-width: 500px;
  margin: auto;
  margin-top: 100px;
}
</style>

</head>

<body>

<div class='container'>
<div class='card box p-4 text-center shadow'>

<h2 class='text-danger'>Hatalı giriş</h2>

<a href='login.html' class='btn btn-light mt-3'>Tekrar dene</a>

</div>
</div>

</body>
</html>";
}
?>
?>