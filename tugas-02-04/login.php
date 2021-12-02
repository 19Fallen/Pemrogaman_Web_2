<?php
error_reporting(0);
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == 'admin' and $pass == '123') {
        session_start();
        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
    } else {
        $salah = "<p style='color:red; text-align: center;'> username atau password salah</p>";
    }
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <?php echo $salah; ?>
            <label>Username</label><br>
            <input type="text" name="username"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <button type="submit" name="login">Log-in</button>
        </form>
    </div>
</body>

</html>