<?php

namespace App\Model\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Service extends Authenticatable
{
    use Notifiable;
    protected $table        = 'services';
    protected $primaryKey   = 'service_id';
    public $timestamps      = false;
    protected $fillable     = ['service_id', 'cat_id', 'user_id', 'service_name', 'description', 'content', 'avatar', 'price', 'status' ];


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


