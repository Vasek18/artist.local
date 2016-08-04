<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model{
	protected $table = 'pictures';
	protected $fillable = ['name', 'code', 'pic_json'];
}
