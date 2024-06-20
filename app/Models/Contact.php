<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function student(){
        return $this->belongsTo(Student::class);
    }
    //MUTATORS 
    // Database mn koi new value insert karny sa pehly oski formating
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
}
