<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\Movie;

use App\Service\Slugger;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\DataFixtures\Faker\QuestionAndTagProvider;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // Je crée une instance de Faker en français
        $generator = Faker\Factory::create('fr_FR');

        // Je crée en "dur" des instances de User et de Role
        // pour l'exportation, si il y a une regénération de fixtures
        // elles seront toujours disponible
        $roleAdmin = New Role();
        $roleAdmin->setCode('ROLE_ADMINISTRATOR');
        $roleAdmin->setname('Administrateur');

        $roleUser = New Role();
        $roleUser->setCode('ROLE_USER');
        $roleUser->setname('Utilisateur');

        $roleModerator = New Role();
        $roleModerator->setCode('ROLE_MODERATOR');
        $roleModerator->setname('Modérateur');

        $manager->persist($roleAdmin);
        $manager->persist($roleUser);
        $manager->persist($roleModerator);

        $userAdmin =  new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPassword($this->encoder->encodePassword($userAdmin, 'admin'));
        $userAdmin->setEmail('admin@admin.fr');
        $userAdmin->setRole($roleAdmin);

        $manager->persist($userAdmin);

        $userSimple =  new User();
        $userSimple->setUsername('user');
        $userSimple->setPassword($this->encoder->encodePassword($userSimple, 'user'));
        $userSimple->setEmail('user@user.fr');
        $userSimple->setRole($roleUser);

        $manager->persist($userSimple);

        $userModerator =  new User();
        $userModerator->setUsername('momo');
        $userModerator->setPassword($this->encoder->encodePassword($userModerator, 'moderator'));
        $userModerator->setEmail('momo@momo.fr');
        $userModerator->setRole($roleModerator);

        $manager->persist($userModerator);

        $generator->addProvider(new QuestionAndTagProvider($generator));

        $populator = new Faker\ORM\Doctrine\Populator($generator, $manager);

        $populator->addEntity('App\Entity\Question', 10, array(
            'author' => function() use ($generator) {
                return $generator->unique()->name();
            },
        ));

        $populator->addEntity('App\Entity\Answer', 20, array(
            'author' => function() use ($generator) {
                return $generator->unique()->name();
            },
        ));

        $populator->addEntity('App\Entity\Tag', 10 , array(
          'name' => function() use ($generator) { return $generator->unique()->questionTag(); },
      ));
        // Faker ajoute les données générées en BDD
        // en retour il fournit les elements inséré + leur id car créé
        $inserted = $populator->execute();


    }

}
