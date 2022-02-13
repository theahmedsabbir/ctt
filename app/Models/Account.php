<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = [];

    public function student(){
    	return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
