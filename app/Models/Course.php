<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function platform(){
        return $this->belongsTo(Platform::class);//Call to a member function addEagerConstraints() on null -return na korate ei error dicchilo
    }
}
