<?php

namespace app\models;

use Yii;
use yii\base\Model;


class ConstanciaSolicitudInv extends Model
{
    public $nombreinv;
    public $periodo;
    public $observaciones;
    
 

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [[ 'nombreinv', 'periodo'            
               ], 'required' ,'message' => 'Campo requerido'],
           
                   
        ];
    }


    /**
     * @return array customized attribute labels   'file2' => 'Adjuntar propuesta',
     */
    public function attributeLabels()
    {
        return [
            'nombreinv' => 'Nombre de investigador',
            'periodo' =>  'Período de constancia',
            'observaciones'   =>'Observaciones',           
           
        ];
    }



}
