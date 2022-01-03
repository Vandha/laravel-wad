<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use Eloquent;

class UserLogin extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function role(){
        return $this->belongsTo(Role::class,'id_role');
    }
}
