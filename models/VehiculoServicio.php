<?php

namespace app\models;

use Yii;
use yii\base\Model;


class VehiculoServicio extends Model
{
    public $fecha;
    public $kilometraje;
    public $vehiculo;
    public $tiposervicio;
    
    
    /*

'file', 'file', 'skipOnEmpty' => false,
           'uploadRequired' => 'No has seleccionado ningún archivo',
                'file2', 'file2', 'skipOnEmpty' => false,
    */

    public function rules()
    {
        return [
            // name, email, subject and body are required
              [[ 'fecha', 'tiposervicio'            
               ], 'required' ,'message' => 'Campo requerido'],
         
         ];
    }


    /**
     * @return array customized attribute labels   'file2' => 'Adjuntar propuesta',
     */
    public function attributeLabels()
    {
        return [
            'fecha' => 'Fecha a realizar servicio',
            'kilometraje' =>  'Kilometraje para realizar servicio',
            'tiposervicio'   =>'Tipo de servicio',
            'vehiculo'=>'Vehículo',
           
        ];
    }



}
