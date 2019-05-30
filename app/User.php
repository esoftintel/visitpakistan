<?php
namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable implements MustVerifyEmail
{
  use HasApiTokens, Notifiable;
  use Notifiable;
  use HasRoles;
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'name', 'email', 'password','u_phone', 'u_facebook', 'u_googleaccount','u_address','u_about', 'u_longitude', 'u_latitude','u_image', 
];
/**
* The attributes that should be hidden for arrays.
*
* @var array
*/
protected $hidden = [
'password', 'remember_token',
];

public function setPasswordAttribute($value)
{
  $this->attributes['password'] = bcrypt($value);
}
} 
?>  