<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "narma";

// Create connection
$conn1 = mysqli_connect("localhost","cna79277","PPkTstVxEJjqdaKnSDHg","cna79277_narma");
// Check connection
if (!$conn1) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql ="SELECT * FROM comuna";
$result=mysqli_query($conn1, $sql);
if ($result) {
    while ($data = $result->fetch_array()) {
        $datos[] = [
            'codigo' => $data['id_comuna'],
            'nombre' => $data['nombre']
        ];
        
    }
   
    echo json_encode($datos);
    

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
}

mysqli_close($conn1);




           
        

 
?>