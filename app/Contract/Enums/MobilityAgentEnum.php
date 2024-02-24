<?php

namespace App\Contract\Enums;

enum MobilityAgentEnum: string
{
    case MiseEnDisponibilite = 'Mise en disponibilité';
    case MiseALaDiposition = 'Mise à la diposition';
    case Detachement = 'Detachement';
}
