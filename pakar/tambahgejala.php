<?php 
session_start();


include '../functions.php';
// apakah tombol submit sudah ditekan?
if( isset($_POST["submit"]) ){
    // cek apakah data berhasil dimasukkan atau tidak
    if (tambahgejala($_POST) > 0 ){
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'tabelgejala.php';
                </script>";
    }else{
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'tabelgejala.php';
                </script>";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem pakar </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style>
    body{
            background-image: url(../img/ayam.jpg);
            background-size: cover;
        }
        .tabel{
            width: 700px;
            margin: auto;
            background-color: #eee;
            padding: 20px;
        }       
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            text-decoration: none;
            color: white;
        }
        tr{
            margin-top: 10px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
   <div class="tabel">
    <h1 class="alert alert-success">Ubah Data Gejala</h1>
        <center>
    <form action="" method="post">
        <table>
            
            <tr>
                <td>KODE</td>
                <td>
                    <input type="text" name="kode" required autofocus="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><br></td>
            </tr>

            <tr>                                
                <td>PERTANYAAN</td>
                <td>
                     <textarea name="pertanyaan" id="" required></textarea>
                </td>
                <br>
            </tr>
            <tr>                                
                <td>JAWABAN</td>   
                <td>
                    <input type="radio" name="jawaban" value="ya">Ya
                    <input type="radio" name="jawaban" value="tidak">Tidak
                </td>
                <br>
            </tr>            
            <tr>
                <td colspan="2">
                    <center><button type="submit" name="submit" class="btn btn-primary">Tambah Data!</button></center>
                </td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button type="submit" class="btn btn-success"><a href="tabelpenyakit.php">Kembali</a></button></center>             
                </td>
            </tr>
        </table>
    </form>
    </center>
    </div>
        
</body>

</html>