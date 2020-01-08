<?php 

$konek = mysqli_connect('remotemysql.com','R1z0LZ7gwW',' q4cgHAdLpT','R1z0LZ7gwW');

function query($query){
	global $konek;
	$result = mysqli_query($konek, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)){
		$rows[]= $row;
	}
	return $rows;
}

function query2($query2){
	global $konek;
	$result2 = mysqli_query($konek, $query2);
	$rows2 = [];
	while ( $row2 = mysqli_fetch_assoc($result2)){
		$rows2[]= $row2;
	}
	return $rows2;
}

function tambahpenyakit($data){
	global $konek;

	
	$baat = htmlspecialchars($data["kode"]);
	$penyakit = htmlspecialchars($data["penyakit"]);
	$solusi = htmlspecialchars($data["solusi"]);

	// query insert data
	$query = "INSERT INTO saran VALUES ('', '$baat', '$penyakit', '$solusi')";
	mysqli_query($konek, $query);
	return mysqli_affected_rows($konek);
}

function tambahgejala($data){
	global $konek;

$kode = htmlspecialchars($data["kode"]);
$pertanyaan =  htmlspecialchars($data["pertanyaan"]);
$jawaban = htmlspecialchars($data["jawaban"]);

$query = "INSERT INTO gejala VALUES ('', '$kode', '$pertanyaan', '$jawaban')";
	mysqli_query($konek, $query);
	return mysqli_affected_rows($konek);

}

function hapuspenyakit($id){
	global $konek;
	mysqli_query($konek, "DELETE FROM saran WHERE id=$id");
	return mysqli_affected_rows($konek);
}

function hapusgejala($id){
	global $konek;
	mysqli_query($konek, "DELETE FROM gejala WHERE no=$id");
	return mysqli_affected_rows($konek);
}


function ubahpenyakit($data){
	global $konek;

	$id = $data["id"];	
	$baat = htmlspecialchars($data["kode"]);
	$penyakit = htmlspecialchars($data["penyakit"]);
	$solusi = htmlspecialchars($data["solusi"]);

	// query insert data
	$query = "UPDATE saran SET				
				kode = '$baat',
				penyakit = '$penyakit',
				solusi = '$solusi'
				WHERE id ='$id'
				";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

function ubahgejala($data){
	global $konek;

	$id = $data["id"];	
	$kode = htmlspecialchars($data["kode"]);
	$pertanyaan =  htmlspecialchars($data["pertanyaan"]);
	$jawaban = htmlspecialchars($data["jawaban"]);

	// query insert data
	$query = "UPDATE gejala SET				
				id = '$kode',
				pertanyaan = '$pertanyaan',
				jawaban = '$jawaban'
				WHERE no ='$id'
				";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

function carigejala($keyword){
	$query = "SELECT * FROM gejala 
				WHERE			
				pertanyaan LIKE '%keyword%'	

				OR id LIKE '%keyword%'	
				-- OR pertanyaan LIKE '%keyword%'			
				";
		return query($query);
}

function inputnilai($data){
	global $konek;

	$id = $_POST["id"];

	// query update data

	$query = "UPDATE user SET
			hasil = '$_SESSION[nilai]' 
			WHERE id = '$id'
			";
	mysqli_query($konek, $query);
}
?>
