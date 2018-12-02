<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

	protected $table = 'Users';
	protected $primaryKey = 'IdUser';
	protected $Email = 'Email';
	protected $password = 'password';
	public $timestamps = false;

	public function Reviews() {
		return $this->hasMany('App\Reviews', 'IdUser');
	}

}
