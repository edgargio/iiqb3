<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$encabezado='Propuesta de Investigación';
$this->title = 'Avales';
//$this->params['breadcrumbs'][] = $encabezado;

?>


<?= $msg ?>

<div class="panel panel-default">
        
     <div class="panel-body">  

            <div class="site-contact">
                <h2><?= Html::encode($encabezado) ?></h2>
                
                    <div class="row">
                        <div class="col-lg-5">

                            <?php $form = ActiveForm::begin(["method" => "post",'id' => 'contact-form', "options" => ["enctype" => "multipart/form-data"],]); ?>

                                <?= $form->field($model, 'nombreinv')->textInput(['autofocus' => true]) ?>
                                
                                <?= $form->field($model, 'nombrefac') ?>

                                <?= $form->field($model, 'titulopropuesta') ?>

                                 <?= $form->field($model, 'convocatoria') ?>


                                <?= $form->field($model, 'file1')->fileInput() ?>

                                 <?= $form->field($model, 'file2')->fileInput() ?>

                                              
                               
                                
                                <div class="form-group">
                                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>




                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                 
            </div>

        </div>
                 
   </div>