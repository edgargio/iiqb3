<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$encabezado='Seguimiento de proyecto en ejecución';
$this->title = 'Seguimiento';

$array = array(1, 2);


?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4> <?= $encabezado ?>
          <div class="btn-group pull-right">
             
              <?= Html::a(' < Regresar', ['site/avalejecucionlist'], 
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

        <dt>Investigador principal</dt>
        <dd>Investigador xyz</dd>

        <dt>Responsable en la Facultad</dt>
        <dd>Investigador abc</dd>

        <dt>Título propuesta</dt>
        <dd>Recursos naturales</dd>

        <dt>Convocatoria</dt>
        <dd>convocatoria 2016</dd>

    </dl>
  
  
        
 <table class="table table-bordered">
    <tr>
        <th>Fecha ingreso</th>
        <th>Fecha revisión</th>
        <th>Comentarios</th>
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

  
       <?= Html::a(' Revisión', ['site/avalrevpropuesta'], ['class'=>'btn btn-primary grid-button btn-sm']) ?>
         <!--
        <?= Html::a('Revisado', ['site/avalpfinalizadoinv'], ['class'=>'btn btn-primary grid-button btn-sm']) ?>

        -->
        </td>  


    </tr>
    <?php endforeach ?> 


          
</table>

 
   
  
    </div>

  </div>
  
         




