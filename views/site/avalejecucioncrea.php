<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$encabezado='Proyecto en Ejecución';
$this->title = 'Avales';
//$this->params['breadcrumbs'][] = $encabezado;

?>


<?= $msg ?>


<!-- <div class="site-contact"> -->

<div class="panel panel-default">
        
     <div class="panel-body">  

    <h2><?= Html::encode($encabezado) ?></h2>
     <h4>  Documentos a avalar </h4>
           <div class="row"> 
             <div class="col-lg-5"> 

                <?php $form = ActiveForm::begin(["method" => "post",'id' => 'contact-form', "options" => ["enctype" => "multipart/form-data"], 'class' => 'form-horizontal',]); ?>

                    <?= $form->field($model, 'sInfomensual')->checkbox()?>
                    
                    <?= $form->field($model, 'sInfotrimestral')->checkbox()?>
 
                     <?= $form->field($model, 'sPlanillaincent')->checkbox()?>

                     <?= $form->field($model, 'sComprasol')->checkbox()?>
                     
                     <?= $form->field($model, 'sTransferenciasol')->checkbox()?>

                     <?= $form->field($model, 'sProrrogasol')->checkbox()?>

                     <?= $form->field($model, 'sFirmacontratosol')->checkbox()?>


                     
                     <?= $form->field($model, 'sOtrodoc')?>

                     <?= $form->field($model, 'sNombreproyecto')->dropDownList(['a' => 'Proyecto A', 'b' => 'Proyecto B', 'c' => 'Proyecto C']) ?>

                     <?= $form->field($model, 'iTotalfirmas')?>

                    <?= $form->field($model, 'sComentarios')->textarea(array('rows'=>2,'cols'=>5)); ?>

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

     
<!-- </div> -->
