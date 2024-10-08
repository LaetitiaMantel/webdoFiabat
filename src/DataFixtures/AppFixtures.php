<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('Laetitia');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('$2y$13$nLf0MAlwK3oQBNVeZJaXduk2O5CzhldPfG/9lDNCNgD5pHTaiIyOS');
        $user->setPhoneNumber('0680282331');
        $manager->persist($user);

        $manager->flush();
    }
}