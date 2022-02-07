<?php

namespace Dumko23\PhpMvcCore;

use Dumko23\PhpMvcCore\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}