<?php

namespace App\Contract\Enums;

enum PersonCivilStatusEnum: string
{
    case Celibataire = 'Celibataire';
    case Marie = 'Marié(e)';
    case NonReconnu = 'Non reconnu';
}
