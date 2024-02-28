<?php

namespace app\src\Validate\Rule;

use app\src\Core\SQLQueryBuilder;

class EmailExistRule extends AbstractRule
{

    use SQLQueryBuilder;

    public function check($value, $params = null)
    {

        if (!empty($value)) {
            $this->tableName = 'user';
            $dataEmail = $this->select()->where('email', '=', $value)->first();
            if (!empty($dataEmail)) {
                return false;
            } else {
                return true;
            }
        } else {
            return true;
        }
    }

    public function getMessage(): string
    {
        return 'Email đã tồn tại';
    }
}
