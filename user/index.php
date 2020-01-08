<?php 

if( isset($_SESSION["login"]) ){
    header("Location:../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body{
            background-image: url(../img/ayam.jpg);
            background-size: cover;
        }
        .table{
            width: 500px;
        }
        .tabell{
            width: 700px;
            margin: 100px auto;
            
            padding: 20px;
            background-image: url(../img/upfeathers.png);

        }       
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            text-decoration: none;
            color: white;
        }
    </style>
    <title>Index User</title>
</head>

<body>
    <div class="tabell" style=" background-image: url(../img/triangular_@2X.png);">
    <center>
        <h1 class="alert alert-success">SELAMAT DATANG DI MENU USER</h1>
        <h4><u>SILAHKAN JAWAB PERTANYAAN DIBAWAH</u></h4>
        <form action="proses.php" method="POST">
        <table class="table">
            <tr>
                <td align="center" colspan="2">
                    <?php 
                    session_start();
                    include('../functions.php');
                    $no = $_SESSION['no'];
                    $query = mysqli_query($konek, "SELECT * FROM gejala WHERE no = '$no' ");
                    $data = mysqli_fetch_array($query);
                    // echo $no.'. ';
                    echo $data['pertanyaan'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="jawaban" value="ya">YA
                </td>
                <td>
                    <input type="radio" name="jawaban" value="tidak">TIDAK
                </td>
            </tr>            
        </table>        
        <input type="submit" name="simpan" value="SIMPAN">
        </form>
    </center>
</div>
</body>

</html>