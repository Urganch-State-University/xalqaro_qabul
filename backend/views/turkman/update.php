<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TurkmanProfile */

$this->title = 'Update Turkman Profile: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Turkman Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="turkman-profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
