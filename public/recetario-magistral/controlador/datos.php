<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "narma";

// Create connection
$conn1 =mysqli_connect("localhost","cna79277","PPkTstVxEJjqdaKnSDHg","cna79277_narma");
// Check connection
if (!$conn1) {
  die("Connection failed: " . mysqli_connect_error());
}

$farmacia=$_POST['codigo'];

	$sql="SELECT * from  farmacia_ad
		where id_comuna='$farmacia'";

$result=mysqli_query($conn1, $sql);

if ($result) {

	$cadena=" 
			<select id='lista2' class='form-control' name='lista2'>";

	while  ($data = $result->fetch_array()) {
		$cadena=$cadena.'<option value='.$data[0].'>'.utf8_encode($data[2]).'</option>';
	}

	echo  $cadena;
}else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
  }
  
  mysqli_close($conn1);
	

?>