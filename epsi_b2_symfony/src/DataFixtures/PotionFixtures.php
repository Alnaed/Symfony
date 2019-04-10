<?php

namespace App\DataFixtures;

use App\Entity\Potion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class PotionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->getPotion() as [$type,$potency]) {
            $potion =  new Potion;
            $potion
                ->setType($type)
                ->setPotency($potency)
            ;
        }

    }

    /**@return array */
    public function getPotion()
    {
        //type, potency
        return [
            ['Potion',30],
            ['Super Potion',50],
            ['Hyper Potion',80]
        ];
    }

}
