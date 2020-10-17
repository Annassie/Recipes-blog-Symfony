<?php

namespace App\DataFixtures;

use App\Controller\UserController;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
}

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        // add user to DB
        $user = new User();
        $user->setEmail('test@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword($user, '12345'));
        $user->setRoles(['ROLE_Admin']);
        $manager->persist($user);
        $manager->flush();
    }
}
