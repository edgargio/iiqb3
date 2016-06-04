<?php

namespace app\models;

use Yii;
use yii\base\Model;


class VehiculoNuevo extends Model
{
    public $tipo;
    public $color;
    public $marca;
    public $placa;

    public $kilometraje;
    public $accesorios;

    public $observaciones;
     

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [[ 'tipo', 'marca', 'placa',
               'kilometraje',                
               ], 'required' ,'message' => 'Campo requerido'],
           
             ];
    }


    /**
     * @return array customized attribute labels   'file2' => 'Adjuntar propuesta',
     */
    public function attributeLabels()
    {
        return [
            'tipo' => 'Tipo de vehículo',
            'marca' =>  'Marca',
            'placa'   =>'Placa',
            'kilometraje'=>'Kilometraje',
            'observaciones' => 'Observaciones',
            'accesorios' => 'Accesorios',
     
        ];
    }





    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
