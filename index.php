<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .center{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
        }
        .item {
            width: 40%;
            padding: 20px;
            border: 3px solid grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="center">
            <div class="item">
            <h2 class="text-center">Login Administrator</h2>
            <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">User</label>
                <input type="text" class="form-control" id="username" aria-describedby="userHelp" name="username" required>
    </div>
    <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="password" required>
    </div>
    <div class="mb-3 text-center">
            <button type="submit" class="btn btn-success form-control mt-1" name="loginbtn">Login</button>
    </div>
    </form>
    </div>
        <div class="mt-3">
            <?php
                session_start();
                include "koneksi.php";

                $username="";
                $password="";
                    if (isset($_POST["loginbtn"])){
                        $user=$_POST["username"];
                        $pass=$_POST["password"];
                        $sql="SELECT * FROM `user` WHERE `username` = '$user' AND `password` = '$pass'";
                        $hasil=$koneksi->query($sql);
                            if ($rec=$hasil->fetch_assoc()) {
                                header("location:dashboard.php");
                            }else {
                                echo "<div style='text-align:center; color:red;'>*user tidak valid...</div>";
                            }
                        }
                    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>