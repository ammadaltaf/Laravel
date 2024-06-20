<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
    // ONE TO ONE RELATION
    public function contact(){
       return $this->hasOne(Contact::class);
    }
    //ONE TO MANY RELATION
    public function book(){
        return $this->hasMany(Book::class);
    }
    //ACCESSOR
    public function getNameAttribute($v){
        return ucwords($v);
    }
    
}
