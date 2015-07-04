<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Lookup */
?>
<div class="lookup-view">

  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'code',
            'type',
            'position',
        ],
    ]) ?>

</div>
