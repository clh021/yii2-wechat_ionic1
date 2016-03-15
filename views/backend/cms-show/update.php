<?php

use yii\helpers\Html;
use clh021\wechat_ionic1\Module;

/* @var $this yii\web\View */
/* @var $model app\models\CmsShow */

$this->title = Module::t('wechat', 'Update ') . Module::t('wechat', 'Cms Show') . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Module::t('wechat', 'Cms Shows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('wechat', 'Update');
?>
<div class="cms-show-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
