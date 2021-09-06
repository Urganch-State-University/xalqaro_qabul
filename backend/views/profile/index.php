<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'patronymic',
            'state_id',
            //'province_id',
            //'region_id',
            //'address:ntext',
            //'phone_1',
            //'phone_2',
            //'date_birth',
            //'email:email',
            //'gender_id',
            //'image:ntext',
            //'status',
            //'created_at',
            //'updated_at',
            //'diplom',
            //'transkriptlar',
            //'year_of_graduation',
            //'sertifikat',
            //'pass_seria',
            //'pass_num',
            //'pass_file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
