<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$encabezado='Seguimiento de proyecto en ejecución';
$this->title = 'Seguimiento';

$array = array(1);


?>

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4><?= $encabezado?> 
          <div class="btn-group pull-right">
             
              <?= Html::a(' < Regresar', ['site/avalproyectoejec'], 
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
      <br>
     
     <dl class="dl-horizontalgio" >

       

        <dt>Investigador</dt>
        <dd>Investigador abc</dd>

        <dt>Nombre del proyecto</dt>
        <dd>xyz</dd>


        <dt>Comentarios</dt>
        <dd> ..  ... ...</dd>

        <dt>Firmas</dt>
        <dd>3</dd>
        <dt>Documentos a avalar</dt>
        <dd> informe.pdf, informetrimestral .. </dd>


    </dl>
  
  
        
 <table class="table table-bordered">
    <tr>
        <th>Fecha ingreso</th>
        <th>Fecha revisión</th>
        <th>Comentarios sobre revisión</th>
        <th>Documento</th>
        <th>Estado</th>       
        <th></th>
        
    </tr>
  <?php foreach($array as $row): ?> 
    <tr>
        <td>10/03/16</td>
        <td>14/03/16</td>
        <td> 
         <td><a href="#">pp030416.pdf</a>  </td>    
        <td>Ingresado</td>
        <td>

  
       <?= Html::a('Actualizar', ['site/avalactpropinv'], ['class'=>'btn btn-primary btn-sm']) ?>
         <!--
        <?= Html::a('Revisado', ['site/avalpfinalizadoinv'], ['class'=>'btn btn-primary grid-button btn-sm']) ?>

        -->
        </td>  


    </tr>
    <?php endforeach ?> 


          
</table>

 
   
  
    </div>

  </div>
  
         




