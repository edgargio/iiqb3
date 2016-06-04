<?php

namespace app\models;

use Yii;
use yii\base\Model;


class AvalPropuestaInv extends Model
{
    public $nombreinv;
    public $nombrefac;
    public $titulopropuesta;
    public $convocatoria;

    public $file1;
    public $file2;

    public $email;
    public $subject;
    public $body;
    public $verifyCode;

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
            [[ 'nombreinv', 'nombrefac', 'titulopropuesta',
               'convocatoria',                
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
            'nombreinv' => 'Nombre de investigador principal',
            'nombrefac' =>  'Investigador responsable en la Facultad',
            'titulopropuesta'   =>'Título de la propuesta',
            'convocatoria'=>'Convocatoria a la que participa',
            'file1' => 'Adjuntar aval Dirección Escuela (pdf, jpg)',
            'file2' => 'Adjuntar propuesta (pdf, word)',
            'verifyCode' => 'Verification Code',
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
