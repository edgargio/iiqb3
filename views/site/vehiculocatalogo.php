<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;

use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;

 
$this->title = 'Vehículo';

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
<div class="well well-sm"> <h4><b>Catálogo de vehículo</b></h4> </div> 


	<div class="panel panel-default">
			
		 <div class="panel-body">  
				
				<?php $f = ActiveForm::begin([
				    "method" => "get",
				    "action" => Url::toRoute("site/vehiculocatalogo"),
				    "enableClientValidation" => true,
				]);
				?>


				<!-- --------------------------------------- -->

					<div class="navbar-form navbar-formgio" >
				  
					     <?= Html::a('Nuevo vehículo', ['site/vehiculonuevo'], 
                          ['class'=>'btn btn-success ']) 

              			 ?>
					  					  
					</div>

						<br>

				<!-- --------------------------------------- -->


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

						
						 
					          		 
				  
					   
					  	&nbsp;&nbsp;
					  	<button type="reset" class="btn btn-primary">Buscar</button>
					  
					</div>

						<br>

				<!-- --------------------------------------- -->

					<table class="table table-bordered">
					    <tr>
					        
					        <th>Vehículo</th>
					    					       
					        <th>Kilometraje</th>
					        
					        <th>Marca</th>
					         <th>Placa</th>
					        <th>Disponible</th>
					        <th></th>
					        
					    </tr>
				 
					    <tr>
					     
					        <td>1</td>
     					   
					        <td>18509</td>       
					        <td>Toyota</td>
					         <td>XYZ-123</td>
					         <td>Si</td>
					          
					        <td>
					        
					             			       
					<!-- 
							        <a href="site/vehiculoprestamodet">
							          <span class="glyphicon glyphicon-edit"></span>
						            </a>



							<?= Html::a('', ['site/vehiculoprestamodet'], ['class' => 'glyphicon glyphicon-edit ']) ?>

							<?= Html::a(' <span data-toggle="tooltip"></span>', ['Detalle',['class' => 'btn btn-primary']]) ?>

							<?= Html::a('Devolución', ['site/vehiculodevolucion'], ['class'=>'btn btn-primary grid-button btn-xs']) ?>
					        -->		
					      
		   	        

 					<?= Html::a('Detalle', ['site/vehiculodetalle'], ['class'=>'btn btn-primary grid-button btn-xs']) ?>

 										


					        </td>  
							 

					    </tr>
					   


					          
					</table>

				<?php $f->end() ?>
			 </div>
	  </div>
 </div>







