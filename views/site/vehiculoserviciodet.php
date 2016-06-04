<?php
use yii\helpers\Html;
use yii\helpers\Url;
 
use kartik\date\DatePicker;
 

$encabezado='Detalle de servicio';
$this->title = 'Vehículo';


?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4><?= $encabezado ?>
          <div class="btn-group pull-right">
             
              <?= Html::a(' < Regresar', ['site/vehiculoservicios'], 
                          ['class'=>'btn btn-default btn-smdefgio']) 

              ?>

            </div>
        </h4>         
      
  </div>
<!--

 <a href="site/avalrevpropuesta" class="btn btn-default btn-smdefgio"> < Regresar </a>
 
 <div class="btn-group pull-right">
              <a href="#" class="btn btn-default btn-sm">## Lock</a>
              <a href="#" class="btn btn-default btn-sm">## Delete</a>
              <a href="#" class="btn btn-default btn-sm">## Move</a>
          </div>
 

  <ul class="pager">
        <li class="next"><a href="#">&larr; Regresar</a></li>       
      </ul>

-->
 <div class="panel-body">
      


   <div class="row">
            <div class="col-lg-5">

 

                    <?='<b>Fecha</b><br><br>'?>
                   
                    <?=   DatePicker::widget([
                        'name' => 'datebegin',                         
                        
                        'options' => ['placeholder' => 'Fecha servicio...'],
                        'pluginOptions' => [
                           'autoclose'=>true,
                            'format' => 'dd-M-yyyy',
                            'todayHighlight' => true
                        ]
                    ]) ?>

                    <br>
    
                     <input type="checkbox" name="servicio" value="vehiculo" > &nbsp;&nbsp;Servicio realizado<br> 
                     <br> 

                     

                      <button type="reset" class="btn btn-primary btn-sm">Adjuntar factura</button>  
                      <p></p>
                     <p><b>Comentarios  </b>  </p>

                      
                       <p>
                        <!-- <?= Html::textarea(['rows' => 10, 'cols' => 125]) ?>-->
                        
                        <textarea rows="4" cols="50"></textarea>
                      </p>


                     <div class="form-group">
                        <?= Html::submitButton('Guardar cambios', ['class' => 'btn btn-primary', 'name' => 'Guardar']) ?>
                    </div>


            </div>
        </div>

 
  <br><br>

 

        
  
                    
 
 


 
   
  
    </div>

  </div>
  
         




