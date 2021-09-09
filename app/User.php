<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Book;
use App\College;
use App\Department;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'phone', 'id_college', 'id_department', 'social_media'
    ];
    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function college()
    {
        return $this->belongsTo(College::class,'id_college');
    } public function department()
    {
        return $this->belongsTo(Department::class,'id_department');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
