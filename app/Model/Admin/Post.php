<?php

namespace App\Model\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    use Notifiable;
    protected $table        = 'posts';
    protected $primaryKey   = 'post_id';
    public $timestamps      = false;
    protected $fillable     = ['post_id', 'cat_id', 'user_id', 'post_name', 'discription', 'content', 'avatar', 'create_at', 'update_at', 'status' ];


    public function getItems(){
    	return $this->all();
    }
    public function getItem($id){
        return $this->findOrFail($id);
    }

    public function getYourPosts($id){
        return $this->where('user_id', '=', $id)->get();
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


