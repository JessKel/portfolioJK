<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public const PROJECT = [
        [
            'title' => 'Projet 1 : Le Palais du Kebab',
            'description' => 'Site vitrine d’un restaurant de Kebab fictif
            réalisé dans le cadre de ma formation.',
            'technology' => 'HMTL, CSS',
            'link' => 'https://github.com/JessKel/Le-palais-du-kebab.git',
            'picture' => 'build/images/palaisdukebab.png',
            'picture2' => 'build/images/LogoPDK.png',
        ],
        [
            'title' => 'Projet 2 : Stras’zik',
            'description' => 'Site vitrine d’un groupe de rock alsacien
            réalisé dans le cadre de ma formation.',
            'technology' => 'HTML, CSS, PHP, Uikit',
            'link' => 'https://github.com/JessKel/Projet2-Straszik.git',
            'picture' => 'build/images/straszik_home.png',
            'picture2' => 'build/images/LogoStraszik.png',
        ],
        [
            'title' => 'Projet 3 : Externatic',
            'description' => 'Application web & mobile qui facilite toutes les démarches de 
            recrutement pour les collaborateurs d’Externatic et qui offre une interface claire, 
            concise et ergonomique pour les candidats.
            Réalisé dans le cadre de ma formation.',
            'technology' => 'HTML, CSS, PHP, Symfony, Bootstrap, JavaScript',
            'link' => 'https://github.com/JessKel/Projet3-Externatic.git',
            'picture' => 'build/images/externatic_home.png',
            'picture2' => 'build/images/EXTERNATIC-LOGO-MINIATURE-RVB.png',
        ],
        [
            'title' => 'Hackathon 1 : Dark Santa',
            'description' => 'Application web sur le thème des fêtes de fin d’année : 
            le “vrai” site du Père Noël (site humoristique).
            Réalisé dans le cadre de ma formation.',
            'technology' => 'HTML, CSS, PHP,  JavaScript',
            'link' => 'https://github.com/JessKel/Dark-Santa3.0.git',
            'picture' => 'build/images/darksanta.png',
            'picture2' => 'build/images/logoDarkSanta.png',
        ],
        [
            'title' => 'Hackathon 2 : L’Oréal Reveal Yourself',
            'description' => 'Application web pour le groupe l’Oréal : outil basé sur les régles 
            récurrentes de référencement naturel pour optimiser le processus de nommage et ainsi 
            éviter les erreurs humaines, en intégrant une IA intelligente.
            Réalisé dans le cadre de ma formation.',
            'technology' => 'HTML, CSS, PHP, Bootstrap,  JavaScript, OpenAI',
            'link' => 'https://github.com/JessKel/Hackhathon-L-Oreal.git',
            'picture' => 'build/images/loreal_dashboard.png',
            'picture2' => 'build/images/logoRevealYourself.png',
        ],
        [
            'title' => 'Projet en cours : Wild Series',
            'description' => 'Application web & mobile de recensement de séries.
            Réalisé dans le cadre de ma formation.',
            'technology' => 'HTML, CSS, PHP, Bootstrap,  JavaScript',
            'link' => 'https://github.com/JessKel/wild-series.git',
            'picture' => 'build/images/WildSeries_home.png',
            'picture2' => 'build/images/logoWildseries.png',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROJECT as $projectData) {
            $project = new Project();
            $project->setTitle($projectData['title']);
            $project->setDescription($projectData['description']);
            $project->setTechnology($projectData['technology']);
            $project->setLink($projectData['link']);
            $project->setPicture($projectData['picture']);
            $project->setPicture2($projectData['picture2']);
            $manager->persist($project);
        }
        $manager->flush();
    }
}
