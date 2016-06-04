<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'IIQB Gestiones Administrativas',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-static-top' ,//static/fixed
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            [
		'label' => 'Avales', 
		'items' => [
		          ['label' => 'Propuesta investigación', 'url'=>['/site/avalpropuestainv']],
            	 ['label' => 'Proyecto en ejecución',  'url'=>['/site/avalproyectoejec']  ],
                 //'url' => ['/site/index']
                 ['label' => 'Informe final',  'url'=>['/site/avalproyectofin']   ], 
                 //'url' => ['/site/index']

                 ['label' => 'Propuesta investigación (adm)', 'url'=>['/site/avalpropuestalist'] ],
                 ['label' => 'Proyecto en ejecución (adm) ', 'url'=>['/site/avalejecucionlist']  ],
                  ['label' => 'Informe final (adm)',  'url'=>['/site/avalinformelist']  ],
		      ],
	      ],

          [
        'label' => 'Vehículo',    
        'items' => [
                  ['label' => 'Préstamo', 'url'=>['/site/vehiculoprestamoinv']],
                  ['label' => 'Gestionar Préstamo', 'url'=>['/site/vehiculoprestamolist'] ],
               
                  ['label' => 'Control de servicios (adm)', 'url'=>['/site/vehiculoservicios']  ],
                  ['label' => 'Catálogo ABC (adm)' , 'url'=>['/site/vehiculocatalogo'] ],
                
              ],
          ],

          [
        'label' => 'Constancias', 
        'items' => [
                  ['label' => 'Solicitar constancia',  'url'=>['/site/constanciainv']     ],
                  ['label' => 'Gestionar constancia (adm)', 'url'=>['/site/constancia']          ],
                
              ],
          ],

         ['label' => 'Alertas', 

            'items' => [
                  ['label' => '',       ],
                  
                
              ],

              ],

	    ['label' => 'Consultas', 'url' => ['/site/contact']],
         ['label' => 'Regresar IIQB', 'url' => ['/site/index']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Salir',   ]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    /*
    echo "<form class='navbar-form navbar-right' role='search'>
       <div class='form-group has-feedback'>
            <input id='searchbox' type='text' placeholder='Search' class='form-control'>
            <span id='searchicon' class='fa fa-search form-control-feedback'></span>
        </div>
      </form>";*/

    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"> USAC IIQB <?= date('Y') ?></p>

       
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
