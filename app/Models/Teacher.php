<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];

    //============= User =================//

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
