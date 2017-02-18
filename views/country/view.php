<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Country */
?>
<div class="country-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            'name',
            'population',
        ],
    ]) ?>

</div>
