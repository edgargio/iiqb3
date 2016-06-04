<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

 
$encabezado='Solicitud de constancia';
$this->title = 'Constancia';
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

                                <?= $form->field($model, 'nombreinv')->textInput(['autofocus' => true]) ?>
                                
                                <?= $form->field($model, 'periodo') ?>


                                 <?= '<br>'?>

                                <?= $form->field($model, 'observaciones')->textArea(['rows' => 2]) ?>

                                
                                
                                <div class="form-group">
                                    <?= Html::submitButton('Enviar solicitud', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>




                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                 
            </div>

        </div>
                 
   </div>