<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    // create fillable transaction details
    protected $fillable = [
        "transactions_id",
        "name",
        "nationality",
        "is_visa",
        "doe_passport",
    ];

    // protected $hidden = [];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, "transactions_id", "id");
    }
}
