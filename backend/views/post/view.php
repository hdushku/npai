<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
?>
<div class="post-view">

  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
            'tags:ntext',
            'status',
            'create_time:datetime',
            'update_time:datetime',
            'user_id',
        ],
    ]) ?>

</div>
