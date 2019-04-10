<?php

namespace App\DataFixtures;

use App\Entity\PokemonTeam;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class PokemonTeamFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->getTeams() as [$trainer,$pokemon,$team]) {
            $PokemonTeam =  new PokemonTeam;
            $PokemonTeam
                ->setTrainer($username)
                ->setPokemon($pokemon)

            ;
            $manager ->persist($PokemonTeam);
            $reference = $this->addReference($team,$PokemonTeam);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }

    /**@return array */
    public function getTeams()
    {
        //username, pokemons, name
        return [
            [$this->getReference('Admin'),[$this->getReference('Arceus')],'ADMINTEAM'],
            [$this->getReference('Sasha'), [$this->getReference('Limagma'),$this->getReference('Chetiflor'),$this->getReference('Lovdisk')], 'TeamAnime']
        ];
    }




}

