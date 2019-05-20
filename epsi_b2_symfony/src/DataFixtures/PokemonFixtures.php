<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use App\Entity\type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class PokemonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->getPokemons() as [$name,$pv,$type,$attacc,$attacc2]) {
            $pokemon =  new Pokemon;
            $pokemon
                ->setName($name)
                ->setHitPoint($pv)
                ->setType($type)
                ->addAttacc($attacc)
                ->addAttacc($attacc2)
            ;
            $manager ->persist($pokemon);
            $reference = $this->addReference($name,$pokemon);
        }
        $manager->flush();
    }

    /**@return array */
    public function getPokemons()
    {
        //name, pv, attack, type, attack
        return [
            ['Limagma',40,Type::Type_Fire, $this->getReference('Flammeche'),$this->getReference('Charge')],
            ['Lovdisk',50,Type::Type_Water, $this->getReference("Bulle d'O"),$this->getReference('Charge')],
            ['Chetiflor',60,Type::Type_Plant, $this->getReference('Vol-vie'),$this->getReference('Charge')],
            ['Arceus',340,Type::Type_Normal, $this->getReference('Charge'),$this->getReference('Vitesse Extreme')],
            ['Pikachu',999,Type::Type_Electric, $this->getReference('Charge'),$this->getReference('Vitesse Extreme')]
        ];
    }

}
