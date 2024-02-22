<?php

namespace app\src\Validate\Rule;

class MaxRule extends AbstractRule
{

    public function check($value, $params = null): bool
    {
        return strlen($value) <= $params[0];
    }

    public function getMessage(): string
    {
        return 'quy tắc tối đa không hợp lệ';
    }


}
