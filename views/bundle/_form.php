<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model chd7well\sales\models\Bundle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bundle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bundle_name')->textInput(['maxlength' => 255]) ?>


     <?= $form->field($model, 'bundle_unit_ID')->dropDownList($model->UnitList) ?>


    <?= $form->field($model, 'item_unit_ID')->dropDownList($model->UnitList) ?>
    
    <?= $form->field($model, 'item_count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('sales', 'Create') : Yii::t('sales', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
