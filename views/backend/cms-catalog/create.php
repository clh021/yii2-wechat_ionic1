<?php

use yii\helpers\Html;
use clh021\wechat_ionic1\Module;

/* @var $this yii\web\View */
/* @var $model app\models\CmsCatalog */

$this->title = Module::t('wechat', 'Create ') . Module::t('wechat', 'Cms Catalog');
$this->params['breadcrumbs'][] = ['label' => Module::t('wechat', 'Cms Catalogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-catalog-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
