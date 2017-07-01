<?php

use kartik\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\captcha\Captcha;
use kartik\widgets\TypeaheadBasic;
/* @var $this yii\web\View */

$this->title = 'Jeunesse México';
?>
<div class="site-index">

    <div class="jumbotron">
        <center><img class="img-responsive" src="img/Logo.jpg" alt="Jeunesse Global">  </center>   
        <p>¡Hola! bienvenido al portal para captura y actualización de documentos</p>       
    </div>

<div class="distribuidor-form">
    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL,'options'=>['enctype'=>'multipart/form-data']  ]);?>
 
        <div class="form-group">        
            <div class="col-sm-5">
                <?= $form->field($model, 'nombre',['showLabels'=>false])->textInput(['placeholder'=>'Nombre Completo','style'=>'text-transform:uppercase;']); ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($model, 'username',['showLabels'=>false])->textInput(['placeholder'=>'Username','style'=>'text-transform:uppercase;']); ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'email',['showLabels'=>false])->textInput(['placeholder'=>'email: nombre@dominio.com','style'=>'text-transform:uppercase;']); ?>
            </div>
        </div>

        <div class="form-group">        
            <div class="col-sm-5">
                <?= $form->field($model, 'curp',['showLabels'=>false])->textInput(['placeholder'=>'Ingresa tu Curp','style'=>'text-transform:uppercase;']); ?>
            </div>
            <div class="col-sm-2">
                <a href="https://consultas.curp.gob.mx/CurpSP/inicio2_2.jsp"  target="_blank"><i class="glyphicon glyphicon-search"></i>  CONSULTAR CURP</a> 
            </div>
            <div class="col-sm-5">
                <?= $form->field($model, 'rfc',['showLabels'=>false])->textInput(['placeholder'=>'RFC: XEXX010101000','style'=>'text-transform:uppercase;']); ?>
            </div>
        </div>


        <div class="form-group">        
            <div class="col-sm-4">
                <?= $form->field($model, 'banco',['showLabels'=>false])->textInput(['placeholder'=>'Nombre del banco','style'=>'text-transform:uppercase;']); ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'numero_cuenta',['showLabels'=>false])->textInput(['placeholder'=>'Número de cuenta','style'=>'text-transform:uppercase;']); ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'clabe',['showLabels'=>false])->textInput(['placeholder'=>'Clabe interbancaria (18 digitos)','style'=>'text-transform:uppercase;']); ?>
            </div>
        </div>

        
        <div class="form-group">   
            <div class="col-sm-2"><p><b>COMPROBANTE RFC/CURP</b></p></div>
            <div class="col-sm-5">
                <?= $form->field($model, 'rfc_registro',['showLabels'=>false])->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*'],
                        'pluginOptions' => [
                        'showCaption' => false,
                        'showRemove' => false,
                        'showUpload' => false,
                        'browseClass' => 'btn btn-primary btn-block',
                        'browseIcon' => '<i class="glyphicon glyphicon-list-alt"></i> ',
                        'browseLabel' =>  'RFC'
                    ],

                    ]);?>
            </div>
            <div class="col-sm-5">
                <?= $form->field($model, 'curp_registro',['showLabels'=>false])->widget(FileInput::classname(), [
                    'options' => ['accept' => 'image/*'],
                    'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block',
                    'browseIcon' => '<i class="glyphicon glyphicon-list-alt"></i> ',
                    'browseLabel' =>  'CURP'
                ],
                ]);?>
            </div>
        </div>


        <div class="form-group">
        <div class="col-sm-2"><p><b>IDENTIFICACIÓN FRONTAL/TRASERA</b></p></div>
            <div class="col-sm-5">
                <?= $form->field($model, 'identificacion',['showLabels'=>false])->widget(FileInput::classname(), [
                    'options' => ['accept' => 'image/*'],
                    'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block',
                    'browseIcon' => '<i class="glyphicon glyphicon-user"></i> ',
                    'browseLabel' =>  'IDENTIFICACIÓN FRONTAL'
                ],
                ]);?>
            </div>

             
        </div>
        
        <div class="form-group">
            <div class="col-sm-2"><p><b>COMPROBANTE DOMICILIO/ESTADO DE CUENTA</b></p></div>
            <div class="col-sm-5">
                <?= $form->field($model, 'comprobante_domicilio',['showLabels'=>false])->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*'],
                        'pluginOptions' => [
                        'showCaption' => false,
                        'showRemove' => false,
                        'showUpload' => false,
                        'browseClass' => 'btn btn-primary btn-block',
                        'browseIcon' => '<i class="glyphicon glyphicon-home"></i> ',
                        'browseLabel' =>  'COMPROBANTE DE DOMICILIO'
                    ],
                    ]);?>
            </div> 
            <div class="col-sm-5">
                <?= $form->field($model, 'estado_cuenta',['showLabels'=>false])->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*'],
                        'pluginOptions' => [
                        'showCaption' => false,
                        'showRemove' => false,
                        'showUpload' => false,
                        'browseClass' => 'btn btn-primary btn-block',
                        'browseIcon' => '<i class="glyphicon glyphicon-usd"></i> ',
                        'browseLabel' =>  'ESTADO DE CUENTA'
                    ],
                    ]);?>
            </div>         
        </div>
        <div class="form-group">
            <div class="col-sm-6">
                    <?= $form->field($model, 'captcha')->widget(Captcha::className()) ?>
            </div>           
        </div>





    

            


        

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Siguiente' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>            

    
</div>
