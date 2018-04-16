<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Advertisements extends Model
{
    protected $table 		= 'advertisements';
	protected $primaryKey 	= 'id_ads';
	public $timestamps 		= false;
	protected $fillable 	= ['id_ads', 'name'];

    
}
