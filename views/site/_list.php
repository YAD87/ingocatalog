<div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $model->title ?></h3>
        </div>
        <div class="panel-body">
          <?= $model->title ?>
            <?= $model->text ?><br>
             <span class="label label-success"><?= $model->data ?></span><br>
             <span class="badge badge-info"><?= $model->tags ?></span> 

            <div class="pull-right">
            	<img width=100; height=100; src=<?= $model->path ?>><br>

            </div>
        </div>
    </div>