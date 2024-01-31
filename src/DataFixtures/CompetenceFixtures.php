<?php

namespace App\DataFixtures;

use App\Entity\Competence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CompetenceFixtures extends Fixture
{
    public const PRESENTATION = [
        [
            'name' => 'Back end',
            'description' => 'Passionnée par le développement, je débute avec 
            énergie ma carrière dans la création de solutions back-end. 
            Mon engagement est de fournir des codes propres et évolutifs, 
            tout en continuant à apprendre pour garantir des contributions 
            positives à chaque projet. 
            Mon objectif est de contribuer activement à des solutions technologiques 
            tout en perfectionnant mes compétences jour après jour.',
            'picture' => 'build/images/PHP-logo.png',
            'picture2' => 'build/images/symfony_black_03.png',
            'picture3' => 'build/images/MySQL_logo_PNG7.png',
            'picture4' => 'build/images/github-mark-white.png',
            'picture5' => 'build/images/twig-logo.png',
        ],
        [
            'name' => 'Front end',
            'description' => 'Bien décidée à créer des interfaces utilisateur 
            captivantes et réactives, je m\'engage pleinement dans le 
            développement front-end. 
            Mon approche créative et mon désir constant d\'apprendre me dirigent 
            vers la création de solutions visuelles impactantes, 
            contribuant ainsi à une expérience utilisateur immersive et mémorable.',
            'picture' => 'build/images/HTML5_logo_and_wordmark.svg.png',
            'picture2' => 'build/images/CSS3_logo_and_wordmark.svg.png',
            'picture3' => 'build/images/Javascript_badge.svg.png',
            'picture4' => 'build/images/Bootstrap_logo.svg.png',
            'picture5' => 'build/images/uikit.webp',
        ],
        [
            'name' => 'Design',
            'description' => 'Catalyseur créative passionnée par le design, j\'apporte 
            une expertise artistique à chaque projet. 
            Ma vision esthétique, associée à ma maîtrise des outils graphiques, 
            se traduit par des créations visuelles percutantes et mémorables. 
            Prête à transformer des concepts en œuvres visuelles remarquables, 
            je suis déterminée à faire du design une expérience mémorable 
            pour chaque utilisateur.',
            'picture' => 'build/images/figma-logo.png',
            'picture2' => 'build/images/canva-icon-png.png',
            'picture3' => 'build/images/Adobe_InDesign_logo_PNG1.png',
            'picture4' => 'build/images/Photoshop_logo_PNG2.png',
            'picture5' => '',
        ],
        [
            'name' => 'Gestion de projets',
            'description' => 'Dotée d’une solide expérience en gestion de projets, 
            notamment en tant que chef de projet, je suis spécialisée 
            dans la gestion de projets intégrative (GPI) ainsi que dans la méthode Agile.
            Mon expertise se traduit par une orchestration efficace des équipes et 
            des ressources, assurant la livraison réussie de projets 
            dans les délais impartis. 
            Mon approche collaborative et ma capacité à naviguer entre les méthodologies 
            font de moi un chef de projet polyvalent et 
            orienté résultats.',
            'picture' => 'build/images/projetAgile.png',
            'picture2' => 'build/images/sprint_cycle-c.png',
            'picture3' => '',
            'picture4' => '',
            'picture5' => '',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PRESENTATION as $skill) {
            $competence = new Competence();
            $competence->setName($skill['name']);
            $competence->setDescription($skill['description']);
            $competence->setPicture($skill['picture']);
            $competence->setPicture2($skill['picture2']);
            $competence->setPicture3($skill['picture3']);
            $competence->setPicture4($skill['picture4']);
            $competence->setPicture5($skill['picture5']);
            $manager->persist($competence);
        }
        $manager->flush();
    }
}
