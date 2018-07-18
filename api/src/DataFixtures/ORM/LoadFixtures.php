<?php
//
//namespace App\DataFixtures;
//
//use App\Entity\User;
//use Doctrine\Common\DataFixtures\FixtureInterface;
//use Doctrine\Common\Persistence\ObjectManager;
//use Nelmio\Alice\Loader\NativeLoader;
//
//class LoadFixtures implements FixtureInterface
//{
//
//    public function load(ObjectManager $manager)
//    {
//        $loader = new NativeLoader();
////        $loader->loadFileFile(__DIR__.'/fixtures.yml');
//        $loader->loadData([
//            User::class => [
//                'user_{1..10}' => [
//                    'email' => 'email()'
//                ]
//
//            ]
//        ]);
//    }
//}


namespace App\DataFixtures\ORM;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFixtures implements ORMFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setEmail('user'.$i.'@mail.com');
            $manager->persist($user);
        }

        $manager->flush();
    }
}