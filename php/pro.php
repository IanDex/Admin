<?php


require('conn.php');


//$sql = "SELECT * FROM InscripcionPF group by Apellido order by Fecha desc";
 $sql = "SELECT aulas_fundacion_telefonica.InscripcionPF.*, aulas_fundacion_telefonica.Departamento.nombre FROM aulas_fundacion_telefonica.InscripcionPF INNER JOIN aulas_fundacion_telefonica.Departamento ON aulas_fundacion_telefonica.InscripcionPF.Departamento = aulas_fundacion_telefonica.Departamento.id_departamento order by Fecha desc";
$result = mysqli_query($conexion, $sql);

if (!$result) {
  // code...
  die("Error");
}else {
  while($row = mysqli_fetch_assoc($result)){
    $data["data"][] = $row;
  }
  echo json_encode($data);

}
mysqli_free_result($result);
mysqli_close($conexion);

?>
