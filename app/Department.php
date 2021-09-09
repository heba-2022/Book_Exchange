<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\College;


class Department extends Model
{
    protected $fillable = [
        'name', 'enabled', 'id_college'
    ];
   

    
    public function college()
    {
        return $this->belongsTo(College::class,'id_college');
    }
    public function users()
    {
        return $this->hasMany(App\User::class);
    }
    
}
