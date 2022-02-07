<?php

namespace Dumko23\PhpMvcCore\form;

use Dumko23\PhpMvcCore\Model;

class Form
{
    public static function begin($action, $method): Form
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute): InputField
    {
        return new InputField($model, $attribute);
    }
}