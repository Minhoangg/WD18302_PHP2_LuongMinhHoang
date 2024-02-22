<?php

namespace app\src\Validate\Rule;

abstract class AbstractRule
{
    abstract public function check($value, $params = null);
    abstract public function getMessage();
}
