<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


use kartik\date\DatePicker;

$encabezado='Devolución de vehículo';
$this->title = 'Devolución';

$array = array(1);


?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4> <?= $encabezado ?>
          <div class="btn-group pull-right">
             
              <?= Html::a(' < Regresar', ['site/vehiculoprestamolist'], 
                          ['class'=>'btn btn-default btn-smdefgio']) 

              ?>

            </div>
        </h4>         
      
  </div>

 <div class="panel-body">
      <br>
     
     <dl class="dl-horizontalgio" >

        <dt>Investigador Responsable</dt>
        <dd>Investigador xyz</dd>

        <dt>Fecha de uso</dt>
        <dd>01/06/16 a 3/06/16 </dd>

        <dt>Vehículo</dt>
        <dd>2 </dd>

            
    </dl>
  
  
       <div class="form-group"> <!-- row-->
                    <div class="col-lg-5">


                     <?= '<b>Fecha de devolución</b>' ?>
                      <?= '<br>'?>
                        <?= '<br>'?>
                                <?=   DatePicker::widget([
                                'name' => 'datebegin',
                                 
                                //'value' => date('d-M-Y'),
                                'options' => ['placeholder' => 'Fecha devolución ...'],
                                'pluginOptions' => [
                                     'autoclose'=>true,
                                    'format' => 'dd-M-yyyy',
                                    'todayHighlight' => true
                                ]
                               ]) ?>

                                <?= '<br>'?>


                    

                        <p><b>Servicios / compras efectuadas</b></p>

                      
                       <p>
                        <!-- <?= Html::textarea(['rows' => 3, 'cols' => 125]) ?>-->
                        
                        <textarea rows="3" cols="50"></textarea>
                      </p>

                         <p><b>Comentarios de devolución</b></p>

                      
                       <p>
                        <!-- <?= Html::textarea(['rows' => 3, 'cols' => 125]) ?>-->
                        
                        <textarea rows="3" cols="50"></textarea>
                      </p>


                         <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-primary ">Guardar cambios</button>
                        </div>
                      </div>
                    </div>
  
                </div> 
   
  
    </div>

  </div>
  
         




