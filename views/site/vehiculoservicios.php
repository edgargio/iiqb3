<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;

//ADMIN
$encabezado='Control de servicios';
$this->title = 'Vehículo';

$array = array(1);

?>


<div class='container' > <!-- wellgio -->
<div class="well well-sm"> <h4><b><?=$encabezado?></b></h4> </div> 


	<div class="panel panel-default">
			
		 <div class="panel-body">  
				
				<?php $f = ActiveForm::begin([
				    "method" => "get",
				    "action" => Url::toRoute("site/vehiculoservicios"),
				    "enableClientValidation" => true,
				]);
				?>

				<!-- --------------------------------------- -->

					<div class="navbar-form navbar-formgio" >

					<div class="navbar-form navbar-formgio" >
				  
					     <?= Html::a('Nuevo servicio', ['site/vehiculoservicionuevo'], 
                          ['class'=>'btn btn-success ']) 

              			 ?>
					  					  
					</div>

						<br>



					  
					    <input type="text" class="form-control"  placeholder="Buscar...">
		   
					  
					    &nbsp;&nbsp;

					      <?=   DatePicker::widget([
							    'name' => 'datebegin',
							     
							    'value' => date('d-M-Y', strtotime('-12 month')),
							    'options' => ['placeholder' => 'Fecha inicial ...'],
							    'pluginOptions' => [
							    	 'autoclose'=>true,
							        'format' => 'dd-M-yyyy',
							        'todayHighlight' => true
							    ]
							]) ?>

					&nbsp;&nbsp;

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

						<!--
						  <select class="form-control" placeholder="Descripción">
					          <option value="1">Ingresado</option>
					          <option value="2">En revisión</option>
					          <option value="3">Concluido</option>
					        </select> -->
				  
					   
					  	&nbsp;&nbsp;
					  	<button type="reset" class="btn btn-primary">Buscar</button>
					  
					</div>

						<br>

				<!-- --------------------------------------- -->

					<table class="table table-bordered">
					    <tr>
					       
					        <th>Vehículo</th>
					        <th>Tipo de servicio</th>
					        <th>Kilometraje</th>
					        <th>Fecha a realizarse</th>	
					        <th>Realizado</th>					       
					        <th></th>
					        
					    </tr>
					  <?php foreach($array as $row): ?> 
					    <tr>
					        <td>2</td>
					        <td>Sistema de frenos</td>
					        <td>4500</td>
					        <td>01/07/16</td>
					     	 <td>No</td>				              
					        <td>
					        

					          <?= Html::a('Servicios', ['site/vehiculoserviciodet'], ['class'=>'btn btn-primary grid-button btn-xs']) ?>

					           <button type="reset" class="btn btn-primary btn-xs">Eliminar</button>

                             <!-- <?= Html::a('Eliminar', ['/#'], ['class'=>'btn btn-primary grid-button btn-xs']) ?>  -->


					    </tr>
					    <?php endforeach ?> 


					          
					</table>

				<?php $f->end() ?>
			 </div>
	  </div>
 </div>







