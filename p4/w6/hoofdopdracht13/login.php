<?php
require 'includes/db.php';

$melding = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->execute([
'username' => $username
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
$melding = "Gebruiker bestaat niet.";
} else {

if (password_verify($password, $user['password'])) {
$melding = "Succesvol ingelogd!";
} else {
$melding = "Fout wachtwoord.";
}
}
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>

<h1>Login</h1>

<form method="POST" action="">
<label>Username</label><br>
<input type="text" name="username"><br><br>

<label>Password</label><br>
<input type="password" name="password"><br><br>

<button type="submit">Login</button>
</form>

<hr>

<p><?= $melding ?></p>

</body>
</html>