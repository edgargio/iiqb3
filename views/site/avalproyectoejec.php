<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;

//INV.

$encabezado='Proyecto en ejecución';
$this->title = 'Avales';

$array = array(1, 2);

?>


<div class='container' > <!-- wellgio   ó   well-sm-->
<div class="well wellgio"> <h4><?=$encabezado?></h4> </div> 


	<div class="panel panel-default">
			
		 <div class="panel-body">  
				
				<?php $f = ActiveForm::begin([
				    "method" => "get",
				    "action" => Url::toRoute("site/avalproyectoejec"),
				    "enableClientValidation" => true,
				]);
				?>

				<!-- --------------------------------------- -->

					<div class="navbar-form navbar-formgio" >
				  
					     <?= Html::a('Solicitud aval', ['site/avalejecucioncrea'], 
                          ['class'=>'btn btn-success ']) 

              			 ?>
					  					  
					</div>

						<br>

				<!-- --------------------------------------- -->

					<table class="table table-bordered">
					    <tr>
					        <th>Correlativo</th>
					        <th>Fecha ingreso</th>
					        <th>Fecha aprobación</th>
					        <th>Título</th>					             
					        <th>Estado</th>
					        <th></th>
					        
					    </tr>
					  <?php foreach($array as $row): ?> 
					    <tr>
					        <td><?= 'vviiqb'.$row.'16' ?></td>
					        <td><?='12/05/'.$row ?></td>
					        <td> </td>
					        <td>investigación xyz</td>					           
					        <td>Ingresado</td>        
					        <td>
					        <?= Html::a('seguimiento', ['site/avalsegejecucioninv'], ['class'=>'btn btn-primary grid-button btn-sm']) ?>
					     
					        </td>  


					    </tr>
					    <?php endforeach ?> 


					          
					</table>

				<?php $f->end() ?>
			 </div>
	  </div>
 </div>







