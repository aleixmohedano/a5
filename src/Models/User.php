<?php



namespace Rentit\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table='users';
    protected $fillable=['username','email','telf','password'];

    public  function properties(){
       return $this->hasMany('Rentit\Models\Property');

    }
}