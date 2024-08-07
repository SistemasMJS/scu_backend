<?php
<<<<<<< HEAD

namespace App\Models;

=======
 
namespace App\Models;
 
>>>>>>> 77f8ecb55dac272b16a950d189d87c9d4ef9b664
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD

class User extends Authenticatable
{
    use HasFactory, Notifiable;

=======
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject; 
 
class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;
 
>>>>>>> 77f8ecb55dac272b16a950d189d87c9d4ef9b664
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
<<<<<<< HEAD
    ];

=======
        'active',
    ];
 
>>>>>>> 77f8ecb55dac272b16a950d189d87c9d4ef9b664
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
<<<<<<< HEAD

=======
 
>>>>>>> 77f8ecb55dac272b16a950d189d87c9d4ef9b664
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD
}
=======
 
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
 
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
>>>>>>> 77f8ecb55dac272b16a950d189d87c9d4ef9b664
