<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;

class College extends Model
{
    public $timestamps = false;    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'enabled'
    ];
  
    public function department()
    {
        return $this->hasMany(Department::class);
    }
    public function users()
    {
        return $this->hasMany(App\User::class);
    }
    
      

}
