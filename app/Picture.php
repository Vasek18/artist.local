<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model{
	protected $table = 'pictures';
	protected $fillable = ['name'];

	public function getPathToSvgAttribute(){
		return '/user_pics/'.$this->id.'.svg';
	}
}
