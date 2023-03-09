<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "travel_packages_id",
        "users_id",
        "additional_visa",
        "transaction_total",
        "transaction_status",
    ];
    public function getIsRegisteredAttribute()
    {
        if (!Auth::check()) {
            return false;
        }
        return Transaction::where("travel_packages_id", $this->id)
            ->where("users_id", Auth::id())
            ->exists();
    }

    // protected $hidden = [];

    public function details()
    {
        return $this->hasMany(
            TransactionDetail::class,
            "transactions_id",
            "id"
        );
    }

    public function travel_package()
    {
        return $this->belongsTo(
            TravelPackage::class,
            "travel_packages_id",
            "id"
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class, "users_id", "id");
    }
}
