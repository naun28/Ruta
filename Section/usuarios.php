
    <nav class="navbar-danger navbar-static-side" role="navigation">
        <div class="sidebar-collapse" >
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../Include/img/perfil.jpg" />
                             </span>
                        
                               <span class="clear" style="color: white;"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION["nombres"]; ?>&nbsp;<?php echo $_SESSION["apellidos"]; ?></strong>
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
                    <span class="m-r-sm text-muted welcome-message">Hay que poner algo aqui</span>
                </li>
                
                <li>
                    <a href="login.php">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>
        </nav>
        </div>
        <!-- Aqui inicia el contenido-->
        <?PHP include "../Section/cont_usuarios.php";?>
 
        <!-- fin del contenido-->

        <?PHP include "../Section/footer.php";?>
  </div>
       
  