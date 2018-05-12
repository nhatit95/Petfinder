<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    protected $table        = 'messages';
    protected $primaryKey   = 'mess_id';
    public $timestamps      = false;
    protected $fillable     = ['mess_id', 'from_id', 'to_id', 'mess_title', 'mess_content', 'create_at'];

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

    public function getYourMessages($id){
        return DB::table('messages')
              ->where('from_id', '=', $id)
              ->orWhere('to_id', '=', $id)
              ->get();
    }

    // public function getYourMessages($id){
    //     return $this->where('from_id =' $id)->get();
    // }
}
