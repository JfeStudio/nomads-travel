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
                "title" => "Bali Pandawa",
                "slug" => "bali-pandawa",
                "location" => "Bandung",
                "about" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
                "featured_event" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
                "language" => "Indonesia",
                "foods" => "Makan Gila",
                "departure_date" => "2021-03-03",
                "duration" => "5D",
                "type" => "Open Trip",
                "price" => 1000000,
            ],
            [
                "title" => "Pantai Selatan",
                "slug" => "pantai-selatan",
                "location" => "Jakarta",
                "about" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
                "featured_event" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
                "language" => "Indonesia",
                "foods" => "Makan Gila",
                "departure_date" => "2021-03-03",
                "duration" => "5D",
                "type" => "Open Trip",
                "price" => 3000000,
            ],
            [
                "title" => "Malang Batu",
                "slug" => "malang-batu",
                "location" => "Bali",
                "about" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
                "featured_event" =>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
                "language" => "Indonesia",
                "foods" => "Makan Gila",
                "departure_date" => "2021-03-03",
                "duration" => "5D",
                "type" => "Open Trip",
                "price" => 5000000,
            ],
        ];
        foreach ($travel_packages as $value) {
            TravelPackage::create($value);
        }
    }
}
