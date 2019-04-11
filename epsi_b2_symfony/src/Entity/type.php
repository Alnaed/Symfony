<?php

namespace App\Entity;

class Type
{
    const Type_Fire  = 1;
    const Type_Water = 2;
    const Type_Plant = 3;
    const Type_Normal = 4;
    const Type_Electric = 5;

    public function TypeIsStrongAgainst($Attack_Type,$Defense_Type)
    {
        switch ($Defense_Type)
            {
                case self::Type_Fire:
                    return (self::Type_Water === $Attack_Type)? true: false;
                    break;
                case self::Type_Water:
                    return (self::Type_Plant === $Attack_Type)? true: false;
                    break;
                case self::Type_Plant:
                    return (self::Type_Fire === $Attack_Type)? true: false;
                    break;



            }
    }

    public function TypeIsWeakAgainst($Attack_Type,$Defense_Type)
    {
        if($Attack_Type === self::Type_Fire && $Defense_Type === self::Type_Water){
            return true;
        }elseif($Attack_Type === self::Type_Fire && ($Defense_Type === self::Type_Fire || $Defense_Type === self::Type_Plant)){
            return false;
        }
    }

}




