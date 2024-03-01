<?php

declare(strict_types=1);

namespace App\Contract\Enums;

enum CareerCessationEnum: string
{
    case Decease = "Deces";
    case Revocation = "Revocation";
    case Retraite = "Retraite";
    case Demission = "Demission";

    case Other = "Autre";
}
