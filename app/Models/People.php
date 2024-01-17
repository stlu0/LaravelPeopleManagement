<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = "people_data";

    protected $fillable = [
        "name", "surname", "age", "phone_number", "email", "street", "city", "country"
    ];

    protected static function NewFactory() {
        return \Database\Factories\PeopleFactory::new();
    }

}
