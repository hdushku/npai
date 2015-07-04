<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Role */
?>
<div class="role-view">

  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'role_name',
            'role_value',
        ],
    ]) ?>

</div>
