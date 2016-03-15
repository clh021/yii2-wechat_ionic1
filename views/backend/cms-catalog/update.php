<?php

use yii\helpers\Html;
use clh021\wechat_ionic1\Module;

/* @var $this yii\web\View */
/* @var $model app\models\CmsCatalog */

$this->title = Module::t('wechat', 'Update ') . Module::t('wechat', 'Cms Catalog') . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Module::t('wechat', 'Cms Catalogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('wechat', 'Update');
?>
<div class="cms-catalog-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
