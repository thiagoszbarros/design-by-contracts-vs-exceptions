<?php

namespace App;

use App\ClientValidatorWithExceptions;

require_once __DIR__ . '/vendor/autoload.php';

try {
    (new ClientValidatorWithExceptions())->validate(1, 2, 3);

    echo 'Faz alguma coisa';
} catch (\Exception $e) {
    echo $e->getMessage();
}