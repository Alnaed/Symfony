<?php

namespace App\DataFixtures;

use App\Entity\Attacc;
use App\Entity\type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AttaccFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->getAttaccs() as [$name,$power,$type]) {
            $Attacc =  new Attacc;
            $Attacc
                ->setName($name)
                ->setPower($power)
                ->setType($type)
            ;
            $manager ->persist($Attacc);
            $reference = $this->addReference($name,$Attacc);
        }
        $manager->flush();
    }

    /**@return array */
    public function getAttaccs()
    {
        //name, power, type
        return [
            ['Flammeche',50,Type::Type_Fire],
            ["Bulle d'O",40,Type::Type_Water],
            ['Vol-vie',30,Type::Type_Plant],
            ['Charge',30,Type::Type_Normal],
            ['Vitesse Extreme',100,Type::Type_Normal]
        ];
    }

}


