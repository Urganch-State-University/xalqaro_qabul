<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TurkmanProfile */

$this->title = 'Create Turkman Profile';
$this->params['breadcrumbs'][] = ['label' => 'Turkman Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turkman-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
