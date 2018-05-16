<?php 
$conn = mysqli_connect("localhost","vidavegetarianausr","18vidavegetariana@2018","vidavegetarianadb");

if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Usuario (sexo, idade, veg, tec, p1, p2, p3, p4) VALUES ('".$_POST["sexo"]."','".$_POST["idade"]."','".$_POST["veg"]."','".$_POST["tec"]."','".$_POST["p1"]."','".$_POST["p2"]."','".$_POST["p3"]."','".$_POST["p4"]."')";

$result = mysqli_query($conn,$sql);
mysqli_close($conn);
?>