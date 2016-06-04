<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$encabezado='Seguimiento de préstamo de vehículo';
$this->title = 'Seguimiento';

$array = array(1);


?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4>Seguimiento de préstamo de vehículo
          <div class="btn-group pull-right">
             
              <?= Html::a(' < Regresar', ['site/vehiculoprestamoinv'], 
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

        <dt>Fecha de inicio de viaje</dt>
        <dd>01/06/16</dd>

        <dt>Fecha de retorno del viaje</dt>
        <dd>05/06/16</dd>
       
    </dl>
  
  
        
 <table class="table table-bordered">
    <tr>
        <th>Fecha ingreso</th>
        <th>Fecha revisión</th>
        <th>Comentarios sobre revisión</th>
        <th>Estado</th>       
        <th></th>
        
    </tr>
  <?php foreach($array as $row): ?> 
    <tr>
        <td>10/03/16</td>
        <td>14/03/16</td>
        <td></td>       
        <td>Ingresado</td>
        <td>

  
       <?= Html::a('Actualizar', ['site/vehiculosegactinv'], ['class'=>'btn btn-primary btn-sm']) ?>
         <!--
        <?= Html::a('Revisado', ['site/avalpfinalizadoinv'], ['class'=>'btn btn-primary grid-button btn-sm']) ?>

        -->
        </td>  


    </tr>
    <?php endforeach ?> 


          
</table>

 
   
  
    </div>

  </div>
  
         




