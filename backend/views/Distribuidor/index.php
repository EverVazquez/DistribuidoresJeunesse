<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel common\models\DistribuidorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Distribuidors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distribuidor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php // Html::a('Create Distribuidor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>







<?php

$viewMsg="Ver información distribuidor";
$deleteMsg="Eliminar Registro";
$updateMsg="Actualizar la información";

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'username',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'username', 'size'=>'md']
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'nombre',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'nombre', 'size'=>'md']
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'curp',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'crup', 'size'=>'md']
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'rfc',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'rfc', 'size'=>'md']
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'numero_cuenta',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'numero_cuenta', 'size'=>'md']
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'banco',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'banco', 'size'=>'md']
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'clabe',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'clabe', 'size'=>'md']
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'estado', 
        'vAlign'=>'middle',
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        //'dropdown' => true,
        'vAlign'=>'middle',
        //'urlCreator' => function($action, $model, $key, $index) { return '#'; },
        'viewOptions'=>['title'=>$viewMsg, 'data-toggle'=>'tooltip'],
        'updateOptions'=>['title'=>$updateMsg, 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['title'=>$deleteMsg, 'data-toggle'=>'tooltip'], 
    ],
];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns,
    'containerOptions' => ['style'=>'overflow: false'], // only set when $responsive = false
    'beforeHeader'=>[
        [
            'options'=>['class'=>'skip-export'] // remove this row from export
        ]
    ],
    'toolbar' =>  [
        '{export}',
        '{toggleData}'
    ],
    'pjax' => true,
    'bordered' => true,
    'striped' => false,
    'condensed' => false,
    'responsive' => true,
    'hover' => true,
    'floatHeader' => false,
    'showPageSummary' => true,
    'panel' => [
        'type' => GridView::TYPE_PRIMARY
    ],
]);

?>


</div>
