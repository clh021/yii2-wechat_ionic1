<?php
/**
 * Common Status Class
 * User: funson
 * Date: 2014/06/25
 * Time: 9:50
 */

namespace clh021\wechat_ionic1\models;

use clh021\wechat_ionic1\Module;

class YesNo
{
    const NO = 0;
    const YES = 1;

    public $id;
    public $label;

    public function __construct($id = null)
    {
        if ($id !== null) {
            $this->id = $id;
            $this->label = $this->getLabel($id);
        }
    }

    public static function labels($id = null)
    {
        $data = [
            self::YES => Module::t('wechat', 'YES'),
            self::NO => Module::t('wechat', 'NO'),
        ];

        if ($id !== null && isset($data[$id])) {
            return $data[$id];
        } else {
            return $data;
        }
    }

    public function getLabel($id)
    {
        $labels = self::labels();
        return isset($labels[$id]) ? $labels[$id] : null;
    }

}
