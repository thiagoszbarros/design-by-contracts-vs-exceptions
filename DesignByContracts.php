<?php

namespace App;

use App\ClientValidatorWithDesignByContracts;

require_once __DIR__ . '/vendor/autoload.php';

$result = (new ClientValidatorWithDesignByContracts())->validate(1, 2, 3);

if (!$result->getIsValid()) {
    echo json_encode($result->getErrors());
    return;
}

echo ('Faz alguma coisa');