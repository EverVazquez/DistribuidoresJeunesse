<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Distribuidor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Distribuidors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distribuidor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'username',
            'curp',
            'curp_registro',
            'rfc',
            'rfc_registro',
            'banco',
            'numero_cuenta',
            'clabe',
            'identificacion',
            'estado_cuenta',
            'comprobante_domicilio',
            'estado',
            'create_user_id',
            'create_time',
            'update_user_id',
            'update_time',
            'delete_user_id',
            'delete_user',
        ],
    ]) ?>

</div>
