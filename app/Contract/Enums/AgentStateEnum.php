<?php

namespace App\Contract\Enums;

enum AgentStateEnum: string
{
    case ACTIF = 'Actif';

    case INACTIF = 'Inactif';

    case PASSIF = 'Passif';
}
