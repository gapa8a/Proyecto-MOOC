<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function lesson(){
        //Relación uno a muchos
        return $this->hasMany('App\Models\Lesson');
    }
}
