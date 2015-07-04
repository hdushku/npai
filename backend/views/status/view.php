<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Status */
?>
<div class="status-view">

  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'status_name',
            'status_value',
        ],
    ]) ?>

</div>
