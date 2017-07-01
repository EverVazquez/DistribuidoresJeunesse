<?php

namespace common\models;
use ktaris\mexvalidators\CurpValidator;
use ktaris\mexvalidators\RfcValidator;


use Yii;

/**
 * This is the model class for table "distribuidor".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $username
  * @property string $email
 * @property string $curp
 * @property string $curp_registro
 * @property string $rfc
 * @property string $rfc_registro
 * @property string $banco
 * @property string $numero_cuenta
 * @property string $clabe
 * @property string $identificacion
 * @property string $estado_cuenta
 * @property string $comprobante_domicilio
 * @property integer $estado
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 * @property integer $delete_user_id
 * @property string $delete_time
 */
class Distribuidor extends \yii\db\ActiveRecord
{
    public $captcha;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distribuidor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
         
         //'identificacion', 'estado_cuenta', 'comprobante_domicilio'
            [['username','curp','rfc','clabe','email','nombre','clabe','banco','curp_registro','rfc_registro','captcha'],'required'],
            [['email'],'email'],
            [['clabe','numero_cuenta'],'integer'],
            //[['curp_registro','rfc_registro', 'estado_cuenta', 'comprobante_domicilio'],'file','extensions'=>'jpg, gif, png'],    
            [['banco'],'string', 'max' => 45],
            [['captcha'],'captcha'],
            //[['username','curp','rfc','clabe','email','nombre'],'unique'],
            ['curp', 'match', 'pattern' => '/^[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]$/','message'=>'Debes ingresar un CURP valido.'],
            ['rfc', 'match', 'pattern' => '/^[A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?$/','message'=>'Debes ingresar un RFC valido.'],





        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'NOMBRE COMPLETO',
            'username' => 'USERNAME',
            'email' => 'CORREO ELECTRÓNICO',
            'curp' => 'CURP',
            'curp_registro' => 'COMPROBANTE CURP',
            'rfc' => 'REGISTRO FEDERAL DE CONTRIBUYENTES (RFC)',
            'rfc_registro' => 'COMPROBANTE RFC',
            'banco' => 'BANCO',
            'numero_cuenta' => 'NÚMERO CUENTA',
            'clabe' => 'CLABE INTERBANCARIA',
            'identificacion' => 'IDENTIFICACIÓN',
            'estado_cuenta' => 'ESTADO DE CUENTA',
            'comprobante_domicilio' => 'COMPROBANTE DE DOMICILIO',
            'estado' => 'ESTADO',
            'captcha'=>'CAPTCHA',
            'create_user_id' => 'Create User ID',
            'create_time' => 'Create Time',
            'update_user_id' => 'Update User ID',
            'update_time' => 'Update Time',
            'delete_user_id' => 'Delete User ID',
            'delete_time' => 'Delete Time',
        ];
    }


}
