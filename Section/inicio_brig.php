
<div class="wrapper wrapper-content animated fadeInRight"  >
            <div class="row" >
                <div class="col-lg-12" >
                    <div class="ibox float-e-margins">
                        <div class="ibox-content text-center p-md">

                            <h1><b><span class="text-navy">Bienvenido</span></b></h1>

                            <p>
                                <h2><b> <?php echo utf8_encode($_SESSION["nombres"]);echo " "; echo utf8_encode($_SESSION["apellidos"]);  ?></b></h2>
                            </p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <!-- Inicio de contenido --> 
                <?php //include('../../Vista/Section/'); ?>
                <!-- Fin de contenido --> 
            </div>
        </div>