<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersWeatherFocustModel extends Model
{
    use HasFactory;
    protected $table='users_weather_focust';
    protected $fillable=[
    'firstname',
    'lastname',
    'gender',
    'long',
    'lat'
    ];

protected $hidden=[
'created_at',
'update_at',
];



}
