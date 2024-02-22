<?php

namespace app\src\Validate\Rule;

class MinRule extends AbstractRule
{

    public function check($value, $params = null): bool
    {
        return strlen($value) >= $params[0];
    }

    public function getMessage(): string
    {
        return 'quy tắc tối thiểu không hợp lệ';
    }


}
