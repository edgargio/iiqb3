<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;

use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;

$encabezado='Gestión de Propuestas de Investigación';
$this->title = 'Avales';

$array = array(1, 2);

?>


<div class='container' > <!-- wellgio -->
<div class="well well-sm"> <h4><b><?=$encabezado?></b></h4> </div> 


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


					  
					    <input type="text" class="form-control"  placeholder="Buscar...">
		   
					  


					      <?php   DatePicker::widget([
							    'name' => 'datebegin',
							     
							    'value' => date('d-M-Y', strtotime('-12 month')),
							    'options' => ['placeholder' => 'Fecha inicial ...'],
							    'pluginOptions' => [
							    	 'autoclose'=>true,
							        'format' => 'dd-M-yyyy',
							        'todayHighlight' => true
							    ]
							]) ?>

						<?=   DatePicker::widget([
							    'name' => 'dateend', 
							    
							    'value' => date('d-M-Y'),
							    'options' => ['placeholder' => 'Fecha final ...'],
							    'pluginOptions' => [
							    	 'autoclose'=>true,
							        'format' => 'dd-M-yyyy',
							        'todayHighlight' => true
							    ]
							]) ?>

						
						  <select class="form-control" placeholder="Descripción">
					          <option value="1">Ingresado</option>
					          <option value="2">En revisión</option>
					          <option value="3">Concluido</option>
					      
					          
					        </select> 
				  
					   
					  	&nbsp;&nbsp;
					  	<button type="reset" class="btn btn-primary">Buscar</button>
					  
					</div>

						<br>

				<!-- --------------------------------------- -->

					<table class="table table-bordered">
					    <tr>
					        <th>Correlativo</th>
					        <th>Fecha ingreso</th>
					        <th>Fecha aprobación</th>
					        <th>Investigador</th>
					        <th>Investigador Facd.</th>       
					        <th>Estado</th>
					        <th></th>
					        
					    </tr>
					  <?php foreach($array as $row): ?> 
					    <tr>
					        <td><?= 'vviiqb'.$row.'16' ?></td>
					        <td><?='12/05/16' ?></td>
					        <td> </td>
					        <td>investigador xyz</td>
					        <td>investigador abc</td>       
					        <td>revisión</td>        
					        <td>
					        <?= Html::a('seguimiento', ['site/avalsegpropuesta'], ['class'=>'btn btn-primary grid-button btn-sm']) ?>
					     
					        </td>  


					    </tr>
					    <?php endforeach ?> 


					          
					</table>

				<?php $f->end() ?>
			 </div>
	  </div>
 </div>







