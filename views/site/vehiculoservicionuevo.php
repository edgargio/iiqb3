<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;


$encabezado='Nuevo servicio';
$this->title = 'Vehículo';
//$this->params['breadcrumbs'][] = $encabezado;

?>




<div class="panel panel-default">
        
     <div class="panel-body">  

            <div class="site-contact">
                <h3><?= Html::encode($encabezado) ?></h3>
                <hr>
                    <div class="row">
                        <div class="col-lg-5">

                            <?php $form = ActiveForm::begin(["method" => "post",'id' => 'contact-form', "options" => ["enctype" => "multipart/form-data"],]); ?>

                            

                                <?= $form->field($model, 'vehiculo')->dropDownList(['a' => 'Vehiculo 1', 'b' => 'Vehiculo 2', 'c' => 'Vehiculo 3']) ?>


                                <?= '<b>Fecha a realizar servicio</b> <br><br>' ?>
                                   
                                <?= DatePicker::widget([
                                'name' => 'datebegin',
                                 
                                 
                                'options' => ['placeholder' => 'Fecha ...'],
                                'pluginOptions' => [
                                     'autoclose'=>true,
                                    'format' => 'dd-M-yyyy',
                                    'todayHighlight' => true
                                ]
                               ]) ?>

                                <?= '<br>'?>

                                  <?= $form->field($model, 'tiposervicio') ?>


                                <?= $form->field($model, 'kilometraje') ?>

                                                       
                                             
                               
                                
                                <div class="form-group">
                                    <?= Html::submitButton('Crear servicio', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>
 

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                 
            </div>

        </div>
                 
   </div>