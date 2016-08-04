<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model{
	protected $table = 'pictures';
	protected $fillable = ['name', 'code'];

	public function getPathToSvgAttribute(){
		return '/user_pics/'.$this->id.'.svg';
	}
}
