<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DBUser extends Authenticatable
{
	use Notifiable;

    protected $table='user';
 	protected $primaryKey='nrp_nip';
    public $timestamps=false;
    protected $fillable=[
    'name'
    ];

 	public function reservation()
 	{
 		return $this->hasMany('App\DBReservation');
 	}
}
