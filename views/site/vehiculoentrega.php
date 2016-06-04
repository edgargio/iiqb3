<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


use kartik\date\DatePicker;

$encabezado='Gestión interna';
$this->title = 'Vehículo';

$array = array(1);


?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4> <?= $encabezado ?>
          <div class="btn-group pull-right">
             
              <?= Html::a(' < Regresar', ['site/vehiculoprestamolist'], 
                          ['class'=>'btn btn-default btn-smdefgio']) 

              ?>

            </div>
        </h4>         
      
  </div>

 <div class="panel-body">
      <br>
     
     <dl class="dl-horizontalgio" >

        <dt>Investigador Responsable</dt>
        <dd>Investigador xyz</dd>

        <dt>Fecha de uso</dt>
        <dd>01/06/16 a 3/06/16 </dd>

         <dt>Vehículo</dt>
         <dd>2 </dd>

            
    </dl>
  

  <!-- encabezado tabs -->
         <ul class="nav nav-tabs"> <!-- nav-justified -->
          <li class="active"><a data-toggle="tab" href="#home">Entrega de vehículo</a></li>
          <li><a data-toggle="tab" href="#menu1">Devolución de vehículo</a></li>
                    
         </ul>

      <!-- TABS -->
        <div class="tab-content">
         
          <div id="home" class="tab-pane fade in active">
            
           
             <!-- TAB 1 -->
                <div class="form-group">   
                  <div class="col-lg-12"> 


                   <div class="row">


                   <div class="col-xs-6">

                            <div class="row">

                              <div class="col-xs-8">

                                <?= '<b>Fecha de entrega</b>' ?>
                                 <?= '<br>'?>
                                  <?= '<br>'?>
                                        <?=   DatePicker::widget([
                                        'name' => 'datebegin',
                                         
                                        //'value' => date('d-M-Y'),
                                        'options' => ['placeholder' => 'Fecha entrega ...'],
                                        'pluginOptions' => [
                                             'autoclose'=>true,
                                            'format' => 'dd-M-yyyy',
                                            'todayHighlight' => true
                                        ]
                                       ]) ?>

                                        
                                    </div>
                                  </div>
                              

                               <?= '<br>'?>
                               <?= '<b>Documentos del vehículo</b><br>' ?>


                                   <div class="row">
                                    <div class="col-xs-8 col-sm-6">
                                      
                                      <div class="checkbox">
                                          <label><input type="checkbox" value=""> Tarjeta de circulación </label>
                                      </div>
                                       <div class="checkbox">
                                         <label><input type="checkbox" value="">  Llaves de encendido de motor</label>
                                      </div>
                                      <div class="checkbox">
                                         <label><input type="checkbox" value="">  Llaves de repuesto</label>
                                      </div>

                                    </div>
                                  </div>


                                   <?= '<br><b>Condiciones del vehículo</b><br>' ?>
                                  <div class="row">
                                    <div class="col-sm-9">
                                      
                                      <?= 'Motor: &nbsp;&nbsp;' ?>
                                     <label class="radio-inline"><input type="radio" name="optradio">Bueno</label>
                                      <label class="radio-inline"><input type="radio" name="optradio">Lento</label>
                                      <br>

                                       <?= '<br><b>Retrovisores</b><br>Exteriores: &nbsp;' ?>
                                     <label class="radio-inline"><input type="radio" name="optradio">Si</label>
                                      <label class="radio-inline"><input type="radio" name="optradio">No</label>
                                           <?= ' &nbsp; &nbsp; Interiores: &nbsp;' ?>
                                         <label class="radio-inline"><input type="radio" name="optradio">Si</label>
                                      <label class="radio-inline"><input type="radio" name="optradio">No</label>

                                    </div>
                                      

                                  </div>

                                     <?= '<br><b>Accesorios</b><br>Llanta de repuesto: &nbsp;' ?>

                                  <div class="row">
                                    <div class="col-sm-9">

                                       <input class="form-control" id="focusedInput" type="text" value="">

                                        <?= 'Llave de chuchos: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">

                                        <?= 'Tricket: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">

                                        <?= 'Otros: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">



                                        <?= '<br><b>Condición de luces</b><br>Silvines: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">

                                        <?= 'Stop: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">

                                        <?= 'Retroceso: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">
                                  
                                   </div>

                                </div>
                                 
                            

                          </div>
                        

                         <div class="col-xs-6 ">
                           

                                <div class="row">
                                    <div class="col-sm-9">

                                       

                                        <?= 'Condiciones de llantas: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">

                                        <?= '<br>Total limpiabrisas: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">

                                        <?= 'Condición limpiabrisas: &nbsp;' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">

                                        <?= '<br>Kilometraje al recibir vehículo: ' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">


                                       <?= '<br>Combustible<br>&nbsp;' ?>
                                       <label class="radio-inline"><input type="radio" name="optradio">1/4</label>
                                       <label class="radio-inline"><input type="radio" name="optradio">1/2</label>
                                      <label class="radio-inline"><input type="radio" name="optradio">3/4</label>
                                       <label class="radio-inline"><input type="radio" name="optradio">Full</label> 

                                       <p> <br>Observaciones </p>

                                        
                                         <p>
                                          <!-- <?= Html::textarea(['rows' => 10, 'cols' => 125]) ?>-->
                                          Indique daños a la estructura del vehículo u otra situazción que
                                          merezca su atención:
                                          <textarea rows="3" cols="45" placeholder=""></textarea>
                                        </p>

                                          <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-primary ">Guardar cambios</button>
                        </div>
                      </div>
                      
                                  
                                   </div>

                                </div>

                           
                         </div>

                       </div>

                </div>
                </div>
              <!--] -->
 
 
          </div>

           <!-- TAB 2 [ -->

          <div id="menu1" class="tab-pane fade">
            


  
           <div class="form-group"> <!-- row-->
                    <div class="col-lg-5">

                     
                     <?= '<b>Fecha</b>' ?>
                      <?= '<br>'?>
                        <?= '<br>'?>
                                <?=   DatePicker::widget([
                                'name' => 'datebegin',
                                 
                                'value' => date('d-M-Y'),
                                'options' => ['placeholder' => 'Fecha entrega ...'],
                                'pluginOptions' => [
                                     'autoclose'=>true,
                                    'format' => 'dd-M-yyyy',
                                    'todayHighlight' => true
                                ]
                               ]) ?>

                                <?= '<br>'?>


                             <?= '<br><b>Kilometraje final </b>' ?>
                                       <input class="form-control" id="focusedInput" type="text" value="">

                                       <?= '<br><b>Combustible</b><br>' ?>
                                       <label class="radio-inline"><input type="radio" name="optradio">1/4</label>
                                       <label class="radio-inline"><input type="radio" name="optradio">1/2</label>
                                      <label class="radio-inline"><input type="radio" name="optradio">3/4</label>
                                       <label class="radio-inline"><input type="radio" name="optradio">Full</label> 



                                 <p><br><b>Observaciones</b></p>

                                  
                                   <p>
                                    <!-- <?= Html::textarea(['rows' => 10, 'cols' => 125]) ?>-->
                                    
                                    <textarea rows="4" cols="45"></textarea>
                                  </p>


                         <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-primary ">Guardar cambios</button>
                        </div>
                      </div>
                    </div>
  
                </div> 



          </div> 


             <!-- TAB 3 -->
            <!--  -->

        </div>
         <!-- fin tabs -->
        
   
  
    </div>

  </div>
  
         




