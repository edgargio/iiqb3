<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$encabezado='Propuesta de Investigación';
$this->title = 'Avales';

$array = array(1, 2, 3, 4);

?>


<h3>Lista Propuesta de Investigación</h3>


 
<?php $f = ActiveForm::begin([
    "method" => "get",
    "action" => Url::toRoute("site/avalpropuesta"),
    "enableClientValidation" => true,
]);
?>


     <table class="table">
    <tr>
    <td width="30%">
        Descripción<br>
        <input type="text" name="firstname"> <br><br>
        <?= Html::submitButton("Buscar", ["class" => "btn btn-primary"]) ?>
    </td>
    <td width="70%">
        Estado<br>
         <select>
          <option value="1">Ingresado</option>
          <option value="2">En revisión</option>
          <option value="3">Revisado</option>
          <option value="4">Aprobado</option>
          
        </select> 
    </td>
   
     </tr>
      
<br><br>

 
   
</table>


<?php $f->end() ?>



<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>estado</th>       
        <th></th>
        
    </tr>
  <?php foreach($array as $row): ?> 
    <tr>
        <td>1</td>
        <td>mombre investigador</td>
        <td>télefono investigador</td>       
        <td>revisión</td>
        <td>
        <?= Html::a('seguimiento', ['site/avalsegpropuesta'], ['class'=>'btn btn-primary grid-button btn-sm']) ?>
     
        </td>  


    </tr>
    <?php endforeach ?> 


          
</table>


