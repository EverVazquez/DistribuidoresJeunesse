<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Distribuidor */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="distribuidor-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'nombre') ?>
        <a class="glyphicon glyphicon-search" href="https://consultas.curp.gob.mx/CurpSP/inicio2_2.jsp"  target="_blank"> Consulta de CURP</a>
        <?= $form->field($model, 'curp') ?>     
        <?= $form->field($model, 'rfc') ?>
        <?= $form->field($model, 'banco') ?>
        <?= $form->field($model, 'numero_cuenta') ?>
        <?= $form->field($model, 'clabe') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
