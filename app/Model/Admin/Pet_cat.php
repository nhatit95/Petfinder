<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pet_cat extends Model
{
    protected $table        = 'pet_categories';
    protected $primaryKey   = 'cat_id';
    public $timestamps      = false;
    protected $fillable     = ['cat_id', 'cat_name'];

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

    // public function getBreeds(){
    //     $result =DB::table('pet_categories')->select('cat_name')->groupBy('cat_name')->get();
    // }

    public function editItem($id, $moItem){
        $oItem = $this->findOrFail($id);
        return $oItem->update($moItem);
    }
}
