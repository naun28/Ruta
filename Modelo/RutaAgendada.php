<?php
include("../Conect/conexion.php");
$id_usuario = $_POST['Lider'];
$Clave     = $_POST['Clave'];
$Escuela   = $_POST['Escuela'];
$Domicilio  = $_POST['Domicilio'];
$Localidad22     = $_POST['Localidad22'];
$Municipio      = $_POST['Municipio'];
$Zona      = $_POST['zonat'];
$Nequipos      = $_POST['Nequipos'];
$Aequipos     = $_POST['Aequipos'];
$Reequip   = $_POST['Reequip'];
$Conectividad = $_POST['Conectividad'];
$Reporte     = $_POST['Reporte'];
$Nreporte      = $_POST['NReporte'];
$FechaReporte      = $_POST['FechaReporte'];
$LevantReporte     = $_POST['LevantReporte'];
$FechaMant     = $_POST['FechaMant'];
$Visitas   = $_POST['Visitas'];
$UltimaVisita  = $_POST['UltimaVisita'];
$TipoEscuela     = $_POST['TipoEscuela'];
$ProbSolicitado      = $_POST['ProbSolicitado'];
$FechaIni    = $_POST['FechaIni'];
$FechaFin      = $_POST['FechaFin'];
$Comentarios     = $_POST['Comentarios'];
#$Lider     = $_POST['Lider'];
$nBrigada      = $_POST['nBrigada'];
#$Brigadistas      = $_POST['Brigadistas'];
// arreglo para Brigadistas
$BRIG=$_POST['Brigadistas'];
foreach ($BRIG as $valor) {
$var .= $valor;
$var .= ',';
#$var ++;
}

$Semana      = $_POST['Semana'];
$Soporte      = $_POST['Soporte'];
$Mantenimiento      = $_POST['Mantenimiento'];
$Conectiv      = $_POST['Conectiv'];
$AulaDeMedios      = $_POST['AulaDeMedios'];
$Actividad = $Soporte.",".$Mantenimiento.",".$Conectiv.",".$AulaDeMedios;

$sql="SELECT * FROM usuarios WHERE id_usuario = '".$id_usuario."'";
$result = mysqli_query($conexion,$sql);

while($row = mysqli_fetch_array($result)) {

    $Lid = $row['nombres']. " " .$row['apellidos'];
    $nbrigada=$row['nbrigada'];
   
}
$conexion   = mysqli_connect("localhost", "root", "", "rutas");
//insertando en agendadas
$q = ("INSERT INTO agendadas (id_agendada,Clave,Escuela,Domicilio,Municipio,Conectividad,ProbSolicitado,LevantReporte,Lider,nBrigada,Brigadistas,FechaIni,FechaFin,Comentarios,Localidad22,Nequipos,Aequipos,Reequip,Reporte,NReporte,FechaReporte,Visitas,UltimaVisita,FechaMant,TipoEscuela,zonat,Actividad,Semana) VALUES ('','$Clave','$Escuela','$Domicilio','$Municipio','$Conectividad','$ProbSolicitado','$LevantReporte','$Lid','$nbrigada','$var','$FechaIni','$FechaFin','$Comentarios','$Localidad22','$Nequipos','$Aequipos','$Reequip','$Reporte','$Nreporte','$FechaReporte','$Visitas','$UltimaVisita','$FechaMant','$TipoEscuela','$Zona','$Actividad','$Semana')");
$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");

//eliminando de escuelasrevisadas
$borrar  = "DELETE  FROM escuelasrevisadas WHERE Clave = '" . $Clave . "' ";
$eje_q = mysqli_query($conexion, $borrar) or die("error al insertar");


header("location: ../Vista/agendar.php");
echo "<br> Registro Insertado Correctamente! <br>";