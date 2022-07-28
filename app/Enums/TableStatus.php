<?php 

namespace App\Enums;

enum TableStatus: string{
    case Peding = 'peding';
    case Avaliable = 'avaliable';
    case Unavaliable = 'unavaliable';
}

