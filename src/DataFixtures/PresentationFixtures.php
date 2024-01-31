<?php

namespace App\DataFixtures;

use App\Entity\Presentation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PresentationFixtures extends Fixture
{
    public const PRESENTATION = [
        [
        'description' => 'Je suis de nature très curieuse, 
        j’aime apprendre de nouvelles choses et  découvrir le monde.
        Dynamique, enthousiaste, mais aussi rigoureuse et polyvalente,  
        je sais m’adapter à n’importe quelle situation.
        Avec un goût prononcé pour le domaine artistique et créatif, 
        j’aime créer et améliorer ce que je fais.',

        'formation' => 'Forte d\'une formation initiale axée sur le commerce , 
        j\'ai enrichi mon parcours en intégrant 
        le management transversal, les principes des 5S et une certification 
        de formateur. 
        Passionnée par les nouvelles technologies, j\'ai naturellement évolué 
        vers le développement web & mobile, 
        fusionnant ainsi ma solide base commerciale avec une compétence pointue 
        dans le domaine technologique. 
        Mon parcours reflète une synergie entre expertise commerciale, 
        leadership transversal et innovation digitale, 
        prêt à relever des défis divers et stimulants.',

        'experience' => 'Forte d\'une expertise de plus de 22 ans, mon parcours 
        professionnel s\'est façonné à travers une 
        diversité de compétences clés : du développement web & mobile à la 
        gestion de projets, de la formation à 
        l\'amélioration des performances organisationnelles. 
        J\'ai démontré mon engagement en optimisant l\'efficacité des services 
        via le développement d\'outils informatiques. 
        Mon savoir-faire s\'étend également à la communication, avec la 
        création et la mise en page de supports promotionnels impactants.
        En outre, ma maîtrise des rapports d\'analyse, des statistiques 
        et de la gestion budgétaire atteste de ma capacité 
        à apporter une valeur ajoutée stratégique à toute mission.',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PRESENTATION as $presData) {
            $presentation = new Presentation();
            $presentation->setDescription($presData['description']);
            $presentation->setFormation($presData['formation']);
            $presentation->setExperience($presData['experience']);
            $manager->persist($presentation);
        }
        $manager->flush();
    }
}
