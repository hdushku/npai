<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>

<?php
use frontend\components\HelloWidget;
?>
<?= HelloWidget::widget(['message' => 'Good morning here']) ?>


<?php $items = [
    [
        'title' => 'Sintel',
        'href' => 'http://media.w3.org/2010/05/sintel/trailer.mp4',
        'type' => 'video/mp4',
        'poster' => 'http://media.w3.org/2010/05/sintel/poster.png'
    ],
];?>
<?= dosamigos\gallery\Carousel::widget([
    'items' => $items, 'json' => true,
    'clientEvents' => [
        'onslide' => 'function(index, slide) {
            console.log(slide);
        }'
]]);