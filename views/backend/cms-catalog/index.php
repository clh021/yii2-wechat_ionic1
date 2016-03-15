<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use clh021\wechat_ionic1\models\CmsCatalog;
use clh021\wechat_ionic1\Module;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CmsCatalogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('wechat', 'Cms Catalogs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-catalog-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Module::t('wechat', 'Create ') . Module::t('wechat', 'Cms Catalog'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th><?= Module::t('wechat', 'Title') ?> </th>
            <th><?= Module::t('wechat', 'Sort Order') ?></th>
            <th><?= Module::t('wechat', 'Page Type') ?></th>
            <th><?= Module::t('wechat', 'Is Nav') ?></th>
            <th><?= Module::t('wechat', 'Status') ?></th>
            <th><?= Module::t('wechat', 'Actions') ?></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($dataProvider as $item){ ?>
        <tr data-key="1">
            <td><?= $item['id']; ?></td>
            <td><?= $item['label']; ?></td>
            <td><?= $item['sort_order']; ?></td>
            <td><?= CmsCatalog::getCatalogPageTypeLabels($item['page_type']); ?></td>
            <td><?= \clh021\wechat_ionic1\models\YesNo::labels()[$item['is_nav']]; ?></td>
            <td><?= \clh021\wechat_ionic1\models\Status::labels()[$item['status']]; ?></td>
            <td>
                <?php if ($item['page_type'] == CmsCatalog::PAGE_TYPE_LIST) { ?><a href="<?= \Yii::$app->getUrlManager()->createUrl(['cms/cms-show/create','catalog_id'=>$item['id']]); ?>" title="<?= Module::t('wechat', 'Add Show');?>" data-pjax="0"><span class="glyphicon glyphicon-file"></span></a> <?php } ?>
                <a href="<?= \Yii::$app->getUrlManager()->createUrl(['cms/cms-catalog/create','parent_id'=>$item['id']]); ?>" title="<?= Module::t('wechat', 'Add Sub Catelog');?>" data-pjax="0"><span class="glyphicon glyphicon-plus-sign"></span></a>
                <a href="<?= \Yii::$app->getUrlManager()->createUrl(['cms/cms-catalog/view','id'=>$item['id']]); ?>"" title="<?= Module::t('wechat', 'View');?>" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="<?= \Yii::$app->getUrlManager()->createUrl(['cms/cms-catalog/update','id'=>$item['id']]); ?>"" title="<?= Module::t('wechat', 'Update');?>" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?= \Yii::$app->getUrlManager()->createUrl(['cms/cms-catalog/delete','id'=>$item['id']]); ?>"" title="<?= Module::t('wechat', 'Delete');?>" data-confirm="<?= Module::t('wechat', 'Are you sure you want to delete this item?');?>" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
