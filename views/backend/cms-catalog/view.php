<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use clh021\wechat_ionic1\Module;

/* @var $this yii\web\View */
/* @var $model app\models\CmsCatalog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Module::t('wechat', 'Cms Catalogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-catalog-view">

    <p>
        <?= Html::a(Module::t('wechat', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Module::t('wechat', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Module::t('wechat', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'parent_id',
                'value' => $model->parent_id ? $model->parent->title : Module::t('wechat', 'Root Catalog'),
            ],
            'title',
            'surname',
            'brief',
            'content:ntext',
            'seo_title',
            'seo_keywords',
            'seo_description',
            'banner',
            [
                'attribute' => 'is_nav',
                'value' => \clh021\wechat_ionic1\models\YesNo::labels($model->is_nav),
            ],
            'sort_order',
            [
                'attribute' => 'page_type',
                'value' => \clh021\wechat_ionic1\models\CmsCatalog::getCatalogPageTypeLabels($model->page_type),
            ],
            'page_size',
            'template_list',
            'template_show',
            'template_page',
            'redirect_url:url',
            [
                'attribute' => 'status',
                'value' => \clh021\wechat_ionic1\models\Status::labels($model->status),
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
