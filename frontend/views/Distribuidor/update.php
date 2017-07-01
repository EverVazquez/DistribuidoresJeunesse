<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Distribuidor */

$this->title = 'Update Distribuidor: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Distribuidors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="distribuidor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
