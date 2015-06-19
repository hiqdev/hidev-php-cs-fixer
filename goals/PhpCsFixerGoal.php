<?php

namespace hidev\phpcsfixer\goals;

use hidev\helpers\Helper;

/**
 * Goal for php-cs-fixer
 */
class PhpCsFixerGoal extends \hidev\goals\BaseGoal
{
    public function init()
    {
        $this->setDeps('.php_cs');
    }

    public function getFinder1()
    {
        $res = [];
        foreach ($this->rawItem('finder') as $k => $vs) {
            $res[$k] = Helper::asplit($vs);
        }

        return 'finder';
    }

}