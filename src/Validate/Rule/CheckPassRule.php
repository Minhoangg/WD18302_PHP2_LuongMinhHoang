<?php



namespace app\src\Validate\Rule;

use app\src\Core\Database;

class CheckPassRule extends AbstractRule
{

    public function check($value, $params = null)
    {

        if (!empty($value)) {
            if (password_verify($password, $resultCheck['password'])) {
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
