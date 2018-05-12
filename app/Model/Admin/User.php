<?php

namespace App\Model\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'username', 'password', 'fullname', 'id', 'role_id', 'email', 'phone_number', 'gender', 'birthday', 'status', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token', 
    // ];

    protected $hidden = [
        'password', 'remember_token', 
    ];

    public $timestamps = false;

    public function getItems(){
    	return $this->all();
    }
    public function getItem($id){
        return $this->findOrFail($id);
    }

    public function addItem($oItem){
        return $this->insert($oItem);
    }

    public function delItem($id){
        $oItem = $this->findOrFail($id);
        return $oItem->delete();
    }

    public function editItem($id, $moItem){
        $oItem = $this->findOrFail($id);
        return $oItem->update($moItem);
    }

        public function getRememberToken()
      {
        return null; // not supported
      }

      public function setRememberToken($value)
      {
        // not supported
      }

      public function getRememberTokenName()
      {
        return null; // not supported
      }
}


