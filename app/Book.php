<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;

class Book extends Model
{
    protected $fillable = [
        'title','state','image','id_department','id_college','price','sold','id_user','enabled','describtion'
    ];
    public $timestamps = false;    

    
    protected $casts = [
        'date_of_publication'  => 'date:Y-m-d',
        'created_date'  => 'date:Y-m-d',
        'modified_date'  => 'date:Y-m-d',
        'deleted_date'  => 'date:Y-m-d',
    ];

    public function getPublicationDateAttribute(  ) {
       return  (new Carbon( $this->attributes['date_of_publication']))->format('d/m/y');
      }
      
      public function user()
      {
          return $this->belongsTo(User::class,'id_user');
      }
    		
}
