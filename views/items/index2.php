<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Items;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 <div class="container">

    <?php 
    $dataProvider = new ActiveDataProvider([
    'query' => Items::find()->with('category')->where(['category_id'=>$model->id]),
    'pagination' => [
        'pageSize' => 10,
    ],
]);
 
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_list',
]); ?>

</div>
</div>