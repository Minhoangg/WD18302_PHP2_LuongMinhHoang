<?php

namespace app\src\Validate;

class Validator
{
    public array $validators = [];
    public array $errors = [];

    public function __construct()
    {
        $this->validators = [
            'empty' => new Rule\EmptyRule(),
            'numeric' => new Rule\NumericRule(),
            'email' => new Rule\EmailRule(),
            'password' => new Rule\PasswordRule(),
            'max' => new Rule\MaxRule(),
            'min' => new Rule\MinRule()
        ];
    }

    public function validate($rules, $params): void
    {
        foreach ($rules as $ruleField => $ruleString) {

            $ruleArray = explode('|', $ruleString);

            foreach ($ruleArray as $rule) {

                $ruleSettings = $this->parseRule($rule);

                if (isset($this->validators[$ruleSettings['rule']])) {

                    $checkValue = isset($params[$ruleField]) ? $params[$ruleField] : null;

                    if (!$this->validators[$ruleSettings['rule']]->check($checkValue, $ruleSettings['params'])) {

                        $this->errors[$ruleField][] = $this->validators[$ruleSettings['rule']]->getMessage();

                    }
                }
            }

        }
    }

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


    public function getErrors()
    {
        return $this->errors;
    }


}
