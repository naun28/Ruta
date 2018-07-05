
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../Include/img/perfil.jpg" />
                             </span>
                        
                               <span class="clear" style="color: white;"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo utf8_encode($_SESSION["nombres"]); ?>&nbsp;<?php echo utf8_encode($_SESSION["apellidos"]); ?></strong>
                             </span> <span class="text-muted text-xs block" style="color: white;"><?php echo $_SESSION["tipouser"]; ?> </span> 
                    </div>
                    <div class="logo-element">
                        SEC
                    </div>
                </li>
                <?PHP include "../Section/url.php";?>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-danger " href="#"><i class="fa fa-bars"></i> </a>
            <form class="navbar-form-custom">
               <div>
                <img src="../Include/img/log.png" alt="" style="width: 150px; height: 70px;">
            </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                    <script type="text/javascript">
                        function getTimeAJAX() {   
                            var time = $.ajax({
                                url: '../Controlador/horaser.php', //indicamos la ruta donde se genera la hora
                                dataType: 'text',//indicamos que es de tipo texto plano
                                async: false     //ponemos el parámetro asyn a falso
                            }).responseText;
                            //actualizamos el div que nos mostrará la hora actual
                            var horis= time;
                            document.getElementById("myWadtch").innerHTML = time;
                        }
                        //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
                        setInterval(getTimeAJAX,1000);
                    </script>
                    <b><span id='myWadtch'></span></b>
                    <!-- <span class="m-r-sm text-muted welcome-message">
                         <?php
                       /* date_default_timezone_set('America/Hermosillo');

                            $hora= date ("h:i:s ");

                            $fecha= date ("j/n/Y");
                            echo $hora; echo $fecha;*/
                            ?>
                    </span> -->
                </li>
                
                <li>
                    <a href="../Controlador/Salir.php">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>
        </nav>
        </div>
        <!-- AQui va elcontenido-->
        <?PHP include "../Section/cont_perfiles.php";?>
        <?PHP include "../Section/footer.php";?>
        </div>
       
   

