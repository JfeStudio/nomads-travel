<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create transaction details seeder
        $transaction_details = [
            [
                "transactions_id" => 1,
                "name" => "Test User",
                "nationality" => "Indonesia",
                "is_visa" => 0,
                "doe_passport" => "2021-12-31",
            ],
            [
                "transactions_id" => 2,
                "name" => "Test User 2",
                "nationality" => "Jakarta",
                "is_visa" => 1,
                "doe_passport" => "2021-12-31",
            ],
            [
                "transactions_id" => 3,
                "name" => "Test User lagi",
                "nationality" => "Jakarta",
                "is_visa" => 1,
                "doe_passport" => "2021-12-31",
            ],
            [
                "transactions_id" => 3,
                "name" => "admin",
                "nationality" => "Jakarta",
                "is_visa" => 1,
                "doe_passport" => "2021-12-31",
            ],
        ];
        foreach ($transaction_details as $value) {
            TransactionDetail::create($value);
        }
    }
}
