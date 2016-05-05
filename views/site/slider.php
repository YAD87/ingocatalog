
<?php
use yii\data\ActiveDataProvider;
use app\models\Items;
use yii\helpers\Html;


 $items = [];
                foreach (Items::find()->where(['category_id'=>4])->all() as $product) {
                    /** @var \common\models\Product $product */
                    $items[] = [
                        'content' => Html::img($product->pict, ['class'=>'img-responsive', 'style'=>'width: 40%','alt' => $product->title]),
                            
                        'caption' => $product->title . ' $' . $product->price, [ 'style'=>'color:red']
                    ];
                } ?>

                <div class="row carousel-holder">
                    
                        <?= \yii\bootstrap\Carousel::widget([
                            'items' => $items,
                            'options' => ['class' => 'slide', 'style' => 'height: 400px','width: 400px'],
                            'controls' => [
                                Html::tag('span', '', ['class' => 'glyphicon glyphicon-chevron-left']),
                                Html::tag('span', '', ['class' => 'glyphicon glyphicon-chevron-right']),
                            ],
                        ]) ?>
                    
                </div>