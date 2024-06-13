<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Praktikum 9</title>
</head>
<body>
<form method="POST" action="action.php" >
Nama Anda = <input type="text" name="nama"><br>
Email Anda = <input type="email" name="email"><br>
Alamat Anda = <textarea name="pesan">
</textarea><br>
<input type="submit" name="kirim" value="send">
</form>
<?php
if (isset($_POST ['kirim'])) {
echo "Nama Anda : $_POST[nama]< br>";
echo "Email Anda : $_POST[email]<br>";
echo "Alamat Anda : $_POST[pesan]<br>";
}
?>
</body>
</html>