<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$encabezado='Detalle de constancia';
$this->title = 'Constancia';

 


?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
       
        <h4><?= $encabezado ?>
          <div class="btn-group pull-right">
             
              <?= Html::a(' < Regresar', ['site/constancia'], 
                          ['class'=>'btn btn-default btn-smdefgio']) 

              ?>

            </div>
        </h4>         
      
  </div>
<!--

 <a href="site/avalrevpropuesta" class="btn btn-default btn-smdefgio"> < Regresar </a>
 
 <div class="btn-group pull-right">
              <a href="#" class="btn btn-default btn-sm">## Lock</a>
              <a href="#" class="btn btn-default btn-sm">## Delete</a>
              <a href="#" class="btn btn-default btn-sm">## Move</a>
          </div>
 

  <ul class="pager">
        <li class="next"><a href="#">&larr; Regresar</a></li>       
      </ul>

-->
 <div class="panel-body">
     
       
<div class="row">
    <div class="col-sm-7">
<dl class="dl-horizontalgio" >

        <dt>Nombre del investigador</dt>
        <dd>Investigador xyz</dd>

        <dt>Período de constancia</dt>
        <dd> abc</dd>

        <dt>Comentarios</dt>
        <dd>....</dd>
        
    </dl>

</div>
</div>

  <br><br>
 
        <!-- encabezado tabs -->
         <ul class="nav nav-tabs"> <!-- nav-justified -->
          <li class="active"><a data-toggle="tab" href="#home">Información asociada</a></li>
          <li><a data-toggle="tab" href="#menu1">Emitir constancia</a></li>
           <li><a data-toggle="tab" href="#menu2">Negar constancia</a></li>
                    
         </ul>

        <!-- TABS -->
        <div class="tab-content">
         
          <div id="home" class="tab-pane fade in active">
            
           
             <!-- TAB 1 -->
               <div class="form-group"> <!-- row-->
                    <div class="col-lg-10">

                     <p><b>Información asociada al investigador</b>  </p>
 
                     <div class="well well-sm"> <h4></h4> </div>

                         <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-primary ">Cargar información</button>
                        </div>
                      </div>
                    </div>
  
                </div> 
 
 
          </div>

           <!-- TAB 2 -->

          <div id="menu1" class="tab-pane fade">
            
               <div class="form-group"> <!-- row-->
                    <div class="col-lg-8">

                     <p><b>Comentarios</b></p>

                      
                       <p>
                        <!-- <?= Html::textarea(['rows' => 10, 'cols' => 125]) ?>-->
                        
                        <textarea rows="8" cols="50"></textarea>
                      </p>


                         <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-primary ">Enviar notificación</button>

                           

                        </div>


                      </div>
                    </div>
  
                </div>

          </div> 

            <!-- TAB 3 -->

          <div id="menu2" class="tab-pane fade">
            
               <div class="form-group"> <!-- row-->
                    <div class="col-lg-8">

                     <p><b>Comentarios</b></p>

                      
                       <p>
                        <!-- <?= Html::textarea(['rows' => 10, 'cols' => 125]) ?>-->
                        
                        <textarea rows="8" cols="50"></textarea>
                      </p>


                         <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" class="btn btn-primary ">Enviar notificación</button>
                        </div>
                      </div>
                    </div>
  
                </div>

          </div> 
         <!-- fin tabs -->
        </div>



 
   
  
    </div>

  </div>
  
         




