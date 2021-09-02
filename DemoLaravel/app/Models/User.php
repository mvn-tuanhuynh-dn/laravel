<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'birthday',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function gender($gender){
        if($gender == 1){
            return 'Male';
        }elseif($gender == 2){
            return 'Female';
        }elseif($gender == NULL){
            return 'Not Define';
        }
    }

    function academic($birthday){
        if($birthday != NULL){
            $birthday = date('Y', strtotime($birthday));
            $currentYear = date('Y');
            $age = $currentYear - $birthday;
            switch ($age){
                case $age<6:
                return 'Kindergarten';
                break;
                case $age>=6&&$age<=11:
                return 'Primary';
                break;

                case $age>=12&&$age<=15:
                return 'Junior';
                break;

                case $age>=16&&$age<=18:
                return 'High';
                break;

                case $age>18:
                return 'University';
                break;
                        
                default:
                return 'Graduated';
                break;
            }
        }else {
            return 'Not Define';
        }
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
