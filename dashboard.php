<?php
session_start();
if (isset($_SESSION["username"])){
    $user=$_SESSION["username"];
}
else
    header("location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HELLO,DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <nav class="nav nav-pills flex-sm-row bg-primary">
        <a class="flex-sm-fill text-sm-start nav-link text-warning disabled" aria-current="page" href="dashboard.php">Dashboard</a>
        <a class="flex-sm-fill text-sm-start nav-link text-light disabled" href="#">User : <?=$user ;?> </a>
        <a class="flex-sm-fill text-sm-end nav-link text-light" href="logout.php">Logout</a>
</nav>
<div class="container p-5">
    <div class="row row-cols-2">
    <div class="col">
    <div class="card text-center">
        <div class="card-body">
        <a href="#">
        <img src="user.png" class="rounded mx-auto d-block" alt="..." style="witdh:150px; height:100px">
        </a>
</div>
<div class="card-footer text-muted">User
        </div>
    </div>
</div>
<div class="col">
    <div class="card text-center">
        <div class="card-body">
        <a href="tabel.php">
        <img src="barang.png" class="rounded mx-auto d-block" alt="..." style="witdh:150px; height:100px">
        </a>
</div>
<div class="card-footer text-muted">Barang
        </div>
    </div>
</div>
<div class="col">
    <div class="card text-center">
        <div class="card-body">
        <a href="#">
        <img src="keranjang.png" class="rounded mx-auto d-block" alt="..." style="witdh:150px; height:100px">
        </a>
</div>
<div class="card-footer text-muted">Order
        </div>
    </div>
</div>
<div class="col">
    <div class="card text-center">
        <div class="card-body">
        <a href="tabel_member.php">
        <img src="member.png" class="rounded mx-auto d-block" alt="..." style="witdh:150px; height:100px">
        </a>
</div>
<div class="card-footer text-muted">Kategori
        </div>
    </div>
</div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>