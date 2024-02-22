<?php

namespace app\src\Validate\Rule;

/**
 * ^:             Bắt đầu của chuỗi.
 * \S*:           Bất kỳ ký tự không phải khoảng trắng nào (không giới hạn).
 * (?=\S{8,}):    để đảm bảo chuỗi chứa ít nhất 8 ký tự.
 * (?=\S*[a-z]):  để đảm bảo chuỗi chứa ít nhất một ký tự viết thường.
 * (?=\S*[A-Z]):  để đảm bảo chuỗi chứa ít nhất một ký tự viết hoa.
 * (?=\S*[\d]):   để đảm bảo chuỗi chứa ít nhất một chữ số.
 * \S*:           Bất kỳ ký tự không phải khoảng trắng nào (không giới hạn).
 * $:             Kết thúc của chuỗi.
 */

class PasswordRule extends AbstractRule
{

    public function check($value, $params = null)
    {
        if (!empty($value)){
            if (preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $value)){
                return true;
            }else{
                return false;
            }
        }else{
        return true;
        }
    }

    public function getMessage(): string
    {
        return 'Mật khẩu không đúng định dạng';
    }

}
