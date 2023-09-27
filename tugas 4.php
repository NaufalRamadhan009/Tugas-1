<?php
function cekLogin($username, $password) {
    $usernamePengguna = "admin";
    $passwordPengguna = "mimin";
    if ($username === $usernamePengguna && $password === $passwordPengguna) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Tidak Dapat Login Karena Username Atau Password Salah";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    cekLogin($username, $password);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="post" action="tugas 4.php">
        <label for="username">Username:</label>
        <input type="text" placeholder="Masukan Username Anda" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" placeholder="Masukan Password Anda" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>