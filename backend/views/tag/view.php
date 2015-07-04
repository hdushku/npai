<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tag */
?>
<div class="tag-view">

  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'frequency',
        ],
    ]) ?>

</div>
