<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Codersgroup;

class Bootcoder extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'codersgroup_id'];
    
    public function Codersgroup()
    {
        return $this->belongsTo(Codersgroup::class);
    }
}