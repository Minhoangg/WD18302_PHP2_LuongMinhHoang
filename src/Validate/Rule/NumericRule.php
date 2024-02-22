<?php

namespace app\src\Validate\Rule;

class NumericRule extends AbstractRule
{

    public function check($value, $params = null): bool
    {
        return is_numeric($value);
    }

    public function getMessage(): string
    {
        return 'Giá trị không phải là số';
    }

}
