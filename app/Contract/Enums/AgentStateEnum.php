<?php

declare(strict_types=1);

namespace App\Contract\Enums;

enum AgentStateEnum: string
{
    case ACTIF = 'Actif';

    case INACTIF = 'Inactif';

    case PASSIF = 'Passif';
}
