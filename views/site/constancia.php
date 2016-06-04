<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;

use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;

 
$this->title = 'Constancia';

$array = array(1, 2);



?>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});
</script>
<style type="text/css">
    .bs-example{
    	margin: 50px;
    }
    .bs-example a{
        font-size: 22px;        
        text-decoration: none;
        margin: 0 10px;
    }
</style>

<div class='container' > <!-- wellgio -->
<div class="well well-sm"> <h4><b>Gestión de Constancias</b></h4> </div> 


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
					          <option value="2">Aprobado</option>				          
					          <option value="3">No aprobado</option>
					          					          
					        </select> 
				  
					   
					  	&nbsp;&nbsp;
					  	<button type="reset" class="btn btn-primary">Buscar</button>
					  
					</div>

						<br>

				<!-- --------------------------------------- -->

					<table class="table table-bordered">
					    <tr>
					        
					        <th>Fecha</th>
					    					       
					        <th>Investigador</th>
					        
					        <th>Estado</th>
					        <th></th>
					        
					    </tr>
					  <?php foreach($array as $row): ?> 
					    <tr>
					     
					        <td><?='1'.$row.'/05/16' ?></td>
     					   
					        <td>investigador abc</td>       
					        <td>Ingresado</td>
					        <td>
					        
					             			       
					<!-- 
							        <a href="site/vehiculoprestamodet">
							          <span class="glyphicon glyphicon-edit"></span>
						            </a>



							<?= Html::a('', ['site/vehiculoprestamodet'], ['class' => 'glyphicon glyphicon-edit ']) ?>

							<?= Html::a(' <span data-toggle="tooltip"></span>', ['Detalle',['class' => 'btn btn-primary']]) ?>

							<?= Html::a('Devolución', ['site/vehiculodevolucion'], ['class'=>'btn btn-primary grid-button btn-xs']) ?>
					        -->		
					      
		   	        

 					<?= Html::a('Detalle', ['site/constanciaemitir'], ['class'=>'btn btn-primary grid-button btn-xs']) ?>

 										


					        </td>  
							 

					    </tr>
					    <?php endforeach ?> 


					          
					</table>

				<?php $f->end() ?>
			 </div>
	  </div>
 </div>







