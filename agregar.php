<html>
<head> 
<title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body BGCOLOR="#ffffff" text="#000">

<?php 
$autor = $_POST["autor"];
$comentario = $_POST["comentario"];
$fecha = date('Y-m-d H:i:s');

$cons_usuario="edwinmtz";
$cons_contra="Luisedwinmtz0809";
$cons_base_datos="edwinmtz";
$cons_equipo="mysql.webcindario.com";

$obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
$sql = "INSERT INTO mitabla (autor, comentario, fecha) VALUES ('$autor', '$comentario', '$fecha')";
if (mysqli_query($obj_conexion, $sql))  {
    echo "Nuevo registro creado exitosamente";    
} else {
    echo "Error: " . $sql . "</br>" . mysqli_error($conn);
}
mysqli_closed($obj_conexion);

echo"<center><br><br><font face=calibri> TU COMENTARIO FUE ENVIADO CORRECTAMENTE..<br><b>$autor</font></b><br><br>";
echo 'a href="index.php">Regresar<a> </center>';
?>

</body>
</html>