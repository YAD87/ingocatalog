<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Posts;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать пост', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php

$dataProvider = new ActiveDataProvider([
    'query' => Posts::find()->orderBy(['data'=>SORT_DESC]),
    'pagination' => [
        'pageSize' => 10,
    ],
]);
 
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_list',
]);