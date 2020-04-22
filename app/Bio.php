<?php

namespace App;

use App\User;
use App\Department;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    protected $guarded =[];
   public function user(){
       return $this->belongsTo(User::class);
   }
   public function department(){
    return $this->belongsTo(Department::class);
}
}
