<?php

namespace Database\Seeders;

use App\Models\TravelPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $travel_packages = [
            [
                "title" => "Derata, Bali",
                "slug" => "derata-bali",
                "location" => "Indonesia",
                "about" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum a laudantium eum sapiente, voluptates iusto dicta dolores. A harum fugiat laborum et laboriosam doloremque maiores. Nostrum autem non voluptates nobis, aperiam, unde repellendus tenetur quisquam laborum pariatur harum atque veniam. Magnam sint provident reprehenderit aliquid? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate repellendus beatae, incidunt, placeat possimus exercitationem quibusdam temporibus explicabo inventore, dolore doloremque ducimus et quidem numquam eaque expedita totam minus quos!
                    ",
                "featured_event" => "madang babi",
                "language" => "Indonesia",
                "foods" => "Makan Gila",
                "departure_date" => "2021-03-03",
                "duration" => "5D",
                "type" => "Open Trip",
                "price" => 1000000,
            ],
            [
                "title" => "Bromo, Prob",
                "slug" => "bromo-prob",
                "location" => "Indonesia",
                "about" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum a laudantium eum sapiente, voluptates iusto dicta dolores. A harum fugiat laborum et laboriosam doloremque maiores. Nostrum autem non voluptates nobis, aperiam, unde repellendus tenetur quisquam laborum pariatur harum atque veniam. Magnam sint provident reprehenderit aliquid? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate repellendus beatae, incidunt, placeat possimus exercitationem quibusdam temporibus explicabo inventore, dolore doloremque ducimus et quidem numquam eaque expedita totam minus quos!",
                "featured_event" => "naik gunung",
                "language" => "Indonesia",
                "foods" => "Makan Gila",
                "departure_date" => "2021-03-03",
                "duration" => "5D",
                "type" => "Open Trip",
                "price" => 3000000,
            ],
            [
                "title" => "Nusa Penida",
                "slug" => "nusa-penida",
                "location" => "Bali",
                "about" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum a laudantium eum sapiente, voluptates iusto dicta dolores. A harum fugiat laborum et laboriosam doloremque maiores. Nostrum autem non voluptates nobis, aperiam, unde repellendus tenetur quisquam laborum pariatur harum atque veniam. Magnam sint provident reprehenderit aliquid? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate repellendus beatae, incidunt, placeat possimus exercitationem quibusdam temporibus explicabo inventore, dolore doloremque ducimus et quidem numquam eaque expedita totam minus quos!",
                "featured_event" => "balap motor",
                "language" => "Indonesia",
                "foods" => "Makan Gila",
                "departure_date" => "2021-03-03",
                "duration" => "5D",
                "type" => "Open Trip",
                "price" => 5000000,
            ],
            [
                "title" => "Pulau Derawan",
                "slug" => "pulau-derawan",
                "location" => "Kalimantan",
                "about" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum a laudantium eum sapiente, voluptates iusto dicta dolores. A harum fugiat laborum et laboriosam doloremque maiores. Nostrum autem non voluptates nobis, aperiam, unde repellendus tenetur quisquam laborum pariatur harum atque veniam. Magnam sint provident reprehenderit aliquid? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate repellendus beatae, incidunt, placeat possimus exercitationem quibusdam temporibus explicabo inventore, dolore doloremque ducimus et quidem numquam eaque expedita totam minus quos!",
                "featured_event" => "perang",
                "language" => "Indonesia",
                "foods" => "Makan Gila",
                "departure_date" => "2021-03-03",
                "duration" => "5D",
                "type" => "Open Trip",
                "price" => 10000000,
            ],
        ];
        foreach ($travel_packages as $value) {
            TravelPackage::create($value);
        }
    }
}
