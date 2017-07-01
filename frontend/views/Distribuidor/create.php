<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Distribuidor */

$this->title = 'Create Distribuidor';
$this->params['breadcrumbs'][] = ['label' => 'Distribuidors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distribuidor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
