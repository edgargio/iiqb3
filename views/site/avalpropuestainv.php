<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;

use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;

$encabezado='Propuesta de Investigación';
$this->title = 'Avales';

$array = array(1, 2, 3, 4);

?>


<div class='container' > <!-- wellgio   ó   well-sm-->
<div class="well wellgio"> <h4>Propuesta de Investigación</h4> </div> 


	<div class="panel panel-default">
			
		 <div class="panel-body">  
				
				<?php $f = ActiveForm::begin([
				    "method" => "get",
				    "action" => Url::toRoute("site/avalpropuesta"),
				    "enableClientValidation" => true,
				]);
				?>

				<!-- --------------------------------------- -->

					<div class="navbar-form navbar-formgio" >
				  
					     <?= Html::a('Solicitud aval', ['site/avalpropuestacrea'], 
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
					        <?= Html::a('seguimiento', ['site/avalsegpropinv'], ['class'=>'btn btn-primary grid-button btn-sm']) ?>
					     
					        </td>  


					    </tr>
					    <?php endforeach ?> 


					          
					</table>

				<?php $f->end() ?>
			 </div>
	  </div>
 </div>







