<?php

namespace App\DataFixtures;

use App\Entity\Competence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Filesystem\Filesystem;


class CompetenceFixtures extends Fixture
{
    public const Competences = [
        'PHP' => ' ⭐ ⭐ ⭐ ⭐ ⭐',
        'Symfony' => ' ⭐ ⭐ ⭐ ⭐ ⭐',
        'Photoshop' => '⭐ ⭐ ⭐ ⭐ ⭐',
        'Google Sheet & Slide' => ' ⭐ ⭐ ⭐ ⭐ ⭐',
        'Figma' => ' ⭐ ⭐ ⭐ ⭐ ⭐',
        'Javascript' => ' ⭐ ⭐ ⭐ ⭐ ⭐',
        'FinalCut' => ' ⭐ ⭐ ⭐ ⭐ ⭐',
        'HTML & CSS (bootstrap, Tailwind..)' => ' ⭐ ⭐ ⭐ ⭐ ⭐',
    ];

    public function __construct(private Filesystem $filesystem)
    {
    }


    public function load(ObjectManager $manager): void
    {
        foreach (self::Competences as $name => $niveau) {
        $competence = new Competence();
        $competence->setNom($name);
        $competence->setNiveau($niveau);
       
        $manager->persist($competence);
        }

        $manager->flush();
    }
}

