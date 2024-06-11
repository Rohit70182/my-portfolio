<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *     
     */
    const ROLE_ADMIN = 0;

    const ROLE_USER = 1;
    
    const STATE_ACTIVE = 1;
    
    const STATE_INACTIVE = 0;

    const ROLE_SERVICE_PROVIDER = 2;

    const RESET_KEY = 16;

    const IS_VERIFIED = 1;

    const GENDER_MALE = 1;

    const GENDER_FEMALE = 2;

    protected $table = 'users';

    public $appends = ['image_url'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'dob',
        'phone',
        'address',
        'role',
        'password_reset_token',
        'state_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public static function getRoleOptions($id = null)
    {
        $list = array(
            self::ROLE_ADMIN => "Admin"
        );
        if ($id === null)
            return $list;
        return isset($list[$id]) ? $list[$id] : 'Not Defined';
    }

    public function getRole()
    {
        $list = self::getRoleOptions();
        return isset($list[$this->role]) ? $list[$this->role] : 'Not Defined';
    }

    public function getGender()
    {
        switch ($this->gender) {
            case self::GENDER_MALE:
                return "Male";

            case self::GENDER_FEMALE:
                return "Female";
                break;

            default:
                return "Not Defined";
        }
    }
    
    public static function getStateOptions($id = null)
    {
        $list = array(
            self::STATE_ACTIVE => "Active",
            self::STATE_INACTIVE => "Inactive"
        );
        if ($id === null)
            return $list;
            return isset($list[$id]) ? $list[$id] : 'Not Defined';
    }
    
    public function getState()
    {
        $list = self::getStateOptions();
        return isset($list[$this->state_id]) ? $list[$this->state_id] : 'Not Defined';
    }

    public function getImageUrlAttribute()
    {
        if($this->image){
            return asset('public/uploads/'.$this->image);
        } else {
            return null;
        }
    }
}
