<?php

namespace app\src\Validate\Rule;

class EmptyRule extends AbstractRule
{

    public function check($value, $params = null): bool
    {
        if (empty($value)){
            return false;
        }else{
            return true ;
        }
    }

    public function getMessage(): string
    {
        return 'Không được để trống';
    }

}
