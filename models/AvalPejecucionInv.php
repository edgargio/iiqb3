<?php

namespace app\models;

use Yii;
use yii\base\Model;


class AvalPejecucionInv extends Model
{
    public $sInfomensual;
    public $sInfotrimestral;
    public $sPlanillaincent;
    public $sComprasol;
    public $sTransferenciasol;

    public $sFirmacontratosol;
    public $sProrrogasol;

    public $sOtrodoc;

    public $sNombreproyecto;
    public $iTotalfirmas;
    public $sComentarios;

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
            'sInfomensual' => 'Informe mensual',
            'sInfotrimestral' =>  'Informe trimestral',
            'sPlanillaincent'   =>'Planilla de incentivos',
            'sComprasol'=>'Solicitud de compra',
            'sTransferenciasol'=>'Solicitud de transferencia',
            'sOtrodoc'=>'Otro',
            'sNombreproyecto' => 'Proyecto', 

            'sFirmacontratosol' => 'Firma de contratos', 
            'sProrrogasol' => 'Solicitud de prórroga', 

            'iTotalfirmas' => 'Total de firmas requeridas',   
            'sComentarios' => 'Comentarios',
            'file1' => 'Adjuntar aval Dirección Escuela (pdf, jpg)',
            'file2' => 'Adjuntar documentos (pdf, jpg , word)',
            
        ];                                              
    }


}
