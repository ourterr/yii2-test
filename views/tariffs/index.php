<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TariffsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tariffs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tariffs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tariffs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true, 
		'export' => false, 
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
			'name:ntext',
            'price',            
            [
				'class' => 'kartik\grid\EditableColumn',
				'header' => 'Скорость',
				'attribute' => 'speed', 
			], 
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
