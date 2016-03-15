<?php
namespace clh021\wechat_ionic1\widgets;

use yii\base\Widget;

class Contact extends Widget
{
    public $title;
    public $content;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('contact', [
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}