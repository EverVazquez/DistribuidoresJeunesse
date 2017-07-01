<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DistribuidorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distribuidor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'curp') ?>

    <?= $form->field($model, 'rfc') ?>

    <?= $form->field($model, 'banco') ?>

    <?php // echo $form->field($model, 'numero_cuenta') ?>

    <?php // echo $form->field($model, 'clabe') ?>

    <?php // echo $form->field($model, 'identificacion') ?>

    <?php // echo $form->field($model, 'estado_cuenta') ?>

    <?php // echo $form->field($model, 'comprobante_domicilio') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
