<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "title",
        "slug",
        "location",
        "about",
        "featured_event",
        "language",
        "foods",
        "departure_date",
        "duration",
        "type",
        "price",
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, "travel_packages_id", "id");
    }

    // percobaan notifikasi
    // public function details()
    // {
    //     return $this->hasMany(
    //         TransactionDetail::class,
    //         "transactions_id",
    //         "id"
    //     );
    // }
    // public function travel_package()
    // {
    //     return $this->belongsTo(
    //         TravelPackage::class,
    //         "travel_packages_id",
    //         "id"
    //     );
    // }
    // public function user()
    // {
    //     return $this->belongsTo(User::class, "users_id", "id");
    // }
}
