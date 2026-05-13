<?php

echo "<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Form Sonuç</title>

<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'>

<style>
body {
  background: linear-gradient(135deg, #4f46e5, #7c3aed);
}
.result-box {
  max-width: 650px;
  margin: auto;
  margin-top: 80px;
}
.card {
  border-radius: 15px;
}
.label {
  font-weight: bold;
  color: #4f46e5;
}
</style>

</head>
<body>

<div class='container'>
<div class='card result-box p-4 shadow'>

<h3 class='text-center mb-4'>Gönderilen Bilgiler</h3>
";

// ❗ BOŞ POST KONTROL
if(empty($_POST)){
    echo "<div class='alert alert-danger'>Veri gönderilmedi</div>";
    echo "<a href='iletisim.html' class='btn btn-light mt-3'>Geri Dön</a>";
    exit();
}

// 🔥 VERİLERİ GÜVENLİ YAZDIR
foreach($_POST as $key => $value){

    // XSS koruma
    $key = htmlspecialchars($key);
    
    echo "<div class='mb-3'><span class='label'>$key:</span> ";

    if(is_array($value)){
        foreach($value as $v){
            echo htmlspecialchars($v) . " ";
        }
    } else {
        echo htmlspecialchars($value);
    }

    echo "</div>";
}

echo "

<div class='text-center mt-4'>
<a href='iletisim.html' class='btn btn-light'>Geri Dön</a>
</div>

</div>
</div>

</body>
</html>";

?>

?>