
<?php
use yii\data\ActiveDataProvider;
use app\models\Items;
use yii\helpers\Html;


 $items = [];
                foreach (Items::find()->where(['category_id'=>3])->all() as $product) {
                    /** @var \common\models\Product $product */
                    $items[] = [
                        'content' => Html::img($product->pict, ['style'=>'width: 70%','alt' => $product->title]),
                            
                        'caption' => $product->title . ' $' . $product->price,
                    ];
                } ?>

                <div class="row carousel-holder">
                    <div class="col-md-6">
                        <?= \yii\bootstrap\Carousel::widget([
                            'items' => $items,
                            'options' => ['class' => 'slide', 'style' => 'height: 400px','width: 400px'],
                            'controls' => [
                                Html::tag('span', '', ['class' => 'glyphicon glyphicon-chevron-left']),
                                Html::tag('span', '', ['class' => 'glyphicon glyphicon-chevron-right']),
                            ],
                        ]) ?>
                    </div>
                </div>