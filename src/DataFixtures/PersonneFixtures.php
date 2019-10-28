<?php

namespace App\DataFixtures;

use App\Entity\Personne;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PersonneFixtures extends Fixture
{

    public function load(ObjectManager $manager){

        for ($i=0; $i < 50; $i++) { 
        
            // $product = new Product();
            // $manager->persist($product);

            $personne = new Personne();

            $personne->setNom("Nom de l'usstilisateur: ")
                    ->setPrenom("Prenom de l'utilisateur: ");

            $manager->persist($personne);
        }
        $manager->flush();
    }

}
