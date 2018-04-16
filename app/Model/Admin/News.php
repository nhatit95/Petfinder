<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table		=  'news';
    protected $primaryKey	=  'id_news';
    public $timestamps      = false;
	protected $fillable 	= ['id_news', 'name', 'preview_text', 'detail_text','id_cat', 'created_at', 'picture', 'updated_at'  ];


	public function getItem($id){
        return $this->findOrFail($id);
    }

    public function getItems(){
    	return DB::table('news as n')->select('n.*', 'c.name as cname')->join('cat as c', 'n.id_cat', '=', 'c.id_cat')->orderBy('n.id_news', 'DESC')->paginate(getenv('ROW_COUNT'));
    }
    public function addItem($oItem){
    	return $this->insert($oItem);
    }

    public function delItem($id){
    	$oItem =  $this->findOrFail($id);
    	return $oItem->delete();
    }

    public function editItem($id, $moItem){
        $oItem = $this->findOrFail($id);
        return $oItem->update($moItem);
    }
}
