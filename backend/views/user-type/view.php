<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\UserType */
?>
<div class="user-type-view">

  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_type_name',
            'user_type_value',
        ],
    ]) ?>

</div>
