<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\FormUpload;
use yii\web\UploadedFile;


 use app\models\Querys;

use app\models\AvalPropuestaInv;       //add models 
use app\models\AvalPejecucionInv;
use app\models\AvalPfinalizadoInv;

use app\models\VehiculoSolicitudInv;
use app\models\VehiculoServicio;

use app\models\ConstanciaSolicitudInv;


use app\models\VehiculoNuevo;


class SiteController extends Controller
{


    public function actionAvalpropuesta()
    {
         
         
       $table = new Querys();
       $model = $table->find()->all();
       

        return $this->render("avalpropuesta", ["model" => $model]);
      
       
       //return $this->render("avalpropuesta")


    }


  /*
        Investigador: Crea Aval propuesta de investigacion
    */
    public function actionAvalpropuestacrea()
    {


          $model = new AvalPropuestaInv;
          $msg = null;
       

          if ($model->load(Yii::$app->request->post()))
          {

                $model->file1 = UploadedFile::getInstance($model, 'file1');

                if ($model->file1 && $model->validate()) 
                 {
                       $file1=$model->file1 ;
                       $file1->saveAs(Yii::getAlias('@uploadedfilesdir/') . $file1->baseName . '.' . $file1->extension);
                       $msg = "<h3><strong class='label label-info'>  Enhorabuena, subida realizada con éxito</strong></h3>";
                                  //return $this->redirect(['login']);  
                 }
          }
 
         
          return $this->render("avalpropuestacrea", ["model" => $model, "msg" => $msg]);      
       // return $this->render("avalinvpropuesta");

                
                /*
                _________________________NOTA_________________________________________________
                <?php { ?>

                //These are values: <br />
                //Floor: 

                <?php } ?>
                <?= $msg ?>
                */
    }
   

    /*
        INVESTIGADOR: Lista de Avales propuesta de investigacion
    */
    public function actionAvalpropuestainv()
    {

         return $this->render("avalpropuestainv");
    }

    public function actionAvalsegpropinv()
    {

         return $this->render("avalsegpropinv");
    }

     public function actionAvalactpropinv()
    {

         return $this->render("avalactpropinv");
    }

   

   

   public function actionAvalpropuestalist()
    {
            return $this->render("avalpropuestalist");
    }



    /*
        Investigador: Aval proyecto en ejecucion
    */
    public function actionAvalejecucioncrea()
    {

          $model = new AvalPejecucionInv;
          $msg = null;
       

          if ($model->load(Yii::$app->request->post()))
          {
                     
                $model->file1 = UploadedFile::getInstance($model, 'file1');

                if ($model->file1 && $model->validate()) 
                 {
                       $file1=$model->file1 ;
                       $file1->saveAs(Yii::getAlias('@uploadedfilesdir/') . $file1->baseName . '.' . $file1->extension);
                       $msg = "<h3><strong class='label label-info'>  Enhorabuena, subida realizada con éxito</strong></h3>";
                                  //return $this->redirect(['login']); 
                 }
          } 
         
          return $this->render("avalejecucioncrea", ["model" => $model, "msg" => $msg]);      
      
    }

   /*
        Investigador: Aval proyecto en ejecucion
    */
    public function actionAvalpfinalizadoinv()
    {

          $model = new AvalPfinalizadoInv;
          $msg = null;
       

          if ($model->load(Yii::$app->request->post()))
          {
                     
                $model->file1 = UploadedFile::getInstance($model, 'file1');

                if ($model->file1 && $model->validate()) 
                 {
                       $file1=$model->file1 ;
                       $file1->saveAs(Yii::getAlias('@uploadedfilesdir/') . $file1->baseName . '.' . $file1->extension);
                       $msg = "<h3><strong class='label label-info'>  Enhorabuena, subida realizada con éxito</strong></h3>";
                                  //return $this->redirect(['login']);  
                 }
          }
 
         
          return $this->render("avalpfinalizadoinv", ["model" => $model, "msg" => $msg]);      
       // return $this->render("avalinvpropuesta");
           
    }

      public function actionAvalproyectofin()
    {
            return $this->render("avalproyectofin");
    }


       public function actionAvalejecucionlist()
    {
            return $this->render("avalejecucionlist");
    }

        public function actionAvalsegejecucioninv()
    {
            return $this->render("avalsegejecucioninv");
    }


        public function actionAvalsegifinalinv()
    {
            return $this->render("avalsegifinalinv");
    }




    /* _______________________________________________
        Administrador: SEGUIMIENTO PROPUESTA INVESTIGACION
        ______________________________________________
    */
    public function actionAvalsegpropuesta()
    {
            return $this->render("avalsegpropuesta");
    }


    /* _______________________________________________
        Administrador: REVISION PROPUESTA INVESTIGACION
        ______________________________________________
    */
    public function actionAvalrevpropuesta()
    {
            return $this->render("avalrevpropuesta");
    }



 public function actionAvalproyectoejec()
  {
            return $this->render("avalproyectoejec");
    } 

     public function actionAvalsegejecucion()
  {
            return $this->render("avalsegejecucion");
    } 



    public function actionAvalinformelist()
  {
            return $this->render("avalinformelist");
    } 

   public function actionAvalseginforme()
  {
            return $this->render("avalseginforme");
            
    } 

  /* ______________________________________________
     *************** VEHICULO *********************
     ______________________________________________
  */

     //Lista solicitudes investigador
    public function actionVehiculoprestamoinv()
    {
            return $this->render("vehiculoprestamoinv");
    }

 

     /*
        Investigador: Crea solicitud prestamo vehiculo
    */
    public function actionVehiculosolicinv()
    {


          $model = new VehiculoSolicitudInv;
          $msg = null;
       

          if ($model->load(Yii::$app->request->post()))
          {

                $model->file1 = UploadedFile::getInstance($model, 'file1');

                if ($model->file1 && $model->validate()) 
                 {
                       $file1=$model->file1 ;
                       $file1->saveAs(Yii::getAlias('@uploadedfilesdir/') . $file1->baseName . '.' . $file1->extension);
                       $msg = "<h3><strong class='label label-info'>  Enhorabuena, subida realizada con éxito</strong></h3>";
                                  //return $this->redirect(['login']);  
                 }
          }
 
         
          return $this->render("vehiculosolicinv", ["model" => $model, "msg" => $msg]);      
       // return $this->render("avalinvpropuesta");
  }


     //Seguimiento solicitud de prestamo
    public function actionVehiculoseginv()
    {
            return $this->render("vehiculoseginv");
    }

      //Seguimiento solicitud de prestamo
    public function actionVehiculosegactinv()
    {
            return $this->render("vehiculosegactinv");
    }


 //Listado de prestamos de vehiculos
 public function actionVehiculoprestamolist()
    {
            return $this->render("vehiculoprestamolist");
    }

 //Detalle prestamo de vehiculo
 public function actionVehiculoprestamodet()
  {
            return $this->render("vehiculoprestamodet");
    }    

//Entrega de vehiculo
 public function actionVehiculoentrega()
  {
            return $this->render("vehiculoentrega");
    }    

//Devolucion de vehiculo
 public function actionVehiculodevolucion()
  {
            return $this->render("vehiculodevolucion");
    }    


  //Control Servicios
    public function actionVehiculoservicios()
    {
            return $this->render("vehiculoservicios");
    }


    //nuevo servicio
    public function actionVehiculoservicionuevo()
    {


       $model = new VehiculoServicio;
        
       return $this->render("vehiculoservicionuevo", ["model" => $model]);  
    }
   
    //Detalle Servicio realizado
    public function actionVehiculoserviciodet()
    {
            return $this->render("vehiculoserviciodet");
    }


     //Catalogo vehiculo
    public function actionVehiculocatalogo()
    {
            return $this->render("vehiculocatalogo");
    }


  public function actionVehiculonuevo()
    {
         
         
       $model = new VehiculoNuevo();
     
       

        return $this->render("vehiculonuevo", ["model" => $model]);
      
       
       


    }

     //Detalle
    public function actionVehiculodetalle()
    {
            return $this->render("vehiculodetalle");
    }




   //CONSTANCIAS
  public function actionConstanciainv()
    {
            return $this->render("constanciainv");
    }

     public function actionConstancia()
    {
            return $this->render("constancia");
    }
   
    //Crear constancia
    public function actionConstanciasolicinv()
    {
         
         
       $model = new ConstanciaSolicitudInv();
     
       

        return $this->render("constanciasolicinv", ["model" => $model]);
      
       
       //return $this->render("avalpropuesta")


    }

      public function actionConstanciaemitir()
    {
            return $this->render("constanciaemitir");
    }
   

   





    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
