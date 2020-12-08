<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sid extends Model
{
    //
    protected $table = 'sid_maps';

    public function setCategoryAttribute($value)
    {
        $this->attributes['sid'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['sid'] = json_decode($value);
    }
}
