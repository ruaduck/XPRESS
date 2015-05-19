<?php
/* @var $this yii\web\View */
$this->title = 'City Viewer';
?>
<div class="site-index">
    <div class="body-content">

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\data\ActiveDataProvider;
use app\models\CitySearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create City', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'city',
            'state',
            'zip_5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>


</div>


</div>

    </div>
</div>
