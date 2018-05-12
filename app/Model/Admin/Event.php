<?php

namespace App\Model\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Event extends Authenticatable
{
    use Notifiable;
    protected $table        = 'events';
    protected $primaryKey   = 'event_id';
    public $timestamps      = false;
    protected $fillable     = ['event_id', 'cat_id', 'user_id', 'event_name', 'time', 'avatar', 'location', 'price', 'content', 'status' ];


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

    public function getYourEvents($id){
        return $this->where('user_id', '=', $id)->get();
    }
}


