<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bootcoder;

class Codersgroup extends Model
{
    protected $fillable = ['groupname'];

    public function bootcoders()
    {
        return $this->hasMany(Bootcoder::class);
    }

}