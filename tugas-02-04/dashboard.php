<?php
session_start();
if (!isset($_SESSION['login'])) {
} else {
    echo header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="style-se.css">
</head>

<body>
    <div class="profile-card">
        <div class="card-header">
            <div class="pic">
                <img src="fn.png" alt="">
            </div>
            <div class="name">Falensius Mintu</div>
            <div class="desc">20192205094</div>
            <div class="sm">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-github"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>
            <a href="#" class="contact-btn">Contact Me</a>
        </div>
        <div class="card-footer">
            <div class="numbers">
                <div class="item">
                    <span><a href='logout.php'>Logout</a></center>
                    </span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>