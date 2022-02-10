<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    protected $guarded = [];

    public function role(){
    	return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}