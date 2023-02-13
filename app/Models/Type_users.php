<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;

class Type_users extends Model
{
    use HasFactory;
    
    public function users()
     {
        return $this->hasMany(User::class);
     }
}
