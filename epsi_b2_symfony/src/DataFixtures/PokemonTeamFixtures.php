<?php

namespace App\DataFixtures;

use App\Entity\PokemonTeam;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\DataFixtures\TrainerFixtures;
use App\Entity\Pokemon;



class PokemonTeamFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        foreach($this->getTeams() as [$trainer,$pokemon,$nickname,$team]) {
            $PokemonTeam =  new PokemonTeam;
            $PokemonTeam 
            ->addTrainer($this->getReference($trainer))
            ->addPokemon($this->getReference($pokemon))
            ->setPokemonNickname($nickname)
            ->setPokemonHP($this->getReference($pokemon)->getHitpoint())

            ;
            $manager ->persist($PokemonTeam);
            $reference = $this->addReference($team,$PokemonTeam);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TrainerFixtures::class
        ];
    }


    /**@return array */
    public function getTeams()
    {
        //username, pokemons, name
        return [
            ['Admin','Arceus','YHWE','ADMINTEAM'],
            ['Sasha','Limagma','Salamèche','TeamAnime'],
            ['Sasha','Chetiflor','Bulbizarre', 'TeamAnime1'],
            ['Sasha','Lovdisk','Carapuce', 'TeamAnime2'],
            ['Red','Pikachu','Partner','DreamTeam']
        ];
    }




}

