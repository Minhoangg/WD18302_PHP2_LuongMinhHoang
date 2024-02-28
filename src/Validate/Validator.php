<?php

namespace app\src\Validate;

class Validator
{
    public array $validators = []; // Mảng chứa các rule validator
    public array $errors = []; // Mảng chứa các lỗi sau khi kiểm tra

    public function __construct()
    {
        // Khởi tạo mảng các validators với các rule mặc định
        $this->validators = [
            'empty' => new Rule\EmptyRule(), // Rule kiểm tra giá trị trống
            'numeric' => new Rule\NumericRule(), // Rule kiểm tra giá trị là số
            'email' => new Rule\EmailRule(), // Rule kiểm tra định dạng email
            'emailExist' => new Rule\EmailExistRule(), // Rule kiểm tra sự tồn tại của email trong cơ sở dữ liệu
            'password' => new Rule\PasswordRule(), // Rule kiểm tra mật khẩu
            'max' => new Rule\MaxRule(), // Rule kiểm tra giá trị tối đa
            'min' => new Rule\MinRule(), // Rule kiểm tra giá trị tối thiểu
            'userExist' => new Rule\UsernameExistRule(), // Rule kiểm tra sự tồn tại của tên người dùng trong cơ sở dữ liệu
            'dateOfBirth' => new Rule\DateOfBirthRule(), // Rule kiểm tra ngày sinh
        ];
    }

    // Phương thức kiểm tra các rules
    public function validate($rules, $params): void
    {
        foreach ($rules as $ruleField => $ruleString) {



            $ruleArray = explode('|', $ruleString);

            foreach ($ruleArray as $rule) {

                // Phân tích các cài đặt của rule
                $ruleSettings = $this->parseRule($rule);


                // Kiểm tra xem rule có tồn tại không
                if (isset($this->validators[$ruleSettings['rule']])) {

                    // Lấy giá trị để kiểm tra
                    $checkValue = isset($params[$ruleField]) ? $params[$ruleField] : null;


                    // Kiểm tra giá trị với rule
                    if (!$this->validators[$ruleSettings['rule']]->check($checkValue, $ruleSettings['params'])) {

                        // Nếu không hợp lệ, thêm lỗi vào mảng lỗi
                        $this->errors[$ruleField][] = $this->validators[$ruleSettings['rule']]->getMessage();

                    }
                }
            }
        }
    }

    // Phương thức phân tích cài đặt của rule
    private function parseRule($rule): array
    {

        $ruleSettings = explode(':', $rule);

        $ruleName = $ruleSettings[0];


        $ruleParams = isset($ruleSettings[1]) ? $ruleSettings[1] : null;

        return [
            'rule' => $ruleName,
            'params' => [$ruleParams]
        ];
    }

    // Phương thức trả về mảng các lỗi
    public function getErrors()
    {
        return $this->errors;
    }


}
