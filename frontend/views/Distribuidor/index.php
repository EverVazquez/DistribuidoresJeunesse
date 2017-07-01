<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DistribuidorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Distribuidors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distribuidor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Distribuidor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'username',
            'curp',
            'curp_registro',
            // 'rfc',
            // 'rfc_registro',
            // 'banco',
            // 'numero_cuenta',
            // 'clabe',
            // 'identificacion',
            // 'estado_cuenta',
            // 'comprobante_domicilio',
            // 'estado',
            // 'create_user_id',
            // 'create_time',
            // 'update_user_id',
            // 'update_time',
            // 'delete_user_id',
            // 'delete_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
