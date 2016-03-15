<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \clh021\wechat_ionic1\models\CmsCatalog;
use clh021\wechat_ionic1\Module;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\CmsCatalog */
/* @var $form yii\widgets\ActiveForm */

//fix the issue that it can assign itself as parent
$parentCatalog = ArrayHelper::merge([0 => Module::t('blog', 'Root Catalog')], ArrayHelper::map(CmsCatalog::get(0, CmsCatalog::find()->asArray()->all()), 'id', 'label'));
unset($parentCatalog[$model->id]);

?>

<div class="cms-catalog-form">

    <?php $form = ActiveForm::begin([
        'options'=>['class' => 'form-horizontal', 'enctype'=>'multipart/form-data'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-2\">{hint}{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'parent_id')->dropDownList($parentCatalog) ?>

    <?= $form->field($model, 'page_type')->dropDownList(CmsCatalog::getCatalogPageTypeLabels())->hint(Module::t('wechat', 'Page need content')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'brief')->textInput(['maxlength' => 1022]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]); ?>

    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'seo_keywords')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'seo_description')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'banner')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'is_nav')->dropDownList(\clh021\wechat_ionic1\models\YesNo::labels()) ?>

    <?= $form->field($model, 'sort_order')->textInput() ?>

    <?= $form->field($model, 'page_size')->textInput() ?>

    <?= $form->field($model, 'template_list')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'template_show')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'template_page')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'redirect_url')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'click')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(\clh021\wechat_ionic1\models\Status::labels()) ?>

    <div class="form-group">
        <div class="col-lg-3 col-lg-offset-2">
            <?= Html::submitButton($model->isNewRecord ? Module::t('wechat', 'Create') : Module::t('wechat', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
