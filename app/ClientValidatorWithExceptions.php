<?php

namespace App;

use InvalidArgumentException;

class ClientValidatorWithExceptions
{
    private function validateName($name)
    {
        if (strlen($name) < 3) {
            throw new InvalidArgumentException('O nome do deve ter pelo menos 3 caracteres.');
        }
    }

    private function validateAge($age)
    {
        if ($age <= 17) {
            throw new InvalidArgumentException('A idade deve ser pelo menos 18 anos.');
        }
    }

    private function ValidateDocument($document)
    {
        if (strlen($document) != 11) {
            throw new InvalidArgumentException('O documento deve ter 11 caracteres.');
        }
    }

    public function validate($name, $age, $document)
    {
        $this->validateName($name);
        $this->validateAge($age);
        $this->ValidateDocument($document);
    }
}