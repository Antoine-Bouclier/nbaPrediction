<?php

namespace App\DataFixtures;

use App\Entity\EstFranchise;
use App\Entity\WestFranchise;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    public function getEstFranchise()
    {
        return [
            [
                'town' => 'Boston',
                'name' => 'Celtics',
                'logo' => '',
            ],
            [
                'town' => 'Milwaukee',
                'name' => 'Bucks',
                'logo' => '',
            ],
            [
                'town' => 'Cleveland',
                'name' => 'Cavaliers',
                'logo' => '',
            ],
            [
                'town' => 'Orlando',
                'name' => 'Magic',
                'logo' => '',
            ],
            [
                'town' => 'New York',
                'name' => 'Knicks',
                'logo' => '',
            ],
            [
                'town' => 'Miami',
                'name' => 'Heat',
                'logo' => '',
            ],
            [
                'town' => 'Philadelphia',
                'name' => '76ers',
                'logo' => '',
            ],
            [
                'town' => 'Indiana',
                'name' => 'Pacers',
                'logo' => '',
            ],
            [
                'town' => 'Chicago',
                'name' => 'Bulls',
                'logo' => '',
            ],
            [
                'town' => 'Atlanta',
                'name' => 'Hawks',
                'logo' => '',
            ],
            [
                'town' => 'Brooklyn',
                'name' => 'Nets',
                'logo' => '',
            ],
            [
                'town' => 'Toronto',
                'name' => 'Raptors',
                'logo' => '',
            ],
            [
                'town' => 'Charlotte',
                'name' => 'hornets',
                'logo' => '',
            ],
            [
                'town' => 'Washington',
                'name' => 'Wizards',
                'logo' => '',
            ],
            [
                'town' => 'Detroit',
                'name' => 'Pistons',
                'logo' => '',
            ],
        ];
    }

    public function getWestFranchise()
    {
        return [
            [
                'town' => 'Minnesota',
                'name' => 'Timberwolves',
                'logo' => '',
            ],
            [
                'town' => 'Oklahoma',
                'name' => 'Thunder',
                'logo' => '',
            ],
            [
                'town' => 'Denver',
                'name' => 'Nuggets',
                'logo' => '',
            ],
            [
                'town' => 'Los Angeles',
                'name' => 'Clippers',
                'logo' => '',
            ],
            [
                'town' => 'New Orleans',
                'name' => 'Pelicans',
                'logo' => '',
            ],
            [
                'town' => 'Phoenix',
                'name' => 'Suns',
                'logo' => '',
            ],
            [
                'town' => 'Sacramento',
                'name' => 'Kings',
                'logo' => '',
            ],
            [
                'town' => 'Dallas',
                'name' => 'Mavericks',
                'logo' => '',
            ],
            [
                'town' => 'Los Angeles',
                'name' => 'Lakers',
                'logo' => '',
            ],
            [
                'town' => 'Golden States',
                'name' => 'Warriors',
                'logo' => '',
            ],
            [
                'town' => 'Utah',
                'name' => 'Jazz',
                'logo' => '',
            ],
            [
                'town' => 'Houston',
                'name' => 'Rockets',
                'logo' => '',
            ],
            [
                'town' => 'Memphis',
                'name' => 'Grizzlies',
                'logo' => '',
            ],
            [
                'town' => 'Portland',
                'name' => 'Trail Blazers',
                'logo' => '',
            ],
            [
                'town' => 'San Antonio',
                'name' => 'Spurs',
                'logo' => '',
            ],
        ];
    }
}

