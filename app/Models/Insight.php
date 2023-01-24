<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Insight extends Model {
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName() {

        return 'slug';
    }
}
