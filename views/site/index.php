<?php

/* @var $this yii\web\View */
use yii\data\ActiveDataProvider;
use app\models\Posts;
use yii\widgets\ListView;
use app\models\Items;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <?php require "slider.php"; ?>
            <div class="col-lg-4">
<?php
$dataProvider = new ActiveDataProvider([
    'query' => Posts::find()->orderBy('data desc')->limit(3),
    'pagination'=>false,


               
            
    
]);
 
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_list',
    
     
]);
?>



               
            </div>
            
        </div>

    </div>
</div>
