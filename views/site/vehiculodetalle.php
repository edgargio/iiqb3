<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$encabezado='Detalle de vehículo';
$this->title = 'Vehículo';

 


?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4><?= $encabezado ?>
          <div class="btn-group pull-right">
             
              <?= Html::a(' < Regresar', ['site/vehiculocatalogo'], 
                          ['class'=>'btn btn-default btn-smdefgio']) 

              ?>

            </div>
        </h4>         
      
  </div>
 
 <div class="panel-body">
     
       
<div class="row">
    <div class="col-sm-7">
<dl class="dl-horizontalgio" >

        <dt>Vehículo</dt>
        <dd>2</dd>
     

        <dt>Placa</dt>
        <dd>XYZ-123</dd>


       <dt>Kilometraje</dt>
        <dd>18509</dd>
        <br>

          <dt>Tipo</dt>
        <dd> Camioneta</dd>
          <dt>Marca</dt>
        <dd> Toyota</dd>

        <br>
        <dt>Color</dt>
        <dd>Azul oscuro</dd>

        <dt>Accesorios</dt>
        <dd>una llanta de repuesto, llave de chuchos, tricket</dd>
        <dt>Observaciones</dt>
        <dd>....</dd>
        <dt>Disponible</dt>
        <dd>Si</dd>


    </dl>

</div>
</div>

  
 
         

        



 
   
  
    </div>

  </div>
  
         




