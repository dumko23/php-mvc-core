<?php

namespace App\core\form;

use App\core\Model;

class InputField extends BaseField
{
    public const TYPE_TEXT = 'text';
    public const TYPE_EMAIL = 'email';
    public const TYPE_PASSWORD = 'password';

    public Model $model;
    public string $attribute;
    public string $type;

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    public function typeField($attribute)
    {
        if ($attribute === self::TYPE_PASSWORD || $attribute === 'confirmPassword') {
            $this->type = self::TYPE_PASSWORD;
        } elseif ($attribute === self::TYPE_EMAIL) {
            $this->type = self::TYPE_EMAIL;
        } elseif ($attribute === self::TYPE_TEXT) {
            $this->type = self::TYPE_TEXT;
        }
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf('
                            <input type="%s" name="%s" value="%s" class="form-control%s">

        ',$this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        );
    }
}