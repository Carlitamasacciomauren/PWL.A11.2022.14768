<?php include ('koneksi.php')?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Produk </title>
        <style type="text/css">
      * {
        font-family: "Trebuchet MS";
        }
        h1 {
        text-transform: uppercase;
        color: #9933FF;
        }
    button {
            background-color: #9999FF;
            color: #330066;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
            border: 0px;
            margin-top: 20px;
    }
    label {
        margin-top: 10px;
        float: left;
        text-align: left;
        width: 100%;
    }
    input {
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #FF9CEE;
        outline-color: #FF9CEE;
    }
    div {
        width: 100%;
        height: auto;
    }
    .base {
        width: 400px;
        height: auto;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        background: #DCD3FF;
    }
    </style>
    </head>
    <body>
        <center>
        <h1>Tambah Produk</h1>
        <center>
        <form method="POST" action="prosestambah_member.php" enctype="multipart/form-data" >
        <section class="base">
        <div>
            <label>Nama kategori</label>
            <input type="text" name="nama_kategori" autofocus="" required="" autocomplete="off"/>
        </div>
        <div>
            <label>Keterangan</label>
            <input type="text" name="keterangan" autocomplete="off"/>
        </div>
        <div>
            <label>gambar</label>
            <input type="file" name="gambar"/>
        </div>
        <div>
        <button type="submit">Simpan Produk</button>
        </div>
        </section>
        </form>
    </body> 
</html>