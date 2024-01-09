<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Trait\HasImage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasImage;

    
    protected $fillable = [
        'email', 'username', 'first_name', 'last_name', 'personal_phone', 'home_phone',
        'address', 'password', 'birthdate',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


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



    // METODOS AUTHENTICATION
    // Obtener el nombre completo del usuario
    public function getFullName()
    {
        return "$this->first_name $this->last_name";
    }

    // METODOS AVATAR
    // Crear un avatar por default
    public function getDefaultAvatarPath()
    {
        return "https://cdn-icons-png.flaticon.com/512/711/711769.png";
    }

    // Obtener la imagen de la BDD
    public function getAvatarPath()
    {
        // se verifica no si existe una iamgen
        if (!$this->image)
        {
            // asignarle el path de una imagen por defecto
            return $this->getDefaultAvatarPath();
        }
        // retornar el path de la imagen registrada en la BDD
        return $this->image->path;
    }
    
    
    
    
    
}
