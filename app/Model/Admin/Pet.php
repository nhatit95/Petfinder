<?php

namespace App\Model\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

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

    public function getYourPets($id){
        return $this->where('user_id', '=', $id)->get();
    }
    // public function getCities(){
    //     $result =DB::table('pets')->select('city')->groupBy('city')->get();
    // }
    // public function getAges(){
    //     $result =DB::table('pets')->select('age')->groupBy('age')->get();
    // }


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


