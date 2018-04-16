<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table 		= 'cat';
	protected $primaryKey 	= 'id_cat';
	public $timestamps 		= false;
	protected $fillable 	= ['id_cat', 'name'];

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
