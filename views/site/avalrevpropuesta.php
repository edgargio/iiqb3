<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


$encabezado='Revisión';
$this->title = 'Revisión';

$array = array(1, 2, 3, 4);

$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4>Revisión
          <div class="btn-group pull-right">
              <a href="<?= $previous ?>" class="btn btn-default btn-smdefgio"> < Regresar </a>
            </div>
        </h4>         
      
  </div>

  <div class="panel-body">
          
    <dl class="dl-horizontalgio" >

        <dt>Investigador principal</dt>
        <dd>Investigador xyz</dd>

        <dt>Responsable en la Facultad</dt>
        <dd>Investigador abc</dd>

        <dt>Título propuesta</dt>
        <dd>Recursos naturales</dd>

        <dt>Convocatoria</dt>
        <dd>convocatoria 2016</dd>
    

    </dl>
        <dl  class="dl-horizontalgio">
          <dt>Documentos</dt>
          <dd><a href="#">av030416.jpg</a></dd>
          <dd><a href="#">pp030416.pdf</a> </dd>
        </dl>
        <hr>
    <p>


    </p>

    <!-- --------------- ------------ --------------- -->


    <!-- encabezado tabs -->
         <ul class="nav nav-tabs"> <!-- nav-justified -->
          <li class="active"><a data-toggle="tab" href="#home">Aprobar </a></li>
          <li><a data-toggle="tab" href="#menu1">Corregir </a></li>
                    
         </ul>

      <!-- TABS -->
        <div class="tab-content">
         
          <div id="home" class="tab-pane fade in active">
            
           
             <!-- TAB 1 -->
               <div class="form-group"> <!-- row-->
                    <div class="col-lg-8">

                     <p><b>Comentarios  </b>  [ Agregar campos para  ingresar info] </p>

                      
                       <p>
                        <!-- <?= Html::textarea(['rows' => 10, 'cols' => 125]) ?>-->
                        
                        <textarea rows="8" cols="50"></textarea>
                      </p>


                         <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-primary ">Enviar notificación</button>
                        </div>
                      </div>
                    </div>
  
                </div> 
 
 
          </div>

           <!-- TAB 2 -->

          <div id="menu1" class="tab-pane fade">
            
               <div class="form-group"> <!-- row-->
                    <div class="col-lg-8">

                     <p><b>Comentarios</b></p>

                      
                       <p>
                        <!-- <?= Html::textarea(['rows' => 10, 'cols' => 125]) ?>-->
                        
                        <textarea rows="8" cols="50"></textarea>
                      </p>


                         <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-primary ">Enviar notificación</button>
                        </div>
                      </div>
                    </div>
  
                </div>

          </div> 


             <!-- TAB 3 -->
 


         <!-- fin tabs -->
        </div>

   </div>

</div>

  
 
   
 
         




