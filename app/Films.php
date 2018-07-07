<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Films extends Model
{
    use Rateable;
    protected $table = 'films';
    protected $fillable = [
        'name', 'description', 'country_id','genre_id', 'release_date',
    ];
}
