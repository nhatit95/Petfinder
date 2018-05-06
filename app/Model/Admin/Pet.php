<?php

namespace App\Model\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pet extends Authenticatable
{
    use Notifiable;
    protected $table        = 'pets';
    protected $primaryKey   = 'pet_id';
    public $timestamps      = false;
    protected $fillable     = ['pet_id', 'cat_id', 'user_id', 'pet_name', 'age', 'avatar', 'city', 'gender', 'map_coordinates', 'discription', 'status', 'address' ];


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
}


