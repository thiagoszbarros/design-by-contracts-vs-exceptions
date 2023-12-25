<?php

namespace App;

class ClientValidatorWithDesignByContracts
{
    private $isValid;
    private $errors;

    public function getIsValid()
    {
        return $this->isValid;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    private function validateName($name)
    {
        if (strlen($name) < 3) {
            $this->isValid = false;
            $this->errors[] = 'O nome do deve ter pelo menos 3 caracteres.';
        }
    }

    private function validateAge($age)
    {
        if ($age <= 17) {
            $this->isValid = false;
            $this->errors[] = 'A idade deve ser pelo menos 18 anos.';
        }
    }

    private function ValidateDocument($document)
    {
        if (strlen($document) != 11) {
            $this->isValid = false;
            $this->errors[] = 'O documento deve ter 11 caracteres.';
        }
    }

    public function validate($name, $age, $document)
    {
        $this->validateName($name);
        $this->validateAge($age);
        $this->ValidateDocument($document);

        return $this;
    }
}