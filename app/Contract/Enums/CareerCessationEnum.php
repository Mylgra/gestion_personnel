<?php

namespace App\Contract\Enums;

enum CareerCessationEnum: string
{
    case Decease = 'Deces';
    case Revocation = 'Revocation';
    case Retraite = 'Retirement';
    case Demission = 'Demission';

    case Other = 'Autre';
}
