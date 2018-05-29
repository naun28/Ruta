
<?php
session_start();
unset($_SESSION["nombres"]);
$correo = trim($_POST['correo']);
$password = trim($_POST['pass']);

$db   = "rutas";
$host = "localhost";
$pw   = "";
$user = "root";

if (empty($correo) || empty($password)) {
    header("location: ../Vista/login.php");
    echo "";
    exit();

}

//require_once('singleton.php');

$con = mysqli_connect($host, $user, $pw, $db) or die("Error al conectar " . mysql_error());

$query  = "SELECT * FROM usuarios WHERE correo = '$correo' AND pass = '$password'";
$result = mysqli_query($con, $query);
$row    = mysqli_fetch_assoc($result);
if (!isset($row)) {
    header("location: ../Vista/login.php");
}

$nombres   = $row["nombres"];
$apellidos = $row["apellidos"];
$tipouser     = $row['tipouser'];
$id_usuario  = $row['id_usuario'];
$correo   = $row['correo'];
$password = $row['pass'];

if ($tipouser === "Administrador") {
    if ($row["correo"] === $correo && $row["pass"] === $password) {
        session_start();
        $_SESSION["nombres"]   = $nombres;
        $_SESSION["apellidos"] = $apellidos;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["correo"] = $correo;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/inicio.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
}else if ($tipouser === "Mesa") {
    if ($row["correo"] === $correo && $row["pass"] === $password) {
        session_start();
        $_SESSION["nombres"]   = $nombres;
        $_SESSION["apellidos"] = $apellidos;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["correo"] = $correo;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/inicioMesa.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
}else if ($tipouser === "Brigadista" || $tipouser === "Jefe de brigada") {
    if ($row["correo"] === $correo && $row["pass"] === $password) {
        session_start();
        $_SESSION["nombres"]   = $nombres;
        $_SESSION["apellidos"] = $apellidos;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["correo"] = $correo;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/inicioBrigada.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
}  



/*elseif ($Tipo == '2') {
    if ($row["Contrasena"] === $password && $row["Usuario"] === $username) {
        session_start();
        $_SESSION["nombre"]   = $nombre;
        $_SESSION["apellido"] = $apellido;
        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/inicioadmin.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
} elseif ($Tipo == '3') {
    if ($row["Contrasena"] === $password && $row["Usuario"] === $username) {
        session_start();
        $_SESSION["nombre"]   = $nombre;
        $_SESSION["apellido"] = $apellido;
        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/Bienvenidacont.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }

}*/

?>
