<?php

namespace app\src\Validate\Rule;

use app\src\Core\SQLQueryBuilder;

class DateOfBirthRule extends AbstractRule
{

    use SQLQueryBuilder;

    public function check($value, $params = null)
    {
        if (!empty($value)) {
            $selectedTimestamp = strtotime($value);
            $currentTimestamp = time();
            if ($selectedTimestamp > $currentTimestamp) {
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
        return 'Không chọn ngày từ tương lai';
    }
}
