<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Category;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="container">

    <?php 
    $dataProvider = new ActiveDataProvider([
    'query' => Category::find(),
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
