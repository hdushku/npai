<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */
?>
<div class="comment-view">

  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'content:ntext',
            'status',
            'create_time:datetime',
            'user_id',
            'email:email',
            'url:url',
            'post_id',
        ],
    ]) ?>

</div>
