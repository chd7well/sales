<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model chd7well\sales\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">



    <?= $form->field($model, 'productname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'itemnumber')->textInput(['maxlength' => 50]) ?>

    <?= Html::activeHiddenInput($model, 'genitemnumber', ['value' => $model->genitemnumber]) ?>
    
    <?= $form->field($model, 'GS1GTIN')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'unit_ID')->dropDownList($model->UnitList) ?>
    

	<?= $form->field($model, 'productgrp_ID')->dropDownList($model->ProductgrpList) ?>
    
    


</div>
