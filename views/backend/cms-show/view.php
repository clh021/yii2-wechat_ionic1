<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use clh021\wechat_ionic1\Module;

/* @var $this yii\web\View */
/* @var $model app\models\CmsShow */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Module::t('wechat', 'Cms Shows'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-show-view">

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
                'attribute' => 'catalog_id',
                'value' => $model->catalog->title,
            ],
            'title',
            'surname',
            'brief',
            'content:ntext',
            'seo_title',
            'seo_keywords',
            'seo_description',
            'banner',
            'template_show',
            'author',
            'click',
            [
                'attribute' => 'status',
                'value' => \clh021\wechat_ionic1\models\Status::labels($model->status),
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
