<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class User_roles extends Model
{
    protected $table        = 'user_roles';
    protected $primaryKey   = 'role_id';
    public $timestamps      = false;
    protected $fillable     = ['role_id', 'role_name'];

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
