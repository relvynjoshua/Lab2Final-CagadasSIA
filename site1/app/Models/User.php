<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model 
{
public $timestamps = false; 
  
protected $table = 'usersite1'; 
protected $primaryKey = 'usernum';  
  
protected $fillable = [ 
    'usernum', 'username', 'password', 'gender'
]; 
}
