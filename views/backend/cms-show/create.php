<?php

use yii\helpers\Html;
use clh021\wechat_ionic1\Module;

/* @var $this yii\web\View */
/* @var $model app\models\CmsShow */

$this->title = Module::t('wechat', 'Create ') . Module::t('wechat', 'Cms Show');
$this->params['breadcrumbs'][] = ['label' => Module::t('wechat', 'Cms Shows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-show-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
