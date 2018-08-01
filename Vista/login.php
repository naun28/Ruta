<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <?php include "../Section/css.php";?>
     <style>
    html,body {

        background-color: #ebe9e5;
        color: red;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        text-shadow: 5px 5px 15px 15px #434343;


    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: red;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    #img{
        position: fixed;
        filter: blur(4px);
        width: 100%;
        height: 100%;

    }
     
</style>

   
</head>
<body class="gray-bg" >
  <div>
    <img id="img" src="../Include/img/maps.png" alt="">
  
<div class="middle-box loginscreen animated fadeInDown" >
        <div >
            <div >
                <br><br><br><br>
                <img class="logo-name" src="../Include/img/log.png" alt="" style="width: 300px; height: 135px;">
            </div>
              <form method="POST" action="../Modelo/validalogin.php" autocomplete="on" >

                    <div class="form-group">
                        <label for="Correo">Correo</label>
                        <input style="color: black;font-weight: bold;" class="form-control" type="email" name="correo" required autofocus="on" autocomplete="off" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <label for="pass" >Contraseña</label>
                        <input style="color: black;font-weight: bold;" class="form-control" type="password" name="pass" autocomplete="off" required onkeypress="return checkPassword(event)" placeholder="Contraseña">
                    </div>

                    <button class="btn btn-danger block full-width m-b"  type="submit" name="action">Entrar</button>

                    <?php
                    if (isset($_GET['error']) == true) {
                        echo "<font style='color: red; font-weight: bold;'><p><center>Usuario o contraseña incorrecto</center></p></font>";
                    }
                    ?>

                </form>
           <center><p class="m-t"> <small>Secretaria de Educacion y Cultura &copy; 2018</small> </p></center> 
        </div>
    </div>
<script type="text/javascript">
  function checkPassword(e){
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
}

</script>
</div>

</body>
</html>