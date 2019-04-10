<?php

namespace App\DataFixtures;

use App\Entity\Trainer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class TrainerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->getUsers() as [$username,$role,$password]) {
            $Trainer =  new Trainer;
            $Trainer
                ->setUsername($username)
                ->setRoles($role)
                ->setPassword($password)

            ;
            $manager ->persist($Trainer);
            $reference = $this->addReference($username,$Trainer);
        }
        $manager->flush();
    }


    public function getOrder()
    {
        return 1;
    }

    /**@return array */
    public function getUsers()
    {
        //username, role, password
        return [
            ['Admin',['ROLE_ADMIN'],'Admin'],
            ['Sasha', ['ROLE_USER'],'OndineLove'],
            ['Red',['ROLE_USER'],'Master']
        ];
    }



}