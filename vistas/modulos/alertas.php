<div class="content-wrapper">
    
  <section class="content-header">
    
    <h1>
      Gestor alertas
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor alertas</li>
      
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
       <div class="col-md-12">
      <!--=====================================
        ALERTA ACTUAL
        ======================================-->
          <div class="box box-info">
            <div class="box-header with-border">

              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Alerta actual</h3>

              <div class="pull-right">

                <?php 

              $alertas = ControladorAlerta::ctrMostrarAlerta();

              if($alertas[0]["estado"] == 0){

                $colorEstado = "btn-danger";
                $textoEstado = "Desactivado";
                $estadoAlerta = 1;

              }else{

                  $colorEstado = "btn-success";
                  $textoEstado = "Activado";
                  $estadoAlerta = 0;
              }

              echo "<button class='btn btn-md btnActivar ".$colorEstado."'  estadoAlerta='".$estadoAlerta."'>".$textoEstado."</button>";

              ?>
          
              </div>

            </div>
            <!-- /.box-header -->
          
            <div class="box-body">
              <?php

                echo '<div class="alert alert-'.$alertas[0]["tipo"].' alert-dismissible" id="'.$alertas[0]["tipo"].'" >
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                 <h4><i class="icon fa fa-'.$alertas[0]["icono"].'"></i> '.$alertas[0]["encabezado"].'</h4>
                 '.$alertas[0]["texto"].'
                 </div>';



               ?>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    </div>
    

    <div class="row">
      
           <!--=====================================
        MODIFICAR ALERTA
        ======================================-->
        <div class="col-md-12">
          
          <div class="box box-primary">
            
            <div class="box box-header with-border">

              <div class="box-tools pull-right">
              
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

                <i class="fa fa-minus"></i>

              </button>

            </div>
              
               <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Modificar Alerta</h3>

            </div>
               <!--=====================================
                     BOTONES ALERTA
                 ======================================-->

            <div class="box-body">
              <h4>Seleccione el tipo de alerta</h4>
              
              <div class="row">

                <div class="form-group ">
                  
                   <div class="col-md-3">
       
                       <button type="button" class="btn btn-block btn-success success " name="estado" value="success">Exito!</button>

                </div>
                <div class="col-md-3">
       
                       <button type="button" class="btn btn-block btn-info info" value="info" >Info!</button>

                </div>
                <div class="col-md-3">
       
                       <button type="button" class="btn btn-block btn-warning warning" value="warning" name="estado">Alerta!</button>

                </div>
                <div class="col-md-3">
       
                       <button type="button" class="btn btn-block btn-danger danger" value="danger" >Peligro!</button>

                </div>


                </div>
                

              </div>
              
                
              <br>
              <div class="ajaxAlertas"></div>

               <!--=====================================
                     ENCABEZADO Y TEXTO ALERTA
                 ======================================-->

            <div class="row">

              <div class="col-md-6">
                
                 <div class="form-group">
              
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-text-height"></i></span>

                      <input type="text" class="form-control input-lg encabezado" placeholder="Ingrese el encabezado" >

                    </div>

                 </div>


             </div>
              
            
            </div>

               <div class="row">

              <div class="col-md-12">
                
                 <div class="form-group">
              
                    <div class="input-group">
                      
                      <span class="input-group-addon"><i class="fa fa-text-height"></i></span>

                      <textarea class="form-control input-lg texto" rows="6" placeholder="Ingrese el texto"></textarea> 

                    </div>

                 </div>


             </div>
              
            
            </div>
            <div class="row">

              <div class="col-md-12">
                
              <button type="button" class="btn btn-primary pull-right generarAlerta ">Generar alerta</button>


              </div>
              

            </div>

            

            </div>

          </div>

        </div>




    </div>
 




  </section>

</div>





