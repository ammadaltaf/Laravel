<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory,HasApiTokens;
    public function roles(){
       return  $this->belongsToMany(Role::class,'user_role');
    }
    // ONE TO MANY RELATION
    public function post(){
        return $this->hasMany(Post::class);
    }
    // MODEL EVENTS
    // protected static function booted():void{
    //     static::deleted(function($user){
    //         $user->post()->delete();
    //     });
    // }
}
