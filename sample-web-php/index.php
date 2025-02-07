<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apache PHP Landing Page Sequel.idn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
        }
        .menu {
            background-color: #222;
            padding: 10px 0;
        }
        .menu a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        .menu a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="?page=home">Home</a>
        <a href="?page=layanan">Layanan</a>
        <a href="?page=kontak">Kontak</a>
    </div>
    <div class="container">
        <?php
        if ($page == 'layanan') {
            include 'layanan.php';
        } elseif ($page == 'kontak') {
            include 'kontak.php';
        } else {
            include 'home.php';
        }
        ?>
    </div>
</body>
</html>
