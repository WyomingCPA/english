<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Links';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <p>
        <?= Html::a('Create Link', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= Html::beginForm(['link/link-learn'], 'post'); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\CheckboxColumn',
                'checkboxOptions' => function ($model, $key, $index, $widget) {
                    return ['value' => $model['id']];
                },
            ],
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'link',
                'value' => function ($data) {
                    return Html::a($data->link, $data->link, ['target' => '_blank']);
                },
                'format' => 'raw',
            ],
            [
                'attribute' => '',
                'value' => function ($data) {
                    return Html::a('Смотреть', ['link/words', 'link_id' => $data->id], ['target' => '_blank']);
                },
                'format' => 'raw',
            ],
            'last_update',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?= Html::submitButton('Выучил', ['class' => 'btn btn-info',]); ?>

    <?= Html::endForm(); ?>
</div>