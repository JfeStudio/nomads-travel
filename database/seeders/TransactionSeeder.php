<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaction = [
            [
                "travel_packages_id" => 2,
                "users_id" => 1,
                "additional_visa" => 330000,
                "transaction_total" => 1000000,
                "transaction_status" => "PENDING",
            ],
            [
                "travel_packages_id" => 2,
                "users_id" => 2,
                "additional_visa" => 220000,
                "transaction_total" => 2000000,
                "transaction_status" => "PENDING",
            ],
            [
                "travel_packages_id" => 3,
                "users_id" => 6,
                "additional_visa" => 110000,
                "transaction_total" => 3000000,
                "transaction_status" => "PENDING",
            ],
            [
                "travel_packages_id" => 4,
                "users_id" => 2,
                "additional_visa" => 1100,
                "transaction_total" => 30000,
                "transaction_status" => "PENDING",
            ],
        ];
        foreach ($transaction as $value) {
            Transaction::create($value);
        }

        // Transaction::create([
        //     "travel_packages_id" => 1,
        //     "users_id" => 1,
        //     "additional_visa" => 0,
        //     "transaction_total" => 1000000,
        //     "transaction_status" => "PENDING",
        // ]);
    }
}
