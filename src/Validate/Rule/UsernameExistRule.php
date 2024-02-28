<?php

namespace app\src\Validate\Rule;

use app\src\Core\SQLQueryBuilder;

class UsernameExistRule extends AbstractRule
{
    use SQLQueryBuilder;

    public function check($value, $params = null)
    {
        if (!empty($value)) {
            $this->tableName = 'user';
            $dataUsername = $this->select()->where('username', '=', $value)->get();

            // Kiểm tra xem có kết quả trả về không
            if (!empty($dataUsername)) {
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
        return 'Tên đăng nhập đã tồn tại';
    }
}

