<?php
namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role_id']; 

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}