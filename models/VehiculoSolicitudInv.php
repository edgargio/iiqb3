<?php

namespace app\models;

use Yii;
use yii\base\Model;


class VehiculoSolicitudInv extends Model
{
    public $nombreinv;
    public $nombreproy;
    public $actividad;
    public $localidades;
    public $acompaniantes;
    public $kmsEstimado;

    public $file1;
 

    public $menssaje;
    /*

'file', 'file', 'skipOnEmpty' => false,
           'uploadRequired' => 'No has seleccionado ningún archivo',
                'file2', 'file2', 'skipOnEmpty' => false,
    */

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [[ 'nombreinv', 'nombreproy', 'actividad',
               'localidades', 'kmsEstimado'             
               ], 'required' ,'message' => 'Campo requerido'],
           
            // email has to be a valid email address
            //['email', 'email'],
            ['file1', 'file',
         
           'skipOnEmpty' => false],
            
        ];
    }


    /**
     * @return array customized attribute labels   'file2' => 'Adjuntar propuesta',
     */
    public function attributeLabels()
    {
        return [
            'nombreinv' => 'Nombre de investigador responsable',
            'nombreproy' =>  'Nombre del proyecto de investigación',
            'actividad'   =>'Actividades a realizar',
            'localidades'=>'Localidades a visitar',
            'acompaniantes'=>'Acompañantes',
            'kmsEstimado' => 'Kilometraje estimado',
            'file1' => 'Adjuntar aval Dirección Escuela (pdf, jpg)',            
           
        ];
    }



}
