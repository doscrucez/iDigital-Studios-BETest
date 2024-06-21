<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_t extends Model
{
    use HasFactory;
    protected $table = 'users_ts';
    protected $fillable = ['username_uts', 'password_uts', 'id_ets', 'id_rts', 'created_at', 'updated_at'];
    
    public function setPasswordAttribute($value){
        $this->atributes['password_uts'] = bcrypt($value);
    }

    public function roles(){
        return $this->belongsTo(roles_t::class, 'id_rts');
    }
    public function employees(){
        return $this->belongsTo(employees_t::class, 'id_ets');
    }
}
