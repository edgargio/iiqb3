<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$encabezado='Seguimiento de propuesta de investigación';
$this->title = 'Seguimiento';

$array = array(1, 2, 3, 4);

$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];

  }
?>

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4>Actualizar documentos
          <div class="btn-group pull-right">
             
              <a href="<?= $previous ?>" class="btn btn-default btn-smdefgio"> < Regresar </a>


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
  
         




