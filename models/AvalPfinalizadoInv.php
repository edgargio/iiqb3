<?php

namespace app\models;

use Yii;
use yii\base\Model;


class AvalPfinalizadoInv extends Model
{
    public $sNominvestigador;
    public $sNomresponsablefac;
    public $sTituloproyecto;
    public $sEfinanciante;
    
    public $file1;
    public $file2;

   
    

    public function rules()
    {
        return [ ];
    }


    /**
     * @return array customized attribute labels  
     */
    public function attributeLabels()
    {
        return [
            'sNominvestigador' => 'Nombre de investigador principal',
            'sNomresponsablefac' =>  'investigador principal en la Facultad',
            'sTituloproyecto'   =>'Título de proyecto',
            'sEfinanciante'=>'Entidad financiante',
          
            'file1' => 'Adjuntar aval Dirección Escuela (pdf, jpg , tiff)',
            'file2' => 'Adjuntar documentos (pdf, word)',
            
        ];                                              
    }


}
