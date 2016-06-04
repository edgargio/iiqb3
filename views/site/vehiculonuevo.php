<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$encabezado='Nuevo Vehículo';
$this->title = 'Vehículo';
//$this->params['breadcrumbs'][] = $encabezado;

?>




<div class="panel panel-default">
        
     <div class="panel-body">  

            <div class="site-contact">
                <h2><?= Html::encode($encabezado) ?></h2>
                
                    <div class="row">
                        <div class="col-lg-5">

                            <?php $form = ActiveForm::begin(["method" => "post",'id' => 'contact-form', "options" => ["enctype" => "multipart/form-data"],]); ?>

                                <?= $form->field($model, 'tipo')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($model, 'color') ?>

                                <?= $form->field($model, 'placa') ?>

                                <?= $form->field($model, 'marca') ?>

                                 <?= $form->field($model, 'kilometraje') ?>

                                   <?= $form->field($model, 'accesorios')->textArea(['rows' => 2]) ?>

                                 <?= $form->field($model, 'observaciones')->textArea(['rows' => 2]) ?>
                              

                                              
                               
                                
                                <div class="form-group">
                                    <?= Html::submitButton('Ingresar nuevo Vehículo', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>




                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                 
            </div>

        </div>
                 
   </div>