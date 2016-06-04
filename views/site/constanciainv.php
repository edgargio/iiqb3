<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;

use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;

$encabezado='Constancias';
$this->title = 'Constancias';

$array = array(1, 2);

?>


<div class='container' > <!-- wellgio ó well-sm-->
<div class="well wellgio"> <h4><?=$encabezado?></h4> </div> 


	<div class="panel panel-default">
			
		 <div class="panel-body">  
				
				<?php $f = ActiveForm::begin([
				    "method" => "get",
				    "action" => Url::toRoute("site/constanciainv"),
				    "enableClientValidation" => true,
				]);
				?>

			<!-- --------------------------------------- -->

					<div class="navbar-form navbar-formgio" >
				  
					     <?= Html::a('Solicitud de constancia', ['site/constanciasolicinv'], 
                          ['class'=>'btn btn-success ']) 

              			 ?>
					  					  
					</div>

						<br>

				<!-- --------------------------------------- -->

			

					<table class="table table-bordered">
					    <tr>
					         
					        <th>Fecha ingreso</th>
					        <th>Fecha revisión</th>	
					        <th>Comentarios</th>			       				             
					        <th>Estado</th>
					        
					        
					    </tr>
					  <?php foreach($array as $row): ?> 
					    <tr>
					        
					        <td><?='0'.$row.'/05/16' ?></td>
					        <td> </td>
					         <td> </td>	           
					        <td>Ingresado</td>        
					    
					    </tr>
					    <?php endforeach ?> 


					          
					</table>

				<?php $f->end() ?>
			 </div>
	  </div>
 </div>







