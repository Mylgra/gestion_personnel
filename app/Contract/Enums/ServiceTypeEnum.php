<?php

namespace App\Contract\Enums;

enum ServiceTypeEnum: string
{
    case Politique = 'Politique';
    case Administratif = 'Administratif';
    case Appui = 'Appui';
    case Autre = 'Autre';
}
