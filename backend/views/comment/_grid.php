<?php
use yii\helpers\Url;
use yii\widgets\Pjax;
use johnitvn\ajaxcrud\GridView;
use yii\helpers\Html;
use backend\controllers\CommentController; 

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>


<?php

/**
* Grid toolbar config
*/
$createActionButton = Html::a('<i class="glyphicon glyphicon-plus"></i>',['create'],['data-modal-title'=>'Create new Comment','class'=>'create-action-button btn btn-default']);
$refreshActionButton = Html::a('<i class="glyphicon glyphicon-repeat"></i>',['index'],['data-pjax'=>1,'class'=>'btn btn-default']);
$fullScreenActionButton = Html::a('<i class="glyphicon glyphicon-resize-full"></i>','#',['class'=>'btn-toggle-fullscreen btn btn-default']);


$bulkDeleteButton = Html::a('<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All Selected',
                                 ["bulk-delete"] ,
                                 [
                                     "class"=>"btn-bulk-delete btn btn-danger",
                                     "data-method"=>"post",
                                     "title"=>"Delete All Selected",
                                     "data-confirm-message"=>"Are you sure to delete all this items?"
                                 ]);


/**
* Grid column config
*/
$gridColumns = [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'content',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'status',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'create_time',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'user_id',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'email',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'url',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'post_id',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['class'=>'view-action-button','title'=>'View', 'data-toggle'=>'tooltip','data-modal-title'=>'View Comment'],
        'updateOptions'=>['class'=>'update-action-button','title'=>'Update', 'data-toggle'=>'tooltip','data-modal-title'=>'Update Comment'],
        'deleteOptions'=>['class'=>'delete-action-button','title'=>'Delete', 'data-toggle'=>'tooltip','data-confirm-message'=>'Are you sure to delete this item?'], 
    ],

];   

echo GridView::widget([
    'id'=>'crud-datatable',
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns,
    'toolbar' =>  [['content'=> $createActionButton.$refreshActionButton.$fullScreenActionButton.'{toogleDataNoContainer}'],'{export}'],
    'bordered' => true,
    'striped' => true,
    'condensed' => true,
    'responsive' =>true,
    'responsiveWrap' => false,
    'hover' => false,
    'showPageSummary' => false,        
    'panel' => [
        'type' => 'primary', 
        'heading' => '<i class="glyphicon glyphicon glyphicon-list"></i>  Lists',
        'before' => '<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
        'after' =>  '<div class="pull-left"></div><div class="pull-right">'.$bulkDeleteButton.'</div><div class="clearfix"></div>',
        ],    

]);

?>

   
  
