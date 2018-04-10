<?php 
include '../Conect/conexion.php';
$q = "SELECT * FROM usuarios ORDER BY id_usuario Desc";
$ejecutar_q = mysqli_query($conexion, $q);
if (!$ejecutar_q) {
    die("ERROR");
}else{
    while ($data = mysqli_fetch_assoc($ejecutar_q)) {
        $arreglo["data"][] = $data;
    }
    echo json_encode($arreglo);
}
mysqli_free_result($ejecutar_q);
mysqli_close($conexion);

   /* while ($row = $ejecutar_q->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['id_usuario']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['tipouser']; ?></td>
            <td><?php echo $row['nbrigada']; ?></td>

        </tr>
        <?php
    } */ 
    ?> 