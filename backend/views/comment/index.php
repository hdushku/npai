<?php

use yii\helpers\Html;
use johnitvn\ajaxcrudassets\CrudAsset; 
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Comments');
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="comment-index">
    <div id="ajaxCrudDatatable">
        <?php
                            echo $this->render('_grid', [ 
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
                        
        ?>
    </div>
</div>

<div id="ajaxCrubModal" class="fade modal" role="dialog" tabindex="-1">
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

</div>
<div class="modal-body">

</div>

</div>
</div>
</div>
