<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Actualizar';



$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];

  }


?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4>Actualizar documento
          <div class="btn-group pull-right">
             
              <a href="<?= $previous ?>" class="btn btn-default btn-smdefgio"> < Regresar </a>


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
  
  
    <br>
  
   <dl >

        <dt>Agregar documentos</dt>
             
        

    </dl>

          <p>
             <a href="#" class="btn btn-primary btn-sm">  Archivo </a>
             &nbsp;&nbsp;&nbsp; &nbsp; 
            <a href="#" class="btn btn-primary btn-sm"> Enviar </a>
          </p>
   
  
    </div>

  </div>
  
         




