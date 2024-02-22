<?php

namespace app\src\Validate\Rule;

class EmailRule extends AbstractRule
{

    public function check($value, $params = null)
    {
        if (!empty($value)) {
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }else{
            return true ;
        }
    }

    public function getMessage(): string
    {
        return 'Email không định dạng';
    }
}
