<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use kartik\date\DatePicker;
use kartik\daterange\DateRangePicker;


$encabezado='Préstamo de vehículo';
$this->title = 'Vehículo';
//$this->params['breadcrumbs'][] = $encabezado;

?>


<?= $msg ?>

<div class="panel panel-default">
        
     <div class="panel-body">  

            <div class="site-contact">
                <h3><?= Html::encode($encabezado) ?></h3>
                <hr>
                    <div class="row">
                        <div class="col-lg-5">

                            <?php $form = ActiveForm::begin(["method" => "post",'id' => 'contact-form', "options" => ["enctype" => "multipart/form-data"],]); ?>

                                <?= $form->field($model, 'nombreinv')->textInput(['autofocus' => true]) ?>
                                
                                <?= $form->field($model, 'nombreproy') ?>

                                <?= '<b>Fecha de inicio del viaje</b>' ?>
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

                                <?= '<br>'?>

                               <?= '<b>Fecha de retorno del viaje</b>' ?>
                                <?=   DatePicker::widget([
                                'name' => 'datebegin',
                                 
                                'value' => date('d-M-Y', strtotime('-12 month')),
                                'options' => ['placeholder' => 'Fecha final ...'],
                                'pluginOptions' => [
                                     'autoclose'=>true,
                                    'format' => 'dd-M-yyyy',
                                    'todayHighlight' => true
                                ]
                               ]) ?>

                                 <?= '<br>'?>

                                <?= $form->field($model, 'actividad')->textArea(['rows' => 2]) ?>

                                 <?= $form->field($model, 'localidades')->textArea(['rows' => 2]) ?>

                                 <?= $form->field($model, 'acompaniantes') ?>

                                 <?= $form->field($model, 'kmsEstimado') ?>

                                <?= $form->field($model, 'file1')->fileInput() ?>

                          
                                             
                               
                                
                                <div class="form-group">
                                    <?= Html::submitButton('Enviar solicitud', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>




                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                 
            </div>

        </div>
                 
   </div>