<?php
include 'koneksi.php';

        // membuat variabel untuk menampung data dari form
$nama_kategori  = $_POST['nama_kategori'];
$keterangan     = $_POST['keterangan'];
$gambar         = $_FILES['gambar']['name'];


if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg'); 
    $x = explode('.', $gambar); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar; 

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 

                    $query = "INSERT INTO `member` (`id`, `nama_kategori`, `keterangan`,`gambar`) VALUES (NULL, '$nama_kategori', '$keterangan','$nama_gambar_baru')";
                    $result = mysqli_query($koneksi, $query);
            
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='tabel_member.php';</script>";
                    }

                    } else {     
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg jpeg atau png.');window.location='prosestambah_member.php';</script>";
                }
                    } else {
                        $query ="INSERT INTO `member` (`id`, `nama_kategori`, `keterangan`,`gambar`) VALUES (NULL, '$nama_kategori', '$keterangan','$nama_gambar_baru')";
                        $result = mysqli_query($koneksi, $query);
                    
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
                    } else {
                        echo "<script>alert('Data berhasil ditambah.');window.location='tabel_member.php';</script>";
                    }
}
