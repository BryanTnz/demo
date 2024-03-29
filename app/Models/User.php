<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Relación de uno a muchos
    // Un usuario le pertenece un rol
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Relación de uno a muchos
    // Un usuario puede realizar muchos reportes
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    // Relación de muchos a muchos
    // Un usuario puede estar en varios pabellones
    public function wards()
    {
        return $this->belongsToMany(Ward::class)->withTimestamps();
    }

    // Relación de muchos a muchos
    // Un usuario puede estar en varias cárceles
    public function jails()
    {
        return $this->belongsToMany(Jail::class)->withTimestamps();
    }

    // Relación polimórfica uno a uno
    // Un usuario pueden tener una imagen
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }



    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    
}
